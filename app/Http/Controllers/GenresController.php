<?php

namespace App\Http\Controllers;

use App\Models\genres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenresController extends Controller
{
    public function getGenreIdByName($genre){
        $id = DB::table('genres')
                ->where('name',  $genre)
                ->first();
        return $id->id;
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
     * @param  \App\Models\genres  $genres
     * @return \Illuminate\Http\Response
     */
    public function show(genres $genres)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\genres  $genres
     * @return \Illuminate\Http\Response
     */
    public function edit(genres $genres)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\genres  $genres
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, genres $genres)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\genres  $genres
     * @return \Illuminate\Http\Response
     */
    public function destroy(genres $genres)
    {
        //
    }
}
