<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ReviewController;
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
Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');


// route to people index
Route::get('/people', [PersonController::class, 'index']);

// route to people create
Route::get('/people/create', [PersonController::class, 'create'])->name('people.create');
Route::post('/people', [PersonController::class, 'insert'])->name('people.insert');


// route to about us page
Route::get('/about-us', [AboutController::class, 'aboutUs']);

// route to search page
Route::get('/search', [MovieController::class, 'search']);

// route to person detail page
Route::get('/person-search', [PersonController::class, 'detail']);

// route to movie detail page
Route::get('/movie-search', [MovieController::class, 'detail'])->name('movies.detail');

// reviewing a movie
Route::post('/movies/rate', [ReviewController::class, 'store']);

// get and post for creating new movie
Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create');
Route::post('/movies', [MovieController::class, 'insert'])->name('movies.insert');

// get and post for adjusting movies
Route::get('/movies/{movieId}/edit', [MovieController::class, 'edit'])->name('movies.edit');
Route::put('/movies/update/{movieId}', [MovieController::class, 'update'])->name('movies.update');

Route::delete('/movies/delete/{movieId}', [MovieController::class, 'delete'])->name('movies.delete');
