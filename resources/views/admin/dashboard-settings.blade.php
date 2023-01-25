@extends('layouts.dashboard-admin')
@section('title')
    Admin Dashboard - Movies
@endsection

@section('content')
    <div class="flex m-4">
        <div class="w-full">
            <h4 class="text-4xl">Ajouter des horaires</h4>
            <p class="my-4">Paramétrer ici les horaires de débuts de diffusion</p>
            <form action="{{ route('admin.dashboard-settings-store') }}" method="post">
                @csrf
                <div class="mb-3" data-mdb-with-icon="false" id="input-toggle-timepicker">
                    <input type="time" name="hour"
                      class="block px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-primary-border focus:ring-primary-border focus:outline-none"/>
                </div>
                <button class="btn-primary" type="submit">Enregistrer</button>
            </form>
            @foreach ($hours as $hour)
            <span id="badge-dismiss-dark" class="inline-flex items-center px-2 py-1 mr-2 text-sm font-medium text-gray-800 bg-gray-100 rounded dark:bg-gray-700 dark:text-gray-300">
                {{$hour->hour}}
                <a href="{{ route('admin.dashboard-settings-delete', $hour->id)}}" class="inline-flex items-center p-0.5 ml-2 text-sm text-gray-400 bg-transparent rounded-sm hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-gray-300" data-dismiss-target="#badge-dismiss-dark" aria-label="Remove">
                    <svg aria-hidden="true" class="w-3.5 h-3.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Remove badge</span>
                </a>
              </span>
            @endforeach
            <h4 class="text-4xl">Nommer les salles </h4>
            <p class="my-4">Paramétrer ici le nom des salles</p>
            <form action="{{ route('admin.dashboard-settings-store') }}" method="post">
                @csrf
                <div class="mb-3" data-mdb-with-icon="false" id="input-toggle-timepicker">
                    <input type="text" name="roomName"
                      class="block px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-primary-border focus:ring-primary-border focus:outline-none"/>
                </div>
                <button class="btn-primary" type="submit">Enregistrer</button>
            </form>
            @foreach ($roomsName as $roomName)
            <span id="badge-dismiss-dark" class="inline-flex items-center px-2 py-1 mr-2 text-sm font-medium text-gray-800 bg-gray-100 rounded dark:bg-gray-700 dark:text-gray-300">
                {{$roomName->name}}
                <a href="{{ route('admin.dashboard-settings-delete', $roomName->id)}}" class="inline-flex items-center p-0.5 ml-2 text-sm text-gray-400 bg-transparent rounded-sm hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-gray-300" data-dismiss-target="#badge-dismiss-dark" aria-label="Remove">
                    <svg aria-hidden="true" class="w-3.5 h-3.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Remove badge</span>
                </a>
              </span>
            @endforeach
        </div>
    </div>
@endsection