<?php

namespace App\Http\Controllers;

use App\Models\Hours;
use App\Models\Rooms;
use App\Models\Movies;
use App\Models\Display;
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
        $hours = Hours::all();

        return view('admin.dashboard-movies', ['movies' => $movies, 'rooms' => $rooms, 'hours' => $hours]);
    }

    public function moviesStore(Request $request) {

        Movies::create([
            'movie_id' => $request->input('movie_id'),
            'poster' => $request->input('poster'),
            'overview' => $request->input('overview'),
            'title' => $request->input('title'),
            'hour' => $request->input('hour'),
            'date' => $request->input('date'),
            'room' => $request->input('room'),
        ]);

        $hour_id = Hours::where('hour', '=', $request->input('hour'));

        Display::create([
            'rooms_id' => $request->input('room'),
            'date' => $request->input('date'),
            'hour_id' => $hour_id,
        ]);

        return redirect('dashboard/admin/movies');
    }

    public function moviesDelete($id) {

        Movies::destroy($id);

        return redirect('dashboard/admin/movies');
    }

    public function settings() {

        $hours = Hours::all();
        $roomName = Rooms::all();

        return view('admin.dashboard-settings', ['hours' => $hours, 'roomsName' => $roomName]);
    }

    public function settingsStore(Request $request) {

        if($request->input('hour')) {
            Hours::create([
                'hour' => $request->input('hour')
            ]);
        }
        if($request->input('roomName')) {
            Rooms::create([
                'name' => $request->input('roomName')
            ]);
        }

        return redirect('dashboard/admin/settings');
    }

    public function settingsDeleteHour($id) {

        Hours::destroy($id);

        return redirect('dashboard/admin/settings');
    }

    public function settingsDeleteRoom($id) {

        Rooms::destroy($id);

        return redirect('dashboard/admin/settings');
    }
}
