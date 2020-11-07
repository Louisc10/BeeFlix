<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoutingController extends Controller
{
    //

    public function homepage(){
        $drama = app('App\Http\Controllers\MoviesController')->getMovieByGenreId('Drama');
        return view('Page.MainPage',['drama' => $drama]);
    }

    public function drama(){
        return view('Page.DramaPage');
    }

    public function kids(){
        return view('Page.KidsPage');
    }

    public function tvShow(){
        return view('Page.TVShowPage');
    }
}
