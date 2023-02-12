<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Hours;
use App\Models\Rooms;
use App\Models\Movies;
use App\Models\Display;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index() {
        return view('dashboard');
    }

    public function admin() {

        $id = auth()->user()->id;
        return view('admin.dashboard', [
            'links' => [
                ['title' => 'Dashboard', 'url' => '/dashboard/admin', 'active' => true],
            ], 'id' => $id,
        ]);
    }

    public function profile($id) {

        $user = auth()->user();
        $id = auth()->user()->id;
        return view('admin.profile', ['user' => $user, 'id' => $id, 'links' => [
            ['title' => 'Dashboard', 'url' => '/dashboard/admin'],
            ['title' => 'Profile', 'url' => '/dashboard/admin/profile', 'active' => true],
        ],]);
    }

    public function movies() {

        $id = auth()->user()->id;
        $movies = Movies::all();
        $rooms = Rooms::all();
        $hours = Hours::all();

        return view('admin.dashboard-movies', ['id' => $id, 'movies' => $movies, 'rooms' => $rooms, 'hours' => $hours, 'links' => [
            ['title' => 'Dashboard', 'url' => '/dashboard/admin'],
            ['title' => 'Films', 'url' => '/dashboard/admin/movies', 'active' => true],
        ]]);
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

        $result = DB::table('hours')
        ->select('id')
        ->where('hour','=', $request->input('hour'))
        ->first();

        $hour_id = $result->id;

        Display::create([
            'rooms_id' => $request->input('room'),
            'date' => $request->input('date'),
            'hours_id' => $hour_id,
        ]);

        return redirect('dashboard/admin/movies');
    }

    public function moviesDelete($id) {

        Movies::destroy($id);

        return redirect('dashboard/admin/movies');
    }

    public function settings() {
        $id = auth()->user()->id;
        $hours = Hours::all();
        $roomName = Rooms::all();

        return view('admin.dashboard-settings', ['id' => $id, 'hours' => $hours, 'roomsName' => $roomName, 'links' => [
            ['title' => 'Dashboard', 'url' => '/dashboard/admin'],
            ['title' => 'Paramètres', 'url' => '/dashboard/admin/settings', 'active' => true],
        ]]);
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
