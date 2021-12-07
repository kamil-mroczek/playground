<?php

namespace App\Controller;

use App\Entity\CurrencyPair;
use App\Entity\Quote;
use App\Repository\QuotesRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuotesController extends AbstractController
{
    /**
     * @throws \App\Exception\WrongCurrencyPair
     */
    #[Route('/quotes', methods: 'POST')]
    public function postQuote(Request $request, ManagerRegistry $doctrine)
    {
        $quote = new Quote();
        $quote->setCurrencyPair(CurrencyPair::from($request->get('currencyPair')));
        $quote->setRate($request->get('rate'));

        $em = $doctrine->getManagerForClass(Quote::class);
        $em->persist($quote);
        $em->flush();

        return $this->json($quote);
    }

    #[Route('/quotes', methods: 'GET')]
    public function quotesList(QuotesRepository $repository): Response
    {
        $quotesList = $repository->findAllLatest();

        return $this->json($quotesList);
    }

    #[Route('/quotes/{currencyPair<[A-Z]{6}>}', methods: 'GET')]
    public function getQuoteForCurrencyPair(QuotesRepository $repository, string $currencyPair): Response
    {
        $quotesList = $repository->findByCurrencyPair($currencyPair);

        if (empty($quotesList)) {
            return $this->json([], Response::HTTP_NOT_FOUND);
        } else {
            return $this->json($quotesList);
        }
    }
}
