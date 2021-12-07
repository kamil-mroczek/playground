<?php

namespace App\CurrencyExchange\Infrastructure\Repository;

use App\Common\Infrastructure\Repository\AbstractOrmRepository;
use App\CurrencyExchange\Domain\Entity\CurrencyPair;
use App\CurrencyExchange\Domain\Entity\Quote;
use App\CurrencyExchange\Domain\Repository\QuotesInterface as QuotesRepositoryInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class Quotes extends ServiceEntityRepository implements QuotesRepositoryInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Quote::class);
    }

    public function getAllQuotes(): \ArrayObject
    {
//        $result = $this->em->find(Quote::class);

        return $result;
    }

    public function getByCurrencyPair(CurrencyPair $pair): Quote
    {
        // TODO: Implement getByCurrencyPair() method.
        return new Quote();
    }
}