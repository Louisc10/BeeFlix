<?php

namespace Database\Seeders;

use App\Models\Episodes;
use Illuminate\Database\Seeder;

class EpisodeSeeder extends Seeder
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
                'movie_id' => '1',
                'episode' => '1',
                'title' => 'Untitled',
            ],
            [
                'movie_id' => '1',
                'episode' => '1',
                'title' => 'Untitled',
            ],
            [
                'movie_id' => '1',
                'episode' => '1',
                'title' => 'Untitled',
            ],
            [
                'movie_id' => '1',
                'episode' => '1',
                'title' => 'Untitled',
            ],
        ];
    
        foreach($datas as $d){
            $model = new Episodes();
            $model->movie_id = $d['movie_id'];
            $model->episode = $d['episode'];
            $model->title = $d['title'];
            $model->save();
        }
        }
}

