<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Movies;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homepage() {
        $user = auth()->user();
        $banner = Banner::all();
        $movies = Movies::all('poster');
        return view('welcome', compact('user','movies', 'banner'));
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
