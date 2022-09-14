<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TakmicarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->lastName(),
            'godine' => $this->faker->numberBetween($min = 15, $max = 85)
        ];
    }
}
