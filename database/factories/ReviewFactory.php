<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'book_id'=>$this->faker->numberBetween(1,50),
            'name'=>$this->faker->word(),
            'body'=>$this->faker->word(),
        ];
    }
}
