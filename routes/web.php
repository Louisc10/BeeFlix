<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\RoutingController;

Route::get('/', 'RoutingController@homepage');
Route::get('Drama', 'RoutingController@drama');
Route::get('Kids', 'RoutingController@kids');
Route::get('TVShow', 'RoutingController@tvShow');
Route::get('view/{id}', 'RoutingController@oneMovie');
