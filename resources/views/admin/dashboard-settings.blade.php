@extends('layouts.dashboard-admin')
@section('title')
    Admin Dashboard - Movies
@endsection

@section('content')
    <div class="flex m-4">
        <div class="w-full">
            <h4>Crénaux horaires</h4>
            <p>Paramétrer ici les horaires de débuts de diffusion </p>
            <div class="timepicker relative form-floating mb-3 xl:w-96" data-mdb-with-icon="false" id="input-toggle-timepicker">
                <input type="text"
                  class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                  placeholder="Select a date" data-mdb-toggle="input-toggle-timepicker" />
                <label for="floatingInput" class="text-gray-700">Select a time</label>
              </div>
        </div>
    </div>
@endsection