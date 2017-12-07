<?php

namespace Refactoring;

use Refactoring\Prices\ChildrensPrice;
use Refactoring\Prices\NewReleasePrice;
use Refactoring\Prices\RegularPrice;

class Movie
{
    /**
     * @var int
     */
    private $priceCode;

    /**
     * @var string
     */
    private $name;

    const REGULAR = 1;
    const NEW_RELEASE = 2;
    const CHILDRENS = 3;

    public function __construct(string $name, int $priceCode)
    {
        $this->name = $name;
        $this->setPriceCode($priceCode);
    }

    public function getCharge(int $daysRented)
    {
        $result = 0;
        switch ($this->getPriceCode()) {
            case Movie::REGULAR:
                $result += 2;
                if ($daysRented) {
                    $result += ($daysRented - 2) * 1.5;
                }
                break;
            case Movie::NEW_RELEASE:
                $result += ($daysRented * 3);
                break;
            case Movie::CHILDRENS:
                $result += 1.5;
                if ($daysRented > 3) {
                    $result += ($daysRented - 3) * 1.5;
                }
                break;
        }
        return $result;
    }

    public function getFrequentRenterPoints(int $daysRented)
    {
        if($this->getPriceCode() == Movie::NEW_RELEASE && $daysRented > 1) {
            return 2;
        } else {
            return 1;
        }
    }

    public function setPriceCode(int $priceCode)
    {
        $this->priceCode = $priceCode;
    }

    public function getPriceCode()
    {
        return $this->priceCode;
    }
}
