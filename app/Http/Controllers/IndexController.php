<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use DB;

class IndexController extends Controller
{
    public function index()
    {

        //retrieve top 10 movies from the database
        // $movies = DB::select("SELECT * from `movies` order by `rating` desc limit 10");

        $movies = Movie::query()
            ->where('votes_nr', '>', 5000)
            ->where('movie_type_id', 1)
            ->orderBy('rating', 'desc')
            ->limit(5)
            ->get();

        // dd($movies);

        return view('index.index', compact('movies'));
    }
}
