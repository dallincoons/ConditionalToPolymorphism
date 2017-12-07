<?php

namespace Refactoring;

use Refactoring\Prices\ChildrensPrice;
use Refactoring\Prices\NewReleasePrice;
use Refactoring\Prices\Price;
use Refactoring\Prices\RegularPrice;

class Movie
{
    /**
     * @var Price
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
        return $this->priceCode->getCharge($daysRented);
    }

    public function getFrequentRenterPoints(int $daysRented)
    {
        return $this->priceCode->getFrequentRenterPoints($daysRented);
    }

    public function setPriceCode(int $priceCode)
    {
        switch ($priceCode) {
            case Movie::REGULAR:
                $this->priceCode = new RegularPrice();
                break;
            case Movie::NEW_RELEASE:
                $this->priceCode = new NewReleasePrice();
                break;
            case Movie::CHILDRENS:
                $this->priceCode = new ChildrensPrice();
                break;
            default:
                throw new \Exception('no price with code:' . $priceCode);
        }
    }

    public function getPriceCode()
    {
        return $this->priceCode->getPriceCode();
    }
}
