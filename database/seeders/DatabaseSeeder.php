<?php

namespace Database\Seeders;

use App\Models\Novelty;
use App\Models\Rubric;
use App\Models\RubricNovelty;
use App\Models\User;
use Database\Factories\RubricNoveltyFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        User::factory(10)->create();
//        Rubric::factory(100)->create();
//        Novelty::factory(100)->create();
        RubricNovelty::factory(100)->create();
    }
}
