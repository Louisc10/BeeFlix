<?php

namespace App\Http\Controllers;

use App\Models\movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function getMovieByGenreId($genre){
        $id = app('App\Http\Controllers\GenresController')->getGenreIdByName($genre);

        $data = movies::where('genre_id', $id)
            ->get();
            
        $result = json_decode($data, true);
        return $result;
    }

    public function getMovieByMovieId($id){
        $data = movies::join('genres', 'genres.id', '=', 'movies.genre_id')
            ->where('movies.id', $id)
            ->get();
        $result = json_decode($data, true);
        return $result;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function show(movies $movies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function edit(movies $movies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, movies $movies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function destroy(movies $movies)
    {
        //
    }
}
