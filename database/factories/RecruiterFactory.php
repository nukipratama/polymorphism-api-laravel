<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class RecruiterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker::create('id_ID');
        return [
            'name' => $faker->name(),
            'role' => $faker->randomElement(['HR Team', 'Engineer Team', 'C Team']),
            'age' => $faker->numberBetween(20, 30),
        ];
    }
}
