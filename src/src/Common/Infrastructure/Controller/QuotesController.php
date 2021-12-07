<?php

namespace App\Common\Infrastructure\Controller;

use App\CurrencyExchange\Application\Command\GetAllQuotes;
use App\CurrencyExchange\Application\Command\GetQuote;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuotesController extends AbstractController
{

    /**
     * @return Response
     * @throws \App\Common\Application\Exception\CommandHandlerNotFound
     */
    #[Route('/quotes', methods: 'GET')]
    public function getQuotesList(): Response
    {
        $command = new GetAllQuotes();
        $this->processor->handle($command);

        return $this->json([]);
    }

    /**
     * @throws \App\Common\Application\Exception\CommandHandlerNotFound
     * @throws \App\CurrencyExchange\Application\Exception\WrongCurrencyPair
     */
    #[Route('/quotes/{currencyPair<[A-Z]{6}>}', methods: 'GET')]
    public function getQuoteForCurrencyPair(string $currencyPair): Response
    {
        $command = new GetQuote($currencyPair);
        $this->processor->handle($command);

        return $this->json([]);
    }
}
