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
}
