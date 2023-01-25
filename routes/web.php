<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gui', function () {
    return view('gui');
});

// Admin routes

Route::prefix('dashboard')
->middleware('auth', 'verified')
->controller(AdminController::class)
->group(function () {
    Route::get('/', 'index')->name('dashboard');
    Route::get('/admin', 'admin')->name('admin.dashboard');
    // Movies
    Route::get('/admin/movies', 'movies')->name('admin.dashboard-movies');
    Route::post('/admin/movies/store', 'moviesStore')->name('admin.dashboard-movies-store');
    Route::get('/admin/movies/delete/{id}', 'moviesDelete')->name('admin.dashboard-movies-delete');
    // Settings
    Route::get('/admin/settings', 'settings')->name('admin.dashboard-settings');
    Route::post('/admin/settings/store', 'settingsStore')->name('admin.dashboard-settings-store');
    Route::get('/admin/settings/delete/{id}', 'settingsDeleteHour')->name('admin.dashboard-settings-delete');
    Route::get('/admin/settings/delete/{id}', 'settingsDeleteRoom')->name('admin.dashboard-settings-delete');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
