<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RubricNoveltyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rubric_id' => $this->faker->numberBetween(1,100),
            'novelty_id' => $this->faker->numberBetween(1,25),
        ];
    }
}
