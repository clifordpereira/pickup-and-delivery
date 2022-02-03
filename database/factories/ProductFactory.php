<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'current_price' => $this->faker->randomFloat(2, 0, 10000),
            'available_qty' => $this->faker->numberBetween(10, 500),
        ];
    }
}
