<?php

namespace App\CurrencyExchange\Domain\Repository;

use App\CurrencyExchange\Domain\Entity\CurrencyPair;
use App\CurrencyExchange\Domain\Entity\Quote;

interface QuotesInterface
{
    public function getAllQuotes(): \ArrayObject;

    public function getByCurrencyPair(CurrencyPair $pair): Quote;
}