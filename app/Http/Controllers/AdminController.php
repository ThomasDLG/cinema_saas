<?php

namespace App\Http\Controllers;

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
        return view('admin.dashboard-movies');
    }
}
