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

    public function detail()
    {
        $selectedPerson = Person::query()->where('id', '=', $_GET['id'])->get();
        // dd($selectedPerson[0]->fullname);
        return view('person.detail', compact('selectedPerson'));
    }

    public function create(Request $request)
    {
        $param1 = $request->input('param1', 'default value');
        // dd($param1);
    }

    public function insert()
    {
        $person = new Person;
        $person->fullname = $_POST['fullname'];
        $person->save();

        session()->flash('sucess_message', 'Person successfully inserted');

        return redirect()->route('people.index');
    }
}
