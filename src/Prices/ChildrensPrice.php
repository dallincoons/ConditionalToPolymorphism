<?php

namespace Refactoring\Prices;

use Refactoring\Movie;

class ChildrensPrice extends Price
{
    function getCharge()
    {
        return Movie::CHILDRENS;
    }
}
