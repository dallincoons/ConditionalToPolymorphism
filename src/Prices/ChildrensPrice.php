<?php

namespace Refactoring\Prices;

use Refactoring\Movie;

class ChildrensPrice extends Price
{
    function getPriceCode()
    {
        return Movie::CHILDRENS;
    }
}
