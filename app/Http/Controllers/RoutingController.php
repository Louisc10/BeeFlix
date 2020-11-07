<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutingController extends Controller
{
    //

    public function homepage(){
        return view('Page.MainPage');
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
