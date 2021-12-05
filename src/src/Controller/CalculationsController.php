<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculationsController extends AbstractController
{
    #[Route('/calculations', methods: 'POST')]
    public function makeCalculation(): Response
    {
        return $this->json([]);
    }

    #[Route('/calculations', methods: 'GET')]
    public function calculationsList(): Response
    {
        return $this->json([]);
    }

    #[Route('/calculation/{calculationId}', methods: 'GET')]
    public function getCalculation(): Response
    {
        return $this->json([]);
    }
}
