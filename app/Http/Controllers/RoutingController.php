<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoutingController extends Controller
{
    //

    public function homepage(){
        $drama = app('App\Http\Controllers\MoviesController')->getMovieByGenreId('Drama');
        $kids = app('App\Http\Controllers\MoviesController')->getMovieByGenreId('Kids');
        $tvshow = app('App\Http\Controllers\MoviesController')->getMovieByGenreId('TV Show');
        return view('Page.MainPage',['drama' => $drama, 'kids' => $kids, 'tvshow' => $tvshow]);
    }

    public function drama(){
        $drama = app('App\Http\Controllers\MoviesController')->getMovieByGenreId('Drama');
        return view('Page.DramaPage',['drama' => $drama]);
    }

    public function kids(){
        $kids = app('App\Http\Controllers\MoviesController')->getMovieByGenreId('Kids');
        return view('Page.KidsPage',['kids' => $kids]);
    }

    public function tvShow(){
        $tvshow = app('App\Http\Controllers\MoviesController')->getMovieByGenreId('TV Show');
        return view('Page.TVShowPage',['tvshow' => $tvshow]);
    }

    public function oneMovie($id){
        $movie = app('App\Http\Controllers\MoviesController')->getMovieByMovieId($id);
        $item = $movie[0];
        $category ="";
        if (strcmp($item['name'],"TV Show") == 0) {
            $category = "TVShow";
        }
        else{
            $category = $item['name'];
        }
        $episode = app('App\Http\Controllers\EpisodesController')->getEpisodeByMovieId($id);;
        return view('Page.OneMoviePage',['item' => $item, 'category' => $category, 'collection' => $episode]);
    }
}
