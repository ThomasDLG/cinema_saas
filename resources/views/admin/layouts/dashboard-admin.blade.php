<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex flex-row">
        @include('admin.inc.navbar')
    </div>
    <div class="flex flex-row">
        @include('admin.inc.sidebar')
        <div class="m-4 w-full">
            <x-breadcrumb :links="$links"></x-breadcrumb>
            @yield('content')
        </div>
    </div>
    <div class="">
        @include('admin.inc.footer')
    </div>

</body>
    @vite('resources/js/app.js')
    @vite('node_modules/flowbite/dist/flowbite.min.js')
</html>