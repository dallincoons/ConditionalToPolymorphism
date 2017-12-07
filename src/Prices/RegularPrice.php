<?php

namespace Refactoring\Prices;

use Refactoring\Movie;

class RegularPrice extends Price
{
    function getCharge()
    {
        return Movie::REGULAR;
    }
}
