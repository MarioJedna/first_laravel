<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use DB;
use Illuminate\Http\Request;
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

    // public function search(Request $request)
    // {
    //     if ($request->has('search') {

    //         $search = $request->query('search');
    //         $filteredMovies = Movie::query()->where('name', 'like', '%' . $search . '%')->get();
    //         return view('movies.search', compact('filteredMovies'));

    //     });
    // }

    public function detail()
    {
        $selectedMovie = Movie::query()->where('id', '=', $_GET['id'])->get();
        return view('movies.detail2', compact('selectedMovie'));
    }

    public function create()
    {
        $movie = new Movie;

        return view('movies.form', compact('movie'));
    }

    public function insert(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required|min:3|max:50',
                'year' => 'required|numeric|digits:4|min:0|max:2050',
            ],
            [
                'name.required' => "you need to put there something",
                'name.min' => 'too short man'
            ]
        );

        $movie = new Movie;

        $movie->name = $request->post('name');
        $movie->year = $request->post('year');
        $movie->save();

        session()->flash('success_message', 'The movie was registered');

        return redirect()->route('movies.edit', $movie->id);
    }

    public function edit($movieId)
    {
        $movie = Movie::findOrFail($movieId);

        return view('movies.form', compact('movie'));
    }

    public function update(Request $request, $movieId)
    {

        $movie = Movie::findOrFail($movieId);

        $this->validate(
            $request,
            [
                'name' => 'required|min:3|max:50',
                'year' => 'required|numeric|digits:4|min:0|max:2050',
            ],
            [
                'name.required' => "you need to put there something",
                'name.min' => 'too short man'
            ]
        );

        $movie->name = $request->post('name');
        $movie->year = $request->post('year');
        $movie->save();

        session()->flash('success_message', 'The movie was upated');

        return redirect()->route('movies.edit', $movie->id);
    }

    public function delete($movieId)
    {
        $movie = Movie::findOrFail($movieId);
        $movie->delete();
        session()->flash('success_message', 'The movie was deleted');
        return redirect()->route('movies.create');
    }
}
