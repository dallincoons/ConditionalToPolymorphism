<?php

namespace Refactoring;

class Movie
{
    /**
     * @var int
     */
    private $priceCode;

    /**
     * @var string
     */
    private $name;

    const REGULAR = 1;
    const NEW_RELEASE = 2;
    const CHILDRENS = 3;

    public function __construct(string $name, int $priceCode)
    {
        $this->name = $name;
       $this->priceCode = $priceCode;
    }

    public function getPriceCode()
    {
        return $this->priceCode;
    }
}
