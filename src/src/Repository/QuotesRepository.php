<?php

namespace App\Repository;

use App\Entity\CurrencyPair;
use App\Entity\Quote;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class QuotesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Quote::class);
    }

    /**
     * @return array
     * @throws \Doctrine\DBAL\Exception
     */
    public function findAllLatest(): array
    {
        $conn = $this->getEntityManager()->getConnection();

        //get with SQL
        $sql = 'SELECT t1.*
                FROM quotes AS t1
                LEFT OUTER JOIN quotes AS t2
                    ON t1.currency_pair = t2.currency_pair
                        AND (t1.time < t2.time
                        OR (t1.time = t2.time AND t1.Id < t2.Id))
                WHERE t2.currency_pair IS NULL';
        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery();

        return $result->fetchAllAssociative();
    }

    /**
     * @param string $currencyPair
     * @return int|mixed|string|null
     * @throws \App\Exception\WrongCurrencyPair
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function findByCurrencyPair(string $currencyPair)
    {
        $currencyPair = CurrencyPair::from($currencyPair);

        //get with QueryBuilder
        $qb = $this->createQueryBuilder('p')
            ->where('p.currencyPair = :currency_pair')
            ->setParameter('currency_pair', (string)$currencyPair)
            ->orderBy('p.time', 'DESC');

        $query = $qb->getQuery();

        return $query->setMaxResults(1)->getOneOrNullResult();;
    }
}
