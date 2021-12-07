<?php

namespace App\CurrencyExchange\Domain\ValueObject;

class Amount
{
    /**
     * @var float
     */
    protected float $amount;

    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }
}
