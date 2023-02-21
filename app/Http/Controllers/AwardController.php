<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AwardController extends Controller
{
    //display list of movie awards
    public function index()
    {

        $awards = [
            'Oscars',
            'Golden Globes',
            'Bafta',
            'Emmy'
        ];

        dd($awards);

        // return view('awards.index', ['awards' => $awards]);
        return view('awards.index', compact('awards'));
    }
}
