<?php

namespace App\Http\Controllers;

use App\Models\episodes;
use Illuminate\Http\Request;

class EpisodesController extends Controller
{
    public function getEpisodeByMovieId($movieId){
        $episode = episodes::where('movie_id', $movieId)
            ->paginate(3);
        return $episode;
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
     * @param  \App\Models\episodes  $episodes
     * @return \Illuminate\Http\Response
     */
    public function show(episodes $episodes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\episodes  $episodes
     * @return \Illuminate\Http\Response
     */
    public function edit(episodes $episodes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\episodes  $episodes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, episodes $episodes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\episodes  $episodes
     * @return \Illuminate\Http\Response
     */
    public function destroy(episodes $episodes)
    {
        //
    }
}
