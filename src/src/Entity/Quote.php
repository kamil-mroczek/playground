<?php

namespace App\Entity;

use App\Exception\WrongCurrencyPair;
use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="quotes")
 */
class Quote
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    public $id;

    /**
     * @ORM\Column(type="string", length=6)
     */
    public $currencyPair;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=8)
     */
    public $rate;

    /**
     * @ORM\Column(type="datetime", options={"default": "CURRENT_TIMESTAMP"})
     */
    public $time;

    public function __construct()
    {
        $this->time = new DateTime();
    }

    /**
     * @return mixed
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param mixed $rate
     */
    public function setRate($rate): void
    {
        $this->rate = $rate;
    }


    /**
     * @return CurrencyPair
     * @throws \App\Exception\WrongCurrencyPair
     */
    public function getCurrencyPair(): CurrencyPair
    {
        if (!empty($this->currencyPair)) {
            return CurrencyPair::from($this->currencyPair);
        } else {
            throw new WrongCurrencyPair();
        }
    }

    /**
     * @param CurrencyPair $currencyPair
     */
    public function setCurrencyPair(CurrencyPair $currencyPair): void
    {
        $this->currencyPair = (string)$currencyPair;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): int
    {
        $this->id = (int)$id;
    }

    /**
     * @return DateTime
     */
    public function getTime(): DateTime
    {
        return $this->time;
    }

    /**
     * @param DateTime $time
     */
    public function setTime(DateTime $time): void
    {
        $this->time = $time;
    }
}
