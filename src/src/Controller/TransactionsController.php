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
        return $this->json([]);
    }

    #[Route('/transactions', methods: 'GET')]
    public function transactionsList(): Response
    {
        return $this->json([]);
    }

    #[Route('/transactions/{transactionId}', methods: 'GET')]
    public function getTransaction($transactionId): Response
    {
        return $this->json([]);
    }
}
