<?php

namespace Refactoring\Prices;

use Refactoring\Movie;

class ChildrensPrice extends Price
{
    function getPriceCode()
    {
        return Movie::CHILDRENS;
    }

    public function getCharge(int $daysRented)
    {
        $result = 1.5;
        if ($daysRented > 3) {
            $result += ($daysRented - 3) * 1.5;
        }
        return $result;
    }
}
