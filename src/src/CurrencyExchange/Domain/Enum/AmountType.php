<?php

namespace App\CurrencyExchange\Domain\Enum;

enum AmountType: string
{
    case INCOME = 'INCOME';
    case OUTCOME = 'OUTCOME';
}