<?php

namespace App\Enum;

enum CurrencyCode: string
{
    case PLN = 'PLN';
    case USD = 'USD';
    case GBP = 'GBP';
    case EUR = 'EUR';
    case CHF = 'CHF';
}