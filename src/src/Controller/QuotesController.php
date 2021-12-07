<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuotesController extends AbstractController
{

    #[Route('/quotes', methods: 'GET')]
    public function quotesList(): Response
    {
        return $this->json([]);
    }

    #[Route('/quotes/{currencyPair<[A-Z]{6}>}', methods: 'GET')]
    public function getQuoteForCurrencyPair(): Response
    {
        return $this->json([]);
    }
}
