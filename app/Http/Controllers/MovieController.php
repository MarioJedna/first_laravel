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
            ->limit(10)
            ->where('name', 'like', '%mar%');

        $movies = $builder->get();
        return view('movies.index', compact('movies'));
    }

    public function topRated()
    {

        // $top_movies = DB::select("SELECT * from `movies` WHERE `movies`.`movie_type_id` != 7 order by `rating` desc limit 50");
        $top_movies = Movie::query()->where('movie_type_id', '!=', 7)->orderBy('rating', 'desc')->limit(50)->get();
        // dd($top_movies);

        return view('movies.top-rated', compact('top_movies'));
    }


    public function shawshank()
    {

        $movie = Movie::findOrFail(111161);

        $positions = DB::select("SELECT `positions`.`name` as Position, `people`.`fullname` FROM `movie_person` left join `positions` on `positions`.`id` = `movie_person`.`position_id` left join `people` on `people`.`id` = `movie_person`.`person_id` where `movie_person`.`movie_id` = 111161");

        // $positions = Movie::query()

        // dd($positions);

        return view('movies.detail', compact('positions', 'movie'));
    }

    public function search()
    {
        $search = $_GET['search'];
        $filteredMovies = Movie::query()->where('name', 'like', '%' . $search . '%')->get();
        return view('movies.search', compact('filteredMovies'));
    }

    public function detail()
    {
        $selectedMovie = Movie::query()->where('id', '=', $_GET['id'])->get();
        return view('movies.detail2', compact('selectedMovie'));
    }
}
