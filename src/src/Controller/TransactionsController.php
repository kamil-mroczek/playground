<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TransactionsController extends AbstractController
{

    #[Route('/transactions/{calculationId}', methods: 'POST')]
    public function acceptCalculation(): Response
    {
        //@todo

        return $this->json([]);
    }

    #[Route('/transactions', methods: 'GET')]
    public function transactionsList(): Response
    {
        //@todo

        return $this->json([]);
    }

    #[Route('/transactions/{transactionId}', methods: 'GET')]
    public function getTransaction($transactionId): Response
    {
        //@todo

        return $this->json([]);
    }
}
