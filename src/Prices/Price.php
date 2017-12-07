<?php

namespace Refactoring\Prices;

abstract class Price
{
    abstract function getPriceCode();
    abstract public function getCharge(int $daysRented);
}
