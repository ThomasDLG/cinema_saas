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
                  <div class="mb-3 xl:w-96">
                    <select name="rooms" class="appearance-none block w-full px-3 py-1.5 text-base font-normal  text-gray-700  bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-primary-border focus:ring-primary-border focus:outline-none" aria-label="Default select example">
                      <option selected>Choisir une salle</option>
                        @foreach ($rooms as $room)
                        <option value="{{ $room->id }}">{{ $room->name }}</option>
                        @endforeach
                  </select>
                    <select name="hour" class="appearance-none block w-full px-3 py-1.5 text-base font-normal  text-gray-700  bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-primary-border focus:ring-primary-border focus:outline-none" aria-label="Default select example">
                        <option selected>Choisir l'heure de diffusion</option>
                        <option value="10:00:00">10h00</option>
                        <option value="12:00:00">12h00</option>
                        <option value="15:00:00">15h00</option>
                        <option value="17:00:00">17h00</option>
                        <option value="19:00:00">19h00</option>
                        <option value="21:00:00">21h00</option>
                    </select>
                </div>
                <div class="datepicker relative form-floating mb-3 xl:w-96" data-mdb-toggle-button="false">
                  <input type="text" name="date"
                    class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-primary-border focus:ring-primary-border focus:outline-none"
                    placeholder="Select a date" data-mdb-toggle="datepicker" />
                </div>
                <button class="btn-primary" type="submit">Enregistrer</button>
              </form>
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
                            <h6 class="mb-4 leading-normal text-sm">{{$movie->title}}</h6>
                            <span class="leading-tight text-xs">Salle: <span class="font-semibold text-slate-700 sm:ml-2">FRB1235476</span></span>
                            <span class="mb-2 leading-tight text-xs">Date: <span class="font-semibold text-slate-700 sm:ml-2">Viking Burrito</span></span>
                            <span class="mb-2 leading-tight text-xs">Heure: <span class="font-semibold text-slate-700 sm:ml-2"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e28d8e8b948790a2809790908b968dcc818d8f">[email&#160;protected]</a></span></span>
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