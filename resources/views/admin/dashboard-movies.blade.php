@extends('layouts.dashboard-admin')
@section('title')
    Admin Dashboard - Movies
@endsection

@section('content')
    <div class="flex m-4">
        <form action="">
            @csrf
            <div class="liveSearch"></div>
              <div class="mb-3 xl:w-96">
                <select class="appearance-none block w-full px-3 py-1.5 text-base font-normal  text-gray-700  bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-primary-border focus:ring-primary-border focus:outline-none" aria-label="Default select example">
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
              <input type="text"
                class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-primary-border focus:ring-primary-border focus:outline-none"
                placeholder="Select a date" data-mdb-toggle="datepicker" />
            </div>
            <button class="btn-primary" type="submit">Enregistrer</button>
          </form>
    </div>
@endsection