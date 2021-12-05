<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    #[Route('/', methods: 'GET')]
    public function hello(): Response
    {
        return $this->json([
            'message' => 'Hello!',
        ]);
    }
}
