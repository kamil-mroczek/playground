<?php

namespace App\Entity;

use App\Enum\TransactionDirection;
use App\ValueObject\Rate;

class CurrencyRate
{
    /**
     * @var CurrencyPair
     */
    protected CurrencyPair $currencyPair;
    /**
     * @var TransactionDirection
     */
    protected TransactionDirection $direction;
    /**
     * @var Rate
     */
    protected Rate $rate;

    /**
     * @param CurrencyPair $currencyPair
     * @param TransactionDirection $direction
     * @param Rate $rate
     */
    protected function __construct(CurrencyPair $currencyPair, TransactionDirection $direction, Rate $rate)
    {
        $this->currencyPair = $currencyPair;
        $this->direction = $direction;
        $this->rate = $rate;
    }

    /**
     * @return CurrencyPair
     */
    public function getCurrencyPair(): CurrencyPair
    {
        return $this->currencyPair;
    }

    /**
     * @param CurrencyPair $currencyPair
     */
    public function setCurrencyPair(CurrencyPair $currencyPair): void
    {
        $this->currencyPair = $currencyPair;
    }

    /**
     * @return TransactionDirection
     */
    public function getDirection(): TransactionDirection
    {
        return $this->direction;
    }

    /**
     * @param TransactionDirection $direction
     */
    public function setDirection(TransactionDirection $direction): void
    {
        $this->direction = $direction;
    }

    /**
     * @return Rate
     */
    public function getRate(): Rate
    {
        return $this->rate;
    }

    /**
     * @param Rate $rate
     */
    public function setRate(Rate $rate): void
    {
        $this->rate = $rate;
    }

}
