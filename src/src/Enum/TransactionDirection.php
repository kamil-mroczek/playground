<?php

namespace App\Enum;

enum TransactionDirection: string
{
    case ASK = 'ASK';
    case BID = 'BID';
}