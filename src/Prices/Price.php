<?php

namespace Refactoring\Prices;

use Refactoring\Movie;

abstract class Price
{
    abstract function getPriceCode();
    abstract public function getCharge(int $daysRented);

    public function getFrequentRenterPoints(int $daysRented)
    {
        return 1;
    }
}
