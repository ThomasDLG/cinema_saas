<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Rooms;
use App\Models\Movies;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('dashboard');
    }

    public function admin() {
        return view('admin.dashboard');
    }

    public function movies() {

        $movies = Movies::all();
        $rooms = Rooms::all();

        return view('admin.dashboard-movies', ['movies' => $movies, 'rooms' => $rooms]);
    }

    public function moviesStore(Request $request) {
        
        $date = Carbon::createFromFormat('d/m/Y', $request->input('date'))->format('Y-m-d');
        
        Movies::create([
            'movie_id' => $request->input('movie_id'),
            'poster' => $request->input('poster'),
            'overview' => $request->input('overview'),
            'title' => $request->input('title'),
            'hour' => $request->input('hour'),
            'date' => $date,
        ]);

        return redirect('dashboard/admin/movies');
    }

    public function moviesDelete($id) {

        Movies::destroy($id);

        return redirect('dashboard/admin/movies');
    }

    public function settings() {

        return view('admin.dashboard-settings');
    }
}
