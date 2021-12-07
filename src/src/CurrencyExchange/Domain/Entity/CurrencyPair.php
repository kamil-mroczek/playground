<?php

namespace App\CurrencyExchange\Domain\Entity;

use App\CurrencyExchange\Application\Exception\WrongCurrencyPair;

class CurrencyPair
{
    /**
     * @var Currency
     */
    protected Currency $baseCurrency;

    /**
     * @var Currency
     */
    protected Currency $quoteCurrency;

    /**
     * @param Currency $baseCurrency
     * @param Currency $quoteCurrency
     * @throws WrongCurrencyPair
     */
    public function __construct(Currency $baseCurrency, Currency $quoteCurrency)
    {
        if ($baseCurrency->equals($quoteCurrency)) {
            throw new WrongCurrencyPair();
        }

        $this->$baseCurrency = $baseCurrency;
        $this->$quoteCurrency = $quoteCurrency;
    }

    /**
     * @return Currency
     */
    public function getBaseCurrency(): Currency
    {
        return $this->baseCurrency;
    }

    /**
     * @return Currency
     */
    public function getQuoteCurrency(): Currency
    {
        return $this->quoteCurrency;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->getBaseCurrency() . '/' . $this->getQuoteCurrency();
    }

    /**
     * @param string $currencyPairString
     * @return CurrencyPair
     * @throws WrongCurrencyPair
     */
    public static function from(string $currencyPairString): CurrencyPair
    {
        if (preg_match('/[A-Z]{6}/', $currencyPairString) !== true) {
            return new CurrencyPair(
                Currency::from(substr($currencyPairString, 0, 3)),
                Currency::from(substr($currencyPairString, 3, 3))
            );
        } else {
            throw new WrongCurrencyPair();
        }
    }
}
