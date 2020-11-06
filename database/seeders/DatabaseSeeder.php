<?php

namespace Database\Seeders;

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
        $this->call(EpisodesSeeder::class);
        $this->call(GenresSeeder::class);
        $this->call(MoviesSeeder::class);
    }
}
