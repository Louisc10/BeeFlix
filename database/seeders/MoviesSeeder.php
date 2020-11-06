<?php

namespace Database\Seeders;

use App\Models\Movies;
use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [
                'genre_id' => '1',
                'title' => 'Untitled',
                'photo' => 'drama/1.png',
                'description' => 'Undescribeable',
                'rating' => '4',
            ],
            [
                'genre_id' => '1',
                'title' => 'Untitled',
                'photo' => 'drama/1.png',
                'description' => 'Undescribeable',
                'rating' => '4',
            ],
            [
                'genre_id' => '1',
                'title' => 'Untitled',
                'photo' => 'drama/1.png',
                'description' => 'Undescribeable',
                'rating' => '4',
            ],
            [
                'genre_id' => '1',
                'title' => 'Untitled',
                'photo' => 'drama/1.png',
                'description' => 'Undescribeable',
                'rating' => '4',
            ],
            [
                'genre_id' => '2',
                'title' => 'Untitled',
                'photo' => 'drama/1.png',
                'description' => 'Undescribeable',
                'rating' => '4',
            ],
            [
                'genre_id' => '2',
                'title' => 'Untitled',
                'photo' => 'drama/1.png',
                'description' => 'Undescribeable',
                'rating' => '4',
            ],
            [
                'genre_id' => '2',
                'title' => 'Untitled',
                'photo' => 'drama/1.png',
                'description' => 'Undescribeable',
                'rating' => '4',
            ],
            [
                'genre_id' => '2',
                'title' => 'Untitled',
                'photo' => 'drama/1.png',
                'description' => 'Undescribeable',
                'rating' => '4',
            ],
            [
                'genre_id' => '3',
                'title' => 'Untitled',
                'photo' => 'drama/1.png',
                'description' => 'Undescribeable',
                'rating' => '4',
            ],
            [
                'genre_id' => '3',
                'title' => 'Untitled',
                'photo' => 'drama/1.png',
                'description' => 'Undescribeable',
                'rating' => '4',
            ],
            [
                'genre_id' => '3',
                'title' => 'Untitled',
                'photo' => 'drama/1.png',
                'description' => 'Undescribeable',
                'rating' => '4',
            ],
            [
                'genre_id' => '3',
                'title' => 'Untitled',
                'photo' => 'drama/1.png',
                'description' => 'Undescribeable',
                'rating' => '4',
            ],
        ];
    
        foreach($datas as $d){
            $model = new Movies();
            $model->genre_id = $d['genre_id'];
            $model->title = $d['title'];
            $model->photo = $d['photo'];
            $model->description = $d['description'];
            $model->rating = $d['rating'];
            $model->save();
        }
    }
}

