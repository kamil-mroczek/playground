<?php

namespace App\CurrencyExchange\Domain\Enum;

enum TransactionDirection: string
{
    case ASK = 'ASK';
    case BID = 'BID';
}