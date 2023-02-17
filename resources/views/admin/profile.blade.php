@extends('admin.layouts.dashboard-admin')
@section('title')
    Profile de {{$user->name}}
@endsection

@section('content')
    <div class="relative flex mt-4 h-48 bg-[url('https://images.unsplash.com/photo-1608869984089-85a581648a72?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80')] rounded-md">
        <div class="flex justify-between absolute bottom-[-50px] h-[100px] left-1/2 transform -translate-x-1/2 bg-gray-100 backdrop-blur-sm bg-white/30 drop-shadow-lg rounded-md p-4 w-[90%]">
            <div class="flex">
                <span class="">{!! $avatar = Avatar::create(Auth::user()->name . Auth::user()->surname)->setDimension(64)->setFontSize(24)->toSvg()!!}</span>
                <div class="flex justify-start flex-wrap ml-6">
                    <h2 class="text-2xl w-full">{{$user->name}} {{$user->surname}}</h2>
                    <p id="updateProductButton" data-modal-toggle="updateTitle" class="text-base text-gray-400">{{'@'.$user->pseudo}}</p>
                </div>
            </div>
            <div class="flex justify-end items-center gap-6">
                <a href="{{route('admin.profile-preferences', ['pseudo' => $user->pseudo])}}">
                    <div class="group flex flex-wrap py-2 px-4 {{ Request::path() == 'dashboard/admin/profile/'.$user->id  ? 'bg-white drop-shadow-lg rounded-md' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-5 mr-4 text-gray-700 transition-all group-hover:text-primary-main"><path fill="currentColor" d="M305.5 135.3c7.1-6.3 9.9-16.2 6.2-25c-2.3-5.3-4.8-10.5-7.6-15.5L301 89.4c-3-5-6.3-9.9-9.8-14.6c-5.7-7.6-15.7-10.1-24.7-7.1l-28.2 9.3c-10.7-8.8-23-16-36.2-20.9L196 27.1c-1.9-9.3-9.1-16.7-18.5-17.8C170.9 8.4 164.2 8 157.4 8h-.7c-6.8 0-13.5 .4-20.1 1.2c-9.4 1.1-16.6 8.6-18.5 17.8L112 56.1c-13.3 5-25.5 12.1-36.2 20.9L47.5 67.8c-9-3-19-.5-24.7 7.1c-3.5 4.7-6.8 9.6-9.9 14.6l-3 5.3c-2.8 5-5.3 10.2-7.6 15.6c-3.7 8.7-.9 18.6 6.2 25l22.2 19.8C29.6 161.9 29 168.9 29 176s.6 14.1 1.7 20.9L8.5 216.7c-7.1 6.3-9.9 16.2-6.2 25c2.3 5.3 4.8 10.5 7.6 15.6l3 5.2c3 5.1 6.3 9.9 9.9 14.6c5.7 7.6 15.7 10.1 24.7 7.1l28.2-9.3c10.7 8.8 23 16 36.2 20.9l6.1 29.1c1.9 9.3 9.1 16.7 18.5 17.8c6.7 .8 13.5 1.2 20.4 1.2s13.7-.4 20.4-1.2c9.4-1.1 16.6-8.6 18.5-17.8l6.1-29.1c13.3-5 25.5-12.1 36.2-20.9l28.2 9.3c9 3 19 .5 24.7-7.1c3.5-4.7 6.8-9.5 9.8-14.6l3.1-5.4c2.8-5 5.3-10.2 7.6-15.5c3.7-8.7 .9-18.6-6.2-25l-22.2-19.8c1.1-6.8 1.7-13.8 1.7-20.9s-.6-14.1-1.7-20.9l22.2-19.8zM109 176a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zM501.7 500.5c6.3 7.1 16.2 9.9 25 6.2c5.3-2.3 10.5-4.8 15.5-7.6l5.4-3.1c5-3 9.9-6.3 14.6-9.8c7.6-5.7 10.1-15.7 7.1-24.7l-9.3-28.2c8.8-10.7 16-23 20.9-36.2l29.1-6.1c9.3-1.9 16.7-9.1 17.8-18.5c.8-6.7 1.2-13.5 1.2-20.4s-.4-13.7-1.2-20.4c-1.1-9.4-8.6-16.6-17.8-18.5L580.9 307c-5-13.3-12.1-25.5-20.9-36.2l9.3-28.2c3-9 .5-19-7.1-24.7c-4.7-3.5-9.6-6.8-14.6-9.9l-5.3-3c-5-2.8-10.2-5.3-15.6-7.6c-8.7-3.7-18.6-.9-25 6.2l-19.8 22.2c-6.8-1.1-13.8-1.7-20.9-1.7s-14.1 .6-20.9 1.7l-19.8-22.2c-6.3-7.1-16.2-9.9-25-6.2c-5.3 2.3-10.5 4.8-15.6 7.6l-5.2 3c-5.1 3-9.9 6.3-14.6 9.9c-7.6 5.7-10.1 15.7-7.1 24.7l9.3 28.2c-8.8 10.7-16 23-20.9 36.2L312.1 313c-9.3 1.9-16.7 9.1-17.8 18.5c-.8 6.7-1.2 13.5-1.2 20.4s.4 13.7 1.2 20.4c1.1 9.4 8.6 16.6 17.8 18.5l29.1 6.1c5 13.3 12.1 25.5 20.9 36.2l-9.3 28.2c-3 9-.5 19 7.1 24.7c4.7 3.5 9.5 6.8 14.6 9.8l5.4 3.1c5 2.8 10.2 5.3 15.5 7.6c8.7 3.7 18.6 .9 25-6.2l19.8-22.2c6.8 1.1 13.8 1.7 20.9 1.7s14.1-.6 20.9-1.7l19.8 22.2zM461 304a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                        <h4 class="text-sm text-gray-700 transition-all group-hover:text-primary-main font-bold">Préférences</h4>
                    </div>
                </a>
                @if ($user->role !== 'admin')
                    <a href="#">
                        <div class="group flex flex-wrap p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 mr-4 text-gray-700 transition-all group-hover:text-primary-main"><path fill="currentColor" d="M190.5 68.8L225.3 128H224 152c-22.1 0-40-17.9-40-40s17.9-40 40-40h2.2c14.9 0 28.8 7.9 36.3 20.8zM64 88c0 14.4 3.5 28 9.6 40H32c-17.7 0-32 14.3-32 32v64c0 17.7 14.3 32 32 32H480c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32H438.4c6.1-12 9.6-25.6 9.6-40c0-48.6-39.4-88-88-88h-2.2c-31.9 0-61.5 16.9-77.7 44.4L256 85.5l-24.1-41C215.7 16.9 186.1 0 154.2 0H152C103.4 0 64 39.4 64 88zm336 0c0 22.1-17.9 40-40 40H288h-1.3l34.8-59.2C329.1 55.9 342.9 48 357.8 48H360c22.1 0 40 17.9 40 40zM32 288V464c0 26.5 21.5 48 48 48H224V288H32zM288 512H432c26.5 0 48-21.5 48-48V288H288V512z"/></svg>
                            <h4 class="text-sm text-gray-700 transition-all group-hover:text-primary-main font-bold">Avantages</h4>
                        </div>
                    </a>
                @endif
            </div>
        </div>
    </div>
    <div class="mt-[100px]">
        <h2 class="font-bold text-2xl text-gray-900">
            Informations
        </h2>
    </div>
    <div class="group flex justify-start mt-8 pb-8 border-b border-b-gray-100">
        <div class="w-1/4">
            <h4 class="font-bold text-base">Prénom</h4>
        </div>
        <div class="w-3/4">
            <input disabled class="input-form w-1/2 inline-block" type="text" name="name" id="name" placeholder="Prénom" value="{{$user->name}}">
            @error('name')
                <div class="font-bold text-primary-main">{{$message}}</div>
            @enderror
            <p id="updateProductButton" data-modal-toggle="updateName" class="hidden group-hover:inline-flex items-baseline text-sm ml-4 font-bold text-gray-300 cursor-pointer transition-all hover:text-gray-500"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 ml-2 text-gray-300 hover:text-gray-500"><path fill="currentColor" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/></svg></p>
        </div>
    </div>
    <div class="group flex justify-start mt-8 pb-8 border-b border-b-gray-100">
        <div class="w-1/4">
            <h4 class="font-bold text-base">Nom</h4>
        </div>
        <div class="w-3/4">
            <input disabled class="input-form w-1/2 inline-block" type="text" name="name" id="name" placeholder="Nom" value="{{$user->surname}}">
            <p id="updateProductButton" data-modal-toggle="updateSurname" class="hidden group-hover:inline-flex items-baseline text-sm ml-4 font-bold text-gray-300 cursor-pointer transition-all hover:text-gray-500"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 ml-2 text-gray-300 hover:text-gray-500"><path fill="currentColor" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/></svg></p>
        </div>
    </div>
    <div class="group flex justify-start mt-8 pb-8 border-b border-b-gray-100">
        <div class="w-1/4">
            <h4 class="font-bold text-base">Pseudo</h4>
        </div>
        <div class="w-3/4">
            <input disabled class="input-form w-1/2 inline-block" type="text" name="name" id="name" placeholder="@pseudo" value="{{$user->pseudo}}">
            @error('pseudo')
                <div class="font-bold text-primary-main">{{$message}}</div>
            @enderror
            <p id="updateProductButton" data-modal-toggle="updatePseudo" class="hidden group-hover:inline-flex items-baseline text-sm ml-4 font-bold text-gray-300 cursor-pointer transition-all hover:text-gray-500"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 ml-2 text-gray-300 hover:text-gray-500"><path fill="currentColor" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/></svg></p>
        </div>
    </div>
    <div class="group flex justify-start mt-8 pb-8 border-b border-b-gray-100">
        <div class="w-1/4">
            <h4 class="font-bold text-base">Email</h4>
        </div>
        <div class="w-3/4">
            <input disabled class="input-form w-1/2 inline-block" type="text" name="name" id="name" placeholder="Nom" value="{{$user->email}}">
            <p id="updateProductButton" data-modal-toggle="updateEmail" class="hidden group-hover:inline-flex items-baseline text-sm ml-4 font-bold text-gray-300 cursor-pointer transition-all hover:text-gray-500"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 ml-2 text-gray-300 hover:text-gray-500"><path fill="currentColor" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/></svg></p>
        </div>
    </div>
    <div class="group flex justify-start mt-8 pb-8 border-b border-b-gray-100">
        <div class="w-1/4">
            <h4 class="font-bold text-base">Téléphone</h4>
        </div>
        <div class="w-3/4">
            <input disabled class="input-form w-1/2 inline-block" type="text" name="name" id="name" placeholder="Téléphone" value="{{$user->phone}}">
            @error('phone')
                <div class="font-bold text-primary-main">{{$message}}</div>
            @enderror
            <p id="updateProductButton" data-modal-toggle="updatePhone" class="hidden group-hover:inline-flex items-baseline text-sm ml-4 font-bold text-gray-300 cursor-pointer transition-all hover:text-gray-500"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 ml-2 text-gray-300 hover:text-gray-500"><path fill="currentColor" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/></svg></p>
        </div>
    </div>
    <div class="group flex justify-start mt-8 pb-8">
        <div class="w-1/4">
            <h4 class="font-bold text-base">Adresse</h4>
        </div>
        <div class="w-3/4 flex flex-wrap items-center gap-6">
            <input disabled class="input-form w-1/2 inline-block" type="text" name="name" id="name" placeholder="Adresse" value="{{$user->adress}}">
            <p id="updateProductButton" data-modal-toggle="updateAdress" class="hidden group-hover:inline-flex items-baseline text-sm font-bold text-gray-300 cursor-pointer transition-all hover:text-gray-500"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 ml-2 text-gray-300 hover:text-gray-500"><path fill="currentColor" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/></svg></p>
             <div class="flex justify-between w-1/2">
                <input disabled class="input-form w-2/5 inline-block" type="text" name="name" id="name" placeholder="Ville" value="{{$user->city}}">
                <input disabled class="input-form w-2/5 inline-block" type="text" name="name" id="name" placeholder="Code postale" value="{{$user->zip}}">
                @error('city')
                    <div class="font-bold text-primary-main">{{$message}}</div>
                @enderror
                @error('zip')
                    <div class="font-bold text-primary-main">{{$message}}</div>
                @enderror
            </div>
            <p id="updateProductButton" data-modal-toggle="updateCity" class="hidden group-hover:inline-flex items-baseline text-sm font-bold text-gray-300 cursor-pointer transition-all hover:text-gray-500"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 ml-2 text-gray-300 hover:text-gray-500"><path fill="currentColor" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/></svg></p>
        </div>
    </div>
    {{-- Modals --}}
    <div id="updateName" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                <!-- Modal header -->
                <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Modifier le prénom
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="updateName">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="{{ route('admin.profile-edit', ['pseudo' => $user->pseudo]) }}" method="POST">
                    @csrf
                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                            <input type="text" name="name" id="name" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-focus focus:border-primary-main block w-full p-2.5" placeholder="{{$user->name}}">
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button type="submit" class="text-primary-main inline-flex items-center border border-primary-main focus:ring-4 focus:outline-none focus:ring-primary-focus font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 mr-4"><path fill="currentColor" d="M370.3 160H320c-17.7 0-32 14.3-32 32s14.3 32 32 32H448c17.7 0 32-14.3 32-32V64c0-17.7-14.3-32-32-32s-32 14.3-32 32v51.2L398.4 97.6c-87.5-87.5-229.3-87.5-316.8 0s-87.5 229.3 0 316.8s229.3 87.5 316.8 0c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0c-62.5 62.5-163.8 62.5-226.3 0s-62.5-163.8 0-226.3s163.8-62.5 226.3 0L370.3 160z"/></svg>                                    Modifier
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="updateSurname" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                <!-- Modal header -->
                <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Modifier le nom
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="updateSurname">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="{{ route('admin.profile-edit', ['pseudo' => $user->pseudo]) }}" method="POST">
                    @csrf
                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                        <div>
                            <label for="surname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                            <input type="text" name="surname" id="surname" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-focus focus:border-primary-main block w-full p-2.5" placeholder="{{$user->surname}}">
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button type="submit" class="text-primary-main inline-flex items-center border border-primary-main focus:ring-4 focus:outline-none focus:ring-primary-focus font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 mr-4"><path fill="currentColor" d="M370.3 160H320c-17.7 0-32 14.3-32 32s14.3 32 32 32H448c17.7 0 32-14.3 32-32V64c0-17.7-14.3-32-32-32s-32 14.3-32 32v51.2L398.4 97.6c-87.5-87.5-229.3-87.5-316.8 0s-87.5 229.3 0 316.8s229.3 87.5 316.8 0c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0c-62.5 62.5-163.8 62.5-226.3 0s-62.5-163.8 0-226.3s163.8-62.5 226.3 0L370.3 160z"/></svg>                                    Modifier
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="updatePseudo" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                <!-- Modal header -->
                <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Modifier le pseudo
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="updatePseudo">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="{{ route('admin.profile-edit', ['pseudo' => $user->pseudo]) }}" method="POST">
                    @csrf
                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                        <div>
                            <label for="pseudo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                            <input type="text" name="pseudo" id="pseudo" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-focus focus:border-primary-main block w-full p-2.5" placeholder="{{$user->pseudo}}">
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button type="submit" class="text-primary-main inline-flex items-center border border-primary-main focus:ring-4 focus:outline-none focus:ring-primary-focus font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 mr-4"><path fill="currentColor" d="M370.3 160H320c-17.7 0-32 14.3-32 32s14.3 32 32 32H448c17.7 0 32-14.3 32-32V64c0-17.7-14.3-32-32-32s-32 14.3-32 32v51.2L398.4 97.6c-87.5-87.5-229.3-87.5-316.8 0s-87.5 229.3 0 316.8s229.3 87.5 316.8 0c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0c-62.5 62.5-163.8 62.5-226.3 0s-62.5-163.8 0-226.3s163.8-62.5 226.3 0L370.3 160z"/></svg>                                    Modifier
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="updateEmail" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                <!-- Modal header -->
                <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Modifier l'adress mail
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="updateEmail">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="{{ route('admin.profile-edit', ['pseudo' => $user->pseudo]) }}" method="POST">
                    @csrf
                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                            <input type="text" name="email" id="email" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-focus focus:border-primary-main block w-full p-2.5" placeholder="{{$user->email}}">
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button type="submit" class="text-primary-main inline-flex items-center border border-primary-main focus:ring-4 focus:outline-none focus:ring-primary-focus font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 mr-4"><path fill="currentColor" d="M370.3 160H320c-17.7 0-32 14.3-32 32s14.3 32 32 32H448c17.7 0 32-14.3 32-32V64c0-17.7-14.3-32-32-32s-32 14.3-32 32v51.2L398.4 97.6c-87.5-87.5-229.3-87.5-316.8 0s-87.5 229.3 0 316.8s229.3 87.5 316.8 0c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0c-62.5 62.5-163.8 62.5-226.3 0s-62.5-163.8 0-226.3s163.8-62.5 226.3 0L370.3 160z"/></svg>                                    Modifier
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="updatePhone" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                <!-- Modal header -->
                <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Modifier le numéro de téléphone
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="updatePhone">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="{{ route('admin.profile-edit', ['pseudo' => $user->pseudo]) }}" method="POST">
                    @csrf
                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                        <div>
                            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                            <input type="text" name="phone" id="phone" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-focus focus:border-primary-main block w-full p-2.5" placeholder="{{$user->phone}}">
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button type="submit" class="text-primary-main inline-flex items-center border border-primary-main focus:ring-4 focus:outline-none focus:ring-primary-focus font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 mr-4"><path fill="currentColor" d="M370.3 160H320c-17.7 0-32 14.3-32 32s14.3 32 32 32H448c17.7 0 32-14.3 32-32V64c0-17.7-14.3-32-32-32s-32 14.3-32 32v51.2L398.4 97.6c-87.5-87.5-229.3-87.5-316.8 0s-87.5 229.3 0 316.8s229.3 87.5 316.8 0c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0c-62.5 62.5-163.8 62.5-226.3 0s-62.5-163.8 0-226.3s163.8-62.5 226.3 0L370.3 160z"/></svg>                                    Modifier
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="updateAdress" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                <!-- Modal header -->
                <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Modifier l'adresse postale
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="updateAdress">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="{{ route('admin.profile-edit', ['pseudo' => $user->pseudo]) }}" method="POST">
                    @csrf
                    <div class="grid gap-4 mb-4">
                        <div>
                            <label for="adress" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                            <input type="text" name="adress" id="adress" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-focus focus:border-primary-main block w-full p-2.5" placeholder="{{$user->adress}}">
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button type="submit" class="text-primary-main inline-flex items-center border border-primary-main focus:ring-4 focus:outline-none focus:ring-primary-focus font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 mr-4"><path fill="currentColor" d="M370.3 160H320c-17.7 0-32 14.3-32 32s14.3 32 32 32H448c17.7 0 32-14.3 32-32V64c0-17.7-14.3-32-32-32s-32 14.3-32 32v51.2L398.4 97.6c-87.5-87.5-229.3-87.5-316.8 0s-87.5 229.3 0 316.8s229.3 87.5 316.8 0c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0c-62.5 62.5-163.8 62.5-226.3 0s-62.5-163.8 0-226.3s163.8-62.5 226.3 0L370.3 160z"/></svg>                                    Modifier
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="updateCity" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                <!-- Modal header -->
                <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Modifier la ville et le code postale
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="updateCity">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="{{ route('admin.profile-edit', ['pseudo' => $user->pseudo]) }}" method="POST">
                    @csrf
                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                        <div>
                            <label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ville</label>
                            <input type="text" name="city" id="city" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-focus focus:border-primary-main block w-full p-2.5" placeholder="{{$user->city}}">
                        </div>
                        <div>
                            <label for="zip" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Code postale</label>
                            <input type="text" name="zip" id="zip" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-focus focus:border-primary-main block w-full p-2.5" placeholder="{{$user->zip}}">
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button type="submit" class="text-primary-main inline-flex items-center border border-primary-main focus:ring-4 focus:outline-none focus:ring-primary-focus font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 mr-4"><path fill="currentColor" d="M370.3 160H320c-17.7 0-32 14.3-32 32s14.3 32 32 32H448c17.7 0 32-14.3 32-32V64c0-17.7-14.3-32-32-32s-32 14.3-32 32v51.2L398.4 97.6c-87.5-87.5-229.3-87.5-316.8 0s-87.5 229.3 0 316.8s229.3 87.5 316.8 0c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0c-62.5 62.5-163.8 62.5-226.3 0s-62.5-163.8 0-226.3s163.8-62.5 226.3 0L370.3 160z"/></svg>                                    Modifier
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection