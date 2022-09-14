<?php

namespace Database\Factories;

use App\Models\Kviz;
use App\Models\Takmicar;
use Illuminate\Database\Eloquent\Factories\Factory;

class UcesceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kviz_id' => Kviz::factory(),
            'takmicar_id' => Takmicar::factory(),
            'rang' => $this->faker->numberBetween($min = 1, $max = 101)
        ];
    }
}
