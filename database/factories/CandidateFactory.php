<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class CandidateFactory extends Factory
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
            'role' => $faker->randomElement(['Backend Developer', 'Frontend Developer', 'Web Developer']),
            'age' => $faker->numberBetween(20, 30),
        ];
    }
}
