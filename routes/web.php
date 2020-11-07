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
Route::get('drama', 'RoutingController@drama');
Route::get('kids', 'RoutingController@kids');
Route::get('tvShow', 'RoutingController@tvShow');
