<?php

namespace Database\Seeders;

use App\Models\Genres;
use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
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
                'name' => 'Drama',
            ],
            [
                'name' => 'Kids',
            ],
            [
                'name' => 'TV Show',
            ],
        ];
    
        foreach($datas as $d){
            $model = new Genres();
            $model->name = $d['name'];
            $model->save();
        }
    }
}
