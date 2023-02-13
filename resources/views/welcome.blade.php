@extends('layouts.navbar')
@section('title')
    L'étoile
@endsection
@section('content')
<section id="hero" class="bg-white">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">{{ $banner[0]['title'] }}</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">{{ $banner[0]['description'] }}</p>
            <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-4 mr-3 rotate-[-45deg]"><path d="M64 64C28.7 64 0 92.7 0 128v64c0 8.8 7.4 15.7 15.7 18.6C34.5 217.1 48 235 48 256s-13.5 38.9-32.3 45.4C7.4 304.3 0 311.2 0 320v64c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V320c0-8.8-7.4-15.7-15.7-18.6C541.5 294.9 528 277 528 256s13.5-38.9 32.3-45.4c8.3-2.9 15.7-9.8 15.7-18.6V128c0-35.3-28.7-64-64-64H64zm64 112l0 160c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16V176c0-8.8-7.2-16-16-16H144c-8.8 0-16 7.2-16 16zM96 160c0-17.7 14.3-32 32-32H448c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32H128c-17.7 0-32-14.3-32-32V160z"/></svg>
                Réserver maintenant
            </a> 
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex justify-end">
            <img class="w-[250px]" src="/storage/img/banner.webp" alt="mockup">
        </div>
    </div>
</section>
<section id="mvoies" class="bg-gray-900">
    <div class="container mx-auto">
        <div class="relative w-full flex gap-6 snap-x snap-mandatory overflow-x-auto py-12">
            <?php foreach ($movies as $movie) : ?>
                <div class="snap-start w-36 h-auto shrink-0">
                    <img class="rounded-md" style="width: 150px; height: 200px;" src="https://image.tmdb.org/t/p/w500{{$movie->poster}}"/>
                </div>
            <?php endforeach; ?>
          </div>
    </div>
</section>
@endsection
</html>
