<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'isbn' => $this->faker->isbn13(),
            'title' => $this->faker->word(),
            'price' => $this->faker->numberBetween(2000, 5000),
            'publisher' => $this->faker->randomElement([
                'ジャパンIT', 
                '優丸システム', 
                '走跳社',
                'IT Emotion',
                'テックCode'
            ]),
            'published'=>$this->faker->dateTimeBetween('-5years','now'),
        ];
    }
}
