<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <nav class="relative w-full flex flex-wrap items-center justify-between py-4  bg-gradient-to-b from-gray-500 to-transparent   text-white navbar navbar-expand-lg navbar-light">
            <div class="container-fluid w-full flex flex-wrap items-center justify-between px-6">
            <button class="navbar-toggler text-gray-500border-0hover:shadow-none hover:no-underlinepy-2px-2.5bg-transparentfocus:outline-none focus:ring-0 focus:shadow-none focus:no-underline" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars"
                class="w-6" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="currentColor"
                d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z">
                </path>
            </svg>
                
            </button>
            <div class="collapse navbar-collapse flex-grow items-center" id="navbarSupportedContent">
            <a class="flex items-center  text-gray-900  hover:text-gray-900  focus:text-gray-900 mt-2 lg:mt-0 mr-1" href="{{ URL::to('/') }}">
                <img class="w-36" src="storage/img/logo.svg" alt="">
            </a>
            </div>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <div class="flex items-center relative">
            <!-- Icon -->
            <div class="dropdown relative flex items-center">
                @if (Route::has('login'))
                    @auth
                        <a class="dropdown-toggle flex items-center hidden-arrow" href="#" id="dropdownMenuButton2" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {!! $avatar = Avatar::create(Auth::user()->name . Auth::user()->surname)->toSvg()!!}
                        </a>
                    @else
                    @if (Route::has('register'))
                        <a class="mx-4 font-bold transition duration-150 hover:text-gray-100" href="{{ route('register') }}">Créer un compte</a>
                    @endif
                        <a class="mx-4 p-3 rounded-md inline-block bg-gray-100/25" href="{{ url('/login') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="width: 16px;"><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" fill="#fff"/></svg>
                        </a>
                    @endauth
                @endif
                <ul class="dropdown-menu min-w-max absolute hidden  bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none left-auto right-0 top-12" aria-labelledby="dropdownMenuButton2">
                @if (Route::has('login'))
                    @auth
                        @if ($user->role == 'admin')
                        <li>
                            <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent  text-gray-700  hover:bg-gray-100" href="{{route('admin.dashboard')}}">Backoffice</a>
                        </li>
                        <li>
                            <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent  text-gray-700  hover:bg-gray-100" href="{{route('admin.profile', ['pseudo' => $user->pseudo])}}">Mon compte</a>
                        </li>
                        @else
                        <li>
                            <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent  text-gray-700  hover:bg-gray-100" href="{{route('dashboard')}}">Mon compte</a>
                        </li>
                        @endif
                    @endauth
                @endif
                <li>
                    <form class="mb-0" action="{{route('logout')}}" method="post">
                        @csrf
                        <a href="{{route('logout')}}" onclick="event.preventDefault();this.closest('form').submit();" class="flex justify-between items-center py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                            <span class="flex items-center">Déconnexion</span>
                        </a>
                    </form>
                </li>
                </ul>
            </div>
            </div>
            <!-- Right elements -->
            </div>
        </nav>
@yield('content')
</body>
@extends('layouts.footer')