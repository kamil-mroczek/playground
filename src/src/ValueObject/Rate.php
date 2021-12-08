<?php

namespace App\ValueObject;

class Rate
{
    protected const RATE_PRECISION = 6;

    /**
     * @var float
     */
    protected float $rate;

    /**
     * @param float $rate
     */
    public function __construct(float $rate)
    {
        $this->rate = round($rate, self::RATE_PRECISION);
    }

    /**
     * @return float
     */
    public function getRate(): float
    {
        return round($this->rate, self::RATE_PRECISION);
    }

    /**
     * @param Rate $rate
     * @return bool
     */
    public function equals(Rate $rate): bool
    {
        return ($this->getRate() === $rate->getRate());
    }
}
