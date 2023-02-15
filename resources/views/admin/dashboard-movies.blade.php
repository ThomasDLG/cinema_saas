@extends('layouts.dashboard-admin')
@section('title')
    Admin Dashboard - Movies
@endsection

@section('content')
    <div class="flex m-4">
      <div class="w-full max-w-full px-3 mt-6 md:w-4/12 md:flex-none">
        <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-6 px-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
                <h6 class="mb-0">Ajouter un film</h6>
            </div>
            <div class="flex-auto flex-wrap p-4 pt-6">
              <form action="{{ route('admin.dashboard-movies-store') }}" method="POST">
                @csrf
                <div class="liveSearch"></div>
                <div class="liveHoursRequest"></div>
                <button class="btn-primary" type="submit">Enregistrer</button>
              </form>
              @error('title')
                  <div class="font-bold text-primary-main">Vous devez selectionner un film</div>
              @enderror
              @error('room')
                  <div class="font-bold text-primary-main">Vous devez selectionner une salle</div>
              @enderror
              @error('date')
                  <div class="font-bold text-primary-main">Vous devez selectionner une date</div>
              @enderror
              @error('hour')
                  <div class="font-bold text-primary-main">Vous devez selectionner une heure</div>
              @enderror
            </div>
        </div>
      </div>
      <div class="w-full max-w-full px-3 mt-6 md:w-8/12 md:flex-none">
        <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-6 px-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
                <h6 class="mb-0">Films à l'affiche</h6>
            </div>
            <div class="flex-auto p-4 pt-6">
                <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                  @foreach ($movies as $movie)
                    <li class="relative flex p-6 mb-2 border-0 rounded-t-inherit rounded-xl bg-gray-50">
                        <div class="flex flex-col">
                            <img class="rounded-md" src="https://image.tmdb.org/t/p/w92{{$movie->poster}}" alt="{{$movie->title}}">
                        </div>
                        <div class="flex flex-col ml-4">
                            <h6 class="mb-4 leading-normal text-xl font-bold">{{$movie->title}}</h6>
                            <span class="leading-tight text-md font-semibold">Salle: <span class="font-semibold text-slate-700 sm:ml-2 text-sm">{{$movie->room->name ?? 'None'}}</span></span>
                            <span class="mb-2 leading-tight text-md font-semibold">Date: <span class="text-slate-700 sm:ml-2 text-sm">{{$movie->date}}</span></span>
                            <span class="mb-2 leading-tight text-md font-semibold">Heure: <span class="text-slate-700 sm:ml-2 text-sm">{{$movie->hour}}</span></span>
                        </div>
                        <div class="ml-auto text-right">
                            <a href="{{ route('admin.dashboard-movies-delete', $movie->id) }}" class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="javascript:;"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text"></i>Delete</a>
                            <a class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700" href="javascript:;"><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a>
                        </div>
                    </li>
                  @endforeach

                </ul>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection