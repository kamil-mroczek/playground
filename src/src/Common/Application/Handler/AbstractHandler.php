<?php

namespace App\Common\Application\Handler;

use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\Container;

abstract class AbstractHandler
{
    public function __construct(EntityManager $em)
    {

    }
}