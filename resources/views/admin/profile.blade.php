@extends('layouts.dashboard-admin')
@section('title')
    Admin Dashboard - Movies
@endsection

@section('content')
    <div class="relative flex mt-4 h-48 bg-gray-100 rounded-md">
        <span class="absolute bottom-[-50px] left-1/2 transform -translate-x-1/2">{!! $avatar = Avatar::create(Auth::user()->name . Auth::user()->surname)->setDimension(100)->setFontSize(42)->toSvg()!!}</span>
    </div>
    <div class="flex justify-center mt-16">
        <h2 class="text-2xl">{{$user->name}} {{$user->surname}}</h2>
    </div>
@endsection