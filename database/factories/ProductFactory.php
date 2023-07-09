<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        return [
            'title'       => $this->faker->realText( 15 ),
            'description' => $this->faker->realText,
            'price'       => $this->faker->numberBetween( 40, 6673 ),
            'slug'        => $this->faker->slug( 1 ),
        ];
    }

    // http://joxi.ru/EA4L1xaH0n6WKA
}
