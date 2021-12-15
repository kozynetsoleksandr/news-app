<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RubricFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'parent_id' => $this->faker->numberBetween(0,10),
            'title' => $this->faker->name(),
        ];
    }
}
