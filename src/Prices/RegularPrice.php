<?php

namespace Refactoring\Prices;

use Refactoring\Movie;

class RegularPrice extends Price
{
    function getPriceCode()
    {
        return Movie::REGULAR;
    }
}
