<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use DB;
use PhpParser\Node\VarLikeIdentifier;

class MovieController extends Controller
{

    public function index()
    {
        $builder = Movie::query()
            ->orderBy('name')
            ->limit(20)
            ->where('name', 'like', '%mar%');

        $movies = $builder->get();
        return view('movies.index', compact('movies'));
    }

    public function topRated()
    {

        $top_movies = DB::select("SELECT * from `movies` WHERE `movies`.`movie_type_id` != 7 order by `rating` desc limit 50");
        // dd($top_movies);

        return view('movies.top-rated', compact('top_movies'));
    }


    public function shawshank()
    {

        $movie = Movie::findOrFail(111161);

        $positions = DB::select("SELECT `positions`.`name` as Position, `people`.`fullname` FROM `movie_person` left join `positions` on `positions`.`id` = `movie_person`.`position_id` left join `people` on `people`.`id` = `movie_person`.`person_id` where `movie_person`.`movie_id` = 111161");

        return view('movies.detail', compact('positions', 'movie'));
    }
}
