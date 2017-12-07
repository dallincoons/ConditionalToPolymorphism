<?php

namespace Refactoring\Prices;

use Refactoring\Movie;

abstract class Price
{
    abstract function getPriceCode();
    abstract public function getCharge(int $daysRented);

    public function getFrequentRenterPoints(int $daysRented)
    {
        if($this->getPriceCode() == Movie::NEW_RELEASE && $daysRented > 1) {
            return 2;
        } else {
            return 1;
        }
    }
}
