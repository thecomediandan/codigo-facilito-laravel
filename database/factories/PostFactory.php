<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //'body' => fake()->text(), "en otras versiones"
            //'body' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(),
        ];
    }
}
