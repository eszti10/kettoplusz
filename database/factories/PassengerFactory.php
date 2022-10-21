<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Passenger>
 */
class PassengerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->name(),
            "bday"=>$this->faker->date($format = 'Y-m-d', $max = '2010-01-01'),
            "peresonalid"=>$this->faker->numberBetween($min=10000, $max=99999).$this->faker->randomLetter().$this->faker->randomLetter(),
            "flightid"=>$this->faker->numberBetween($min=1, $max=250),
        ];
    }
}
