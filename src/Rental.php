<?php

namespace Refactoring;

class Rental
{
    /**
     * @var Movie
     */
    private $movie;

    /**
     * @var int
     */
    private $daysRented;

    public function __construct(Movie $movie, int $daysRented)
    {
       $this->movie = $movie;
       $this->daysRented = $daysRented;
    }

    public function getCharge()
    {
        return $this->movie->getCharge($this->getDaysRented());
    }

    public function getDaysRented()
    {
        return $this->daysRented;
    }

    public function getFrequentRenterPoints()
    {
        if($this->getMovie()->getPriceCode() == Movie::NEW_RELEASE && $this->getDaysRented() > 1) {
            return 2;
        } else {
            return 1;
        }
    }

    public function getMovie(): Movie
    {
        return $this->movie;
    }
}
