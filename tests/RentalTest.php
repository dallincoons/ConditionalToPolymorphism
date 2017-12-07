<?php

namespace Tests;

use Refactoring\Movie;
use Refactoring\Rental;

class RentalTest extends TestCase
{
    /** @test */
    public function it_charges_a_regular_movie_rental()
    {
        $rental = new Rental(new Movie(Movie::REGULAR), 2);

        $this->assertEquals(2, $rental->getCharge());
    }

    /** @test */
    public function it_charges_a_new_release_movie_rental()
    {
        $rental = new Rental(new Movie(Movie::NEW_RELEASE), 2);

        $this->assertEquals(6, $rental->getCharge());
    }

    /** @test */
    public function it_charges_a_childrens_movie_rental()
    {
        $rental = new Rental(new Movie(Movie::CHILDRENS), 2);

        $this->assertEquals(1.5, $rental->getCharge());
    }

    /** @test */
    public function returns_double_points_if_new_release_and_over_one_day_rental()
    {
        $rental = new Rental(new Movie(Movie::NEW_RELEASE), 2);

        $this->assertEquals(2, $rental->getFrequentRenterPoints());
    }

    /** @test */
    public function returns_normal_points_if_not_new_release_or_one_day_rental()
    {
        $rental = new Rental(new Movie(Movie::CHILDRENS), 2);
        $rental2 = new Rental(new Movie(Movie::NEW_RELEASE), 1);

        $this->assertEquals(1, $rental->getFrequentRenterPoints());
        $this->assertEquals(1, $rental2->getFrequentRenterPoints());
    }
}
