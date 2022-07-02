<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom'=> $this->faker->sentence(),
            'description'=> $this->faker->sentence(rand(1,4)),
            'image'=> $this->faker->imageUrl(),
            'prix'=> rand(4000,10000000),
            'active'=> $this->faker->boolean(100),

        ];
    }
}
