<?php

namespace App\Common\Infrastructure\Controller;

use App\Common\Infrastructure\Processor\CommandProcessorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController as SymfonyAbstractController;

abstract class AbstractController extends SymfonyAbstractController
{
    protected CommandProcessorInterface $processor;

    public function __construct(\App\Common\Infrastructure\Processor\RequestCommandProcessor $processor)
    {
        $this->processor = $processor;
    }
}