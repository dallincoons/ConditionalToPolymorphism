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
        $result = 0;
        switch ($this->getMovie()->getPriceCode()) {
            case Movie::REGULAR:
                $result += 2;
                if ($this->getDaysRented()) {
                    $result += ($this->getDaysRented() - 2) * 1.5;
                }
                break;
            case Movie::NEW_RELEASE:
                $result += ($this->getDaysRented() * 3);
                break;
            case Movie::CHILDRENS:
                $result += 1.5;
                if ($this->getDaysRented() > 3) {
                    $result += ($this->getDaysRented() - 3) * 1.5;
                }
                break;
        }
        return $result;
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
