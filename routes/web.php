<?php

use App\Http\Controllers\AwardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\VideogameController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// route to index page
Route::get('/', [IndexController::class, 'index']);

// when a user comes with GET requets method to the URL/awards
// handle the request with the AwardController
// and its index() method
Route::get('/awards', [AwardController::class, 'index']);

// route to toprated Movies
Route::get('/top-rated-movies', [MovieController::class, 'topRated']);

// route to toprated Games
Route::get('/top-rated-games', [VideogameController::class, 'topRated']);

// route to toprated Games
Route::get('/movies/shawshank-redemption', [MovieController::class, 'shawshank']);

// route to index movies
Route::get('/movies', [MovieController::class, 'index']);

// route to people index
Route::get('/people', [PersonController::class, 'index']);
