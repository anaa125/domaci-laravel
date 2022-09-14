<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KvizFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->streetSuffix(),
            'televizija' => $this->faker->cityPrefix(),
            'trajanje' => $this->faker->numberBetween($min = 5, $max = 150),
            'voditelj' => $this->faker->name(),
            'nagrada' => $this->faker->numberBetween($min = 10000, $max = 1000000)
        ];
    }
}
