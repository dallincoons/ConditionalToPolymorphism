<?php

namespace Refactoring;

class Movie
{
    /**
     * @var int
     */
    private $priceCode;

    const REGULAR = 1;
    const NEW_RELEASE = 2;
    const CHILDRENS = 3;

    public function __construct(int $priceCode)
    {
       $this->priceCode = $priceCode;
    }

    public function getPriceCode()
    {
        return $this->priceCode;
    }
}
