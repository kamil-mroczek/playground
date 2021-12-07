<?php

namespace App\Common\Infrastructure\Repository;

use Doctrine\DBAL\Connection;

abstract class AbstractDbalRepository
{
    /**
     * @var Connection
     */
    protected Connection $connection;

    /**
     * @param Connection $connection
     */
    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }
}