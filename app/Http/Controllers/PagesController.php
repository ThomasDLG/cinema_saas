<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homepage() {
        $movies = Movies::all('poster');
        return view('welcome', compact('movies'));
    }
    public function movies() {
        return view('pages.movies');
    }

    public function moviesSingle() {
        return view('pages.movie-single');
    }

    public function contact() {
        return view('pages.contact');
    }
}
