<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'genre_id' => '1',
                'title' => 'The Legend of the Blue Sea',
                'photo' => 'drama/1.jpg',
                'description' => 'A mermaid from the Joseon period ends up in present-day Seoul, where she crosses paths with a swindler who may have ties to someone from her past.',
                'rating' => '4',
            ],
            [
                'genre_id' => '1',
                'title' => 'While You Were Sleeping',
                'photo' => 'drama/2.jpg',
                'description' => 'Burdened with visions of the future in their dreams, a young woman and two men try to prevent horrible events before they actually happen.',
                'rating' => '4',
            ],
            [
                'genre_id' => '1',
                'title' => 'Prison Playbook',
                'photo' => 'drama/3.jpg',
                'description' => 'With his major league baseball debut right around the corner, a star pitcher lands in prison and must learn to navigate his new world.',
                'rating' => '4',
            ],
            [
                'genre_id' => '1',
                'title' => 'When the Camellia Blooms',
                'photo' => 'drama/4.jpg',
                'description' => 'Dongbaek is a single mother. When a potential new love enters her life, she finds ways to defy the social stigmas surrounding her.',
                'rating' => '4',
            ],
            [
                'genre_id' => '2',
                'title' => 'The Boss Baby: Back in Business',
                'photo' => 'kids/1.jpg',
                'description' => 'The Boss Baby brings his big brother Tim to the office to teach him the art of business in this animated series sprung from the hit film.',
                'rating' => '4',
            ],
            [
                'genre_id' => '2',
                'title' => 'Jurassic World Camp Cretaceous',
                'photo' => 'kids/2.jpg',
                'description' => 'Six teens invited to attend a state-of-the-art adventure camp on Isla Nublar must band together to survive when the dinosaurs break out of captivity.',
                'rating' => '4',
            ],
            [
                'genre_id' => '2',
                'title' => 'Peppa Pig Season 5',
                'photo' => 'kids/3.jpg',
                'description' => 'Join plucky piglet Peppa and her family and friends for everyday adventures that prove there\'s learning and laughter to be had anywhere you look.',
                'rating' => '4',
            ],
            [
                'genre_id' => '2',
                'title' => 'Barbie Dreamhouse Adventures Season 3',
                'photo' => 'kids/4.jpg',
                'description' => 'Get to know Barbie and her BFFs -- including next-door neighbor Ken -- in this animated vlog of adventures filmed inside her family\'s new dreamhouse.',
                'rating' => '4',
            ],
            [
                'genre_id' => '3',
                'title' => 'The Queen\'s Gambit',
                'photo' => 'tvshow/1.jpg',
                'description' => 'In a 1950s orphanage, a young girl reveals an astonishing talent for chess and begins an unlikely journey to stardom while grappling with addiction.',
                'rating' => '4',
            ],
            [
                'genre_id' => '3',
                'title' => 'Doctor Stranger',
                'photo' => 'tvshow/2.jpg',
                'description' => 'Undescribeable',
                'rating' => '4',
            ],
            [
                'genre_id' => '3',
                'title' => 'Fight for My Way',
                'photo' => 'tvshow/3.jpg',
                'description' => 'A former taekwondo champion and an information desk worker aspire to chase their dreams in a world that isn’t kind to those with mediocre credentials.',
                'rating' => '4',
            ],
            [
                'genre_id' => '3',
                'title' => 'Money Heist',
                'photo' => 'tvshow/4.jpg',
                'description' => 'Eight thieves take hostages and lock themselves in the Royal Mint of Spain as a criminal mastermind manipulates the police to carry out his plan.',
                'rating' => '4',
            ],
        ]);
    }
}

