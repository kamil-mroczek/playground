<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ErrorController extends AbstractController
{

    public function show(Request $request, \Throwable $exception): Response
    {
        return $this->json([
            'message' => $exception->getMessage(),
            'file' => $exception->getFile(),
            'line' => $exception->getLine(),
            'code' => $exception->getCode(),
            'request' => $request,
            'php_version' => phpversion(),
            'trace' => $exception->getTraceAsString(),
        ]);
    }
}
