<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'selling_price' => $this->faker->randomFloat(2, 0, 10000),
            'ordered_qty' => $this->faker->numberBetween(10, 500),
            'ordered_on' => now(),
            'order_status' => "open",
        ];
    }

    public function picked()
    {
        return $this->state(function (array $attributes) {
            return [
                'order_status' => 'picked',
                'picked_on' => now(),
            ];
        });
    }

    public function delivered()
    {
        return $this->state(function (array $attributes) {
            return [
                'order_status' => 'delivered',
                'delivered_on' => 'now()',
            ];
        });
    }

}//endof class
