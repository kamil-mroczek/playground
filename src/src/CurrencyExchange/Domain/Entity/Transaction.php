<?php

namespace App\CurrencyExchange\Domain\Entity;

class Transaction
{
    /**
     * @var Calculation
     */
    protected Calculation $calculation;

    /**
     * @param Calculation $calculation
     */
    public function __construct(Calculation $calculation)
    {
        $this->calculation = $calculation;
    }

    /**
     * @return Calculation
     */
    public function getCalculation(): Calculation
    {
        return $this->calculation;
    }
}