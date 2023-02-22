<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutUs()
    {

        $authors = [
            'francis' => [
                'name' => 'Francis Myers',
                'age' => 37,
                'position' => 'CEO'
            ],
            'ines' => [
                'name' => 'Ines Wyatt',
                'age' => 25,
                'position' => 'CFO'
            ],
            'tom' => [
                'name' => 'Tom Whitehead',
                'age' => 29,
                'position' => 'Lead Accountant'
            ],
            'layla' => [
                'name' => 'Layla-Rose Foster',
                'age' => 28,
                'position' => 'Team leader'
            ]
        ];

        return view('about-us', compact('authors'));
    }
}
