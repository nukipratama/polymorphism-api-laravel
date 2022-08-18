<?php

namespace Database\Seeders;

use App\Models\Candidate;
use App\Models\Recruiter;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $recruiters = Recruiter::factory(3)->create();
        foreach ($recruiters as $eachRecruiter) {
            $candidates = Candidate::factory(5)->create();
            foreach ($candidates as $eachCandidate) {
                $eachCandidate->recruiters()->attach($eachRecruiter->id);
            }
        }
    }
}
