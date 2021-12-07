<?php

namespace App\CurrencyExchange\Domain\ValueObject;

class Rate
{
    /**
     * @var float
     */
    protected float $rate;

    public function __construct(float $rate)
    {
        $this->rate = $rate;
    }

    /**
     * @return float
     */
    public function getRate(): float
    {
        return $this->rate;
    }
}