<?php

namespace App\CurrencyExchange\Application\Command;

use App\Common\Application\Command\CommandInterface;
use App\CurrencyExchange\Application\Exception\WrongCurrencyPair;
use App\CurrencyExchange\Domain\Entity\CurrencyPair;

class GetQuote implements CommandInterface
{
    /**
     * @var CurrencyPair
     */
    protected CurrencyPair $currencyPair;

    /**
     * @param string $currencyPair
     * @throws WrongCurrencyPair
     */
    public function __construct(string $currencyPair)
    {
        $this->currencyPair = CurrencyPair::from($currencyPair);
    }

    /**
     * @return CurrencyPair
     */
    public function getCurrencyPair(): CurrencyPair
    {
        return $this->currencyPair;
    }
}