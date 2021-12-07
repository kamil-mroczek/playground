<?php

namespace App\CurrencyExchange\Domain\Entity;

use App\CurrencyExchange\Domain\Enum\CurrencyCode;

class Currency
{
    /**
     * @var CurrencyCode
     */
    protected CurrencyCode $code;

    public function __construct(CurrencyCode $code)
    {
        $this->code = $code;
    }

    /**
     * @return CurrencyCode
     */
    public function getCode(): CurrencyCode
    {
        return $this->code;
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->code->value;
    }

    /**
     * @param string $currencyCodeString
     * @return Currency
     */
    public static function from(string $currencyCodeString): Currency
    {
        return new Currency(CurrencyCode::from($currencyCodeString));
    }

    /**
     * @param Currency $currency
     * @return bool
     */
    public function equals(Currency $currency)
    {
        return $this->code->value === $currency->getCode()->value;
    }
}
