<?php

namespace App\Common\Infrastructure\Repository;

use Doctrine\ORM\EntityManagerInterface;

abstract class AbstractOrmRepository
{
    /**
     * @var EntityManagerInterface
     */
    protected EntityManagerInterface $em;

    /**
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }
}
