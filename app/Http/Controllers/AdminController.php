<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Hours;
use App\Models\Rooms;
use App\Models\Banner;
use App\Models\Movies;
use App\Models\Display;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    public function index() {
        return view('dashboard');
    }

    public function admin() {

        $pseudo = auth()->user()->pseudo;
        return view('admin.dashboard', [
            'links' => [
                ['title' => 'Dashboard', 'url' => '/dashboard/admin', 'active' => true],
            ], 'pseudo' => $pseudo,
        ]);
    }

    public function profile($pseudo) {

        $user = User::wherePseudo($pseudo)->firstOrFail();
        return view('admin.profile', ['pseudo' => $pseudo, 'user' => $user, 'links' => [
            ['title' => 'Dashboard', 'url' => '/dashboard/admin'],
            ['title' => 'Profile', 'url' => '/dashboard/admin/profile/'.$pseudo, 'active' => true],
        ],]);
    }

    public function profilePreferences($pseudo) {

        $user = User::wherePseudo($pseudo)->firstOrFail();
        return view('admin.profile-preferences', ['pseudo' => $pseudo, 'user' => $user, 'links' => [
            ['title' => 'Dashboard', 'url' => '/dashboard/admin'],
            ['title' => 'Profile', 'url' => '/dashboard/admin/profile/'.$pseudo],
            ['title' => 'Preférences', 'url' => '/dashboard/admin/profile/preferences/'.$pseudo, 'active' => true],
        ],]);
    }

    public function profileEdit(Request $request, $pseudo) {

        if($request->input('name')) {
            $validated =$request->validate([
                'name' => 'required|string',
            ]);
            if($validated) {
                $user = User::where('pseudo', $pseudo)->first();
                $user->name = $request->input('name');
                $user->save();
                return redirect()->route('admin.profile', ['pseudo' => $pseudo]);
            }
        }
        if($request->input('surname')) {
            $validated =$request->validate([
                'surname' => 'required|string',
            ]);
            if($validated) {
                $user = User::where('pseudo', $pseudo)->first();
                $user->surname = $request->input('surname');
                $user->save();
                return redirect()->route('admin.profile', ['pseudo' => $pseudo]);
            }
        }
        if($request->input('pseudo')) {
            $validated =$request->validate([
                'pseudo' => 'required|unique:users,pseudo|string|max:24',
            ]);
            if($validated) {
                $user = User::where('pseudo', $pseudo)->first();
                $user->pseudo = $request->input('pseudo');
                $user->save();
                return redirect()->route('admin.profile', ['pseudo' => $user->pseudo]);
            }
        }
        if($request->input('email')) {
            $validated =$request->validate([
                'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            ]);
            $user = User::where('pseudo', $pseudo)->first();
            $user->email = $request->input('email');
            $user->save();
            return redirect()->route('admin.profile', ['pseudo' => $pseudo]);
        }
        if($request->input('phone')) {
            $validated =$request->validate([
                'phone' => ['required', 'numeric', 'min_digits:10', 'max_digits:10',],
            ]);
            if($validated) {
                $user = User::where('pseudo', $pseudo)->first();
                $user->phone = $request->input('phone');
                $user->save();
                return redirect()->route('admin.profile', ['pseudo' => $pseudo]);
            }
        }
        if($request->input('adress')) {
            $validated =$request->validate([
                'adress' => 'required|string|max:255',
            ]);
            $user = User::where('pseudo', $pseudo)->first();
            $user->adress = $request->input('adress');
            $user->save();
            return redirect()->route('admin.profile', ['pseudo' => $pseudo]);
        }
        if($request->input('city')|$request->input('zip')) {
            $validated =$request->validate([
                'city' => 'required|string|max:255',
                'zip' => 'required|numeric|min_digits:5|max_digits:5',
            ]);
            if($validated) {
                $user = User::where('pseudo', $pseudo)->first();
                $user->city = $request->input('city');
                $user->zip = $request->input('zip');
                $user->save();
                return redirect()->route('admin.profile', ['pseudo' => $pseudo]);
            }
        }
    }

    public function movies() {

        $pseudo = auth()->user()->pseudo;
        $movies = Movies::all();
        $rooms = Rooms::all();
        $hours = Hours::all();

        return view('admin.dashboard-movies', ['pseudo' => $pseudo, 'movies' => $movies, 'rooms' => $rooms, 'hours' => $hours, 'links' => [
            ['title' => 'Dashboard', 'url' => '/dashboard/admin'],
            ['title' => 'Films', 'url' => '/dashboard/admin/movies', 'active' => true],
        ]]);
    }

    public function moviesStore(Request $request) {

        $validated = $request->validate([
            'movie_id' => ['required', 'unique:movies,movie_id', 'max:255'],
            'poster'   => ['required', 'unique:movies,poster', 'max:255'],
            'overview' => ['required', 'unique:movies,overview'],
            'title'    => ['required', 'unique:movies,title', 'max:255'],
            'room'     => ['required', 'numeric'],
            'date'     => ['required', 'date'],
            'hour'     => ['required', 'date_format:H:i:s'],
        ]);

        if ($validated) {}
        Movies::create([
            'movie_id' => $request->input('movie_id'),
            'poster' => $request->input('poster'),
            'overview' => $request->input('overview'),
            'title' => $request->input('title'),
            'hour' => $request->input('hour'),
            'date' => $request->input('date'),
            'room_id' => $request->input('room'),
        ]);

        $result = DB::table('hours')
        ->select('id')
        ->where('hour','=', $request->input('hour'))
        ->first();

        $hour_id = $result->id;

        Display::create([
            'room_id' => $request->input('room'),
            'date' => $request->input('date'),
            'hour_id' => $hour_id,
        ]);

        return redirect('dashboard/admin/movies');
    }

    public function moviesDelete($id) {

        Movies::destroy($id);

        return redirect('dashboard/admin/movies');
    }

    public function appearanceBanner() {

        $banner = Banner::all();
        $id = auth()->user()->id;
        return view('admin.appearance-banner', ['banner' => $banner, 'id' => $id, 'links' => [
            ['title' => 'Dashboard', 'url' => '/dashboard/admin'],
            ['title' => 'Apparence', 'url' => '#'],
            ['title' => 'Bannière', 'url' => '/dashboard/admin/appearance/banner', 'active' => true],
        ]]);
    }

    public function appearanceBannerEditTitle(Request $request) {

        $title = $request->input('title');

        DB::table('banners')->update(['title' => $title]);

        return redirect('dashboard/admin/appearance/banner');
    }

    public function appearanceBannerEditDescription(Request $request) {

        $description = $request->input('description');

        DB::table('banners')->update(['description' => $description]);

        return redirect('dashboard/admin/appearance/banner');
    }

    public function appearanceBannerEditImage(Request $request) {

        if ($request->hasFile('image')) {
        $image = $request->file('image');
        $destinationPath = public_path('/storage/img');
        $img = Image::make($image->getRealPath());
        $img->encode('webp');
        $img->save($destinationPath . '/banner.webp');
        };

        return back();
    }

    public function settings() {
        $pseudo = auth()->user()->pseudo;
        $hours = Hours::all();
        $roomName = Rooms::all();

        return view('admin.dashboard-settings', ['pseudo' => $pseudo, 'hours' => $hours, 'roomsName' => $roomName, 'links' => [
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
