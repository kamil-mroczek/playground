<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="transactions")
 */
class Transaction
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id;
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