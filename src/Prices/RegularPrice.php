<?php

namespace Refactoring\Prices;

use Refactoring\Movie;

class RegularPrice extends Price
{
    function getPriceCode()
    {
        return Movie::REGULAR;
    }

    public function getCharge(int $daysRented)
    {
        $result = 2;
        if ($daysRented) {
            $result += ($daysRented - 2) * 1.5;
        }
        return $result;
    }
}
