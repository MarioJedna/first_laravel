<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {

        $people = Person::query()
            ->where('fullname', 'like', 'Tom Ho%')
            ->orderBy('fullname')
            ->get();

        // dd($people->pluck('fullname')->unique());
        return view('person.index', compact('people'));
    }
}
