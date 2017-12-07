<?php

namespace Refactoring\Prices;

use Refactoring\Movie;

class NewReleasePrice extends Price
{
    function getPriceCode()
    {
        return Movie::NEW_RELEASE;
    }

    public function getCharge(int $daysRented)
    {
       return ($daysRented * 3);
    }

    public function getFrequentRenterPoints(int $daysRented)
    {
        return ($daysRented > 1) ? 2 : 1;
    }
}
