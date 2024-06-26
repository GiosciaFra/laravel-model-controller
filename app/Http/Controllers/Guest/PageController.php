<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {

        $movies = Movie::orderBy('vote', 'desc')->get();

        // dd($movies);
        return view("home", compact("movies"));
    }
}
