<?php

namespace App\Http\Controllers;

use DB;

class VideogameController extends Controller
{
    public function topRated()
    {

        $top_games = DB::select("SELECT * from `movies` WHERE `movies`.`movie_type_id` = 7 order by `rating` desc limit 50");
        // dd($top_movies);

        return view('games.top-rated', compact('top_games'));
    }
}
