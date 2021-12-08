<?php

namespace App\ValueObject;

class Amount
{
    protected const AMOUNT_PRECISION = 2;

    /**
     * @var float
     */
    protected float $amount;

    /**
     * @param float $amount
     */
    public function __construct(float $amount)
    {
        $this->amount = round($amount, self::AMOUNT_PRECISION);
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return round($this->amount, self::AMOUNT_PRECISION);
    }

    /**
     * @param Rate $rate
     * @return bool
     */
    public function equals(Rate $rate): bool
    {
        return ($this->getAmount() === $rate->getRate());
    }
}
