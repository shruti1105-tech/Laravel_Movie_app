<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\MovieDetailController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieShowController;
use App\Http\Controllers\CastShowController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::resource('/',HomeController::class);
Route::resource('admin/movie',MovieController::class);
Route::resource('admin/cast',CastController::class);
Route::resource('admin/movie_detail',MovieDetailController::class);
Route::resource('details',MovieShowController::class);
Route::resource('cast_show',CastShowController::class);
