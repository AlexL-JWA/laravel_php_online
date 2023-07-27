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
            'name'        => $this->faker->realText( 20 ),
            'description' => $this->faker->realText,
            'price'       => $this->faker->numberBetween( 40, 6673 ),
            'slug'        => $this->faker->slug( 1 ),
        ];
    }
}
