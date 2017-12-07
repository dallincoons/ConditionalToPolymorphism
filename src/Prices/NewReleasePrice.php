<?php

namespace Refactoring\Prices;

use Refactoring\Movie;

class NewReleasePrice extends Price
{
    function getCharge()
    {
        return Movie::NEW_RELEASE;
    }
}
