<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store()
    {
        $review = new Review;
        $review->movie_id = $_POST['movie_id'];
        $review->text = $_POST['text'];
        // dd($review);
        $review->save();
        return redirect()->back();
    }
}
