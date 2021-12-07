<?php

namespace App\CurrencyExchange\Application\Exception;

class WrongCurrencyPair extends \Exception
{
    protected $message = 'Wrong Currency Pair';
}