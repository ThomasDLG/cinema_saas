<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/gui', function () {
    return view('gui');
});

// Fetch

Route::get('/fetch-data', 'FetchDataController@index');


// Pages

Route::get('/', [PagesController::class, 'homepage'])->name('welcome');

Route::prefix('movies')
->controller(PagesController::class)
->group(function () {
    Route::get('/movies', 'movies')->name('pages.movies');
    Route::get('/movies/{slug}', 'moviesSingle')->name('pages.movie-single');
});

Route::get('/contact', [PagesController::class, 'contact'])->name('pages.contact');

// Reservations

// Dashboard users

Route::prefix('dashboard')
->middleware('auth', 'verified')
->controller(AdminController::class)
->group(function () {
    Route::get('/', 'index')->name('dashboard');
});

// Admin routes

Route::prefix('dashboard')
->middleware('auth', 'verified', 'admin')
->controller(AdminController::class)
->group(function () {
    Route::get('/admin', 'admin')->name('admin.dashboard');
    // Profile
    Route::get('/admin/profile/{pseudo}', 'profile')->name('admin.profile');
    Route::get('/admin/profile/preferences/{pseudo}', 'profilePreferences')->name('admin.profile-preferences');
    Route::post('/admin/profile/{pseudo}', 'profileEdit')->name('admin.profile-edit');
    // Movies
    Route::get('/admin/movies', 'movies')->name('admin.dashboard-movies');
    Route::post('/admin/movies/store', 'moviesStore')->name('admin.dashboard-movies-store');
    Route::get('/admin/movies/delete/{id}', 'moviesDelete')->name('admin.dashboard-movies-delete');
    // Appearance
    Route::get('/admin/appearance/banner', 'appearanceBanner')->name('admin.appearance-banner');
    Route::post('admin/appearance/banner/edit-title', 'appearanceBannerEditTitle')->name('admin.appearance-banner-edit-title');
    Route::post('admin/appearance/banner/edit-description', 'appearanceBannerEditDescription')->name('admin.appearance-banner-edit-description');
    Route::post('admin/appearance/banner/edit-image', 'appearanceBannerEditImage')->name('admin.appearance-banner-edit-image');
    // Settings
    Route::get('/admin/settings', 'settings')->name('admin.dashboard-settings');
    Route::post('/admin/settings/store', 'settingsStore')->name('admin.dashboard-settings-store');
    Route::get('/admin/settings/delete/hour/{id}', 'settingsDeleteHour')->name('admin.dashboard-settings-delete-hour');
    Route::get('/admin/settings/delete/room/{id}', 'settingsDeleteRoom')->name('admin.dashboard-settings-delete-room');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
