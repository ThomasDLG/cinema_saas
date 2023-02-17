@extends('admin.layouts.dashboard-admin')
@section('title')
    Preférences - Profile de {{$user->name}}
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
                    <div class="group flex flex-wrap py-2 px-4 {{ Request::path() == 'dashboard/admin/profile/preferences/'.$user->pseudo  ? 'bg-white drop-shadow-lg rounded-md' : '' }}">
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
            Preférences
        </h2>
    </div>
    <div class="group flex justify-start mt-8 pb-8 border-b border-b-gray-100">
        <div class="w-1/4">
            <h4 class="font-bold text-base">Newsletter</h4>
        </div>
        <div class="w-3/4">
            <input {{($user->newsletter == NULL || $user->newsletter == false) ? '' : 'checked'}} id="offers" name="offers" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-primary-border focus:ring-primary-border m-2">
        </div>
    </div>
    <div class="group flex justify-start mt-8 pb-8 border-b border-b-gray-100">
        <div class="w-1/4">
            <h4 class="font-bold text-base">Modifier le mot de passe</h4>
        </div>
        <div class="w-3/4">
            @include('profile.partials.update-password-form')
        </div>
    </div>
    <div class="group flex justify-start mt-8 pb-8 border-b border-b-gray-100">
        <div class="w-1/4">
            <h4 class="font-bold text-base">Supprimer le compte</h4>
        </div>
        <div class="w-3/4">
            @include('profile.partials.delete-user-form')
        </div>
    </div>
@endsection