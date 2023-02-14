<?php

use App\Models\Rooms;
use App\Models\Display;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\UserCollection;
use App\Http\Resources\HoursCollection;
use App\Http\Resources\RoomsCollection;
use App\Http\Controllers\AdminController;
use App\Http\Resources\DisplayCollection;
use App\Models\Hours;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/admin/hours/{room_id}/{date}', function($rooms_id, $date){
    return DisplayCollection::collection(Display::where('room_id', '=', $rooms_id)->where('date', '=', $date)->get('hour_id'));
});

Route::get('/admin/hours/', function(){
    return HoursCollection::collection(Hours::all());
});

Route::get('/admin/rooms', function() {
    return RoomsCollection::collection(Rooms::all());
});