@extends('admin.layouts.dashboard-admin')
@section('title')
    Bannière - Apparence
@endsection

@section('content')
    <div class="mt-4">
        <h2 class="text-2xl">Modifier la bannière</h2>
        <section id="hero" class="bg-white">
            <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="mr-auto place-self-center lg:col-span-7">
                    <a href="#" class="group flex relative" id="updateProductButton" data-modal-toggle="updateTitle">
                        <h1 class="max-w-2xl mb-4 p-3 rounded-md text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl group-hover:text-gray-800 group-hover:bg-gray-100">{{$banner[0]['title']}}</h1>
                    </a>
                    <a href="#" class="group flex relative" id="updateProductButton" data-modal-toggle="updateDescription">
                        <p class="max-w-2xl mb-6 p-3 rounded-md font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400 group-hover:text-gray-800 group-hover:bg-gray-100">{{$banner[0]['description']}}</p>

                    </a>
                    <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-4 mr-3 rotate-[-45deg] text-gray-800"><path d="M64 64C28.7 64 0 92.7 0 128v64c0 8.8 7.4 15.7 15.7 18.6C34.5 217.1 48 235 48 256s-13.5 38.9-32.3 45.4C7.4 304.3 0 311.2 0 320v64c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V320c0-8.8-7.4-15.7-15.7-18.6C541.5 294.9 528 277 528 256s13.5-38.9 32.3-45.4c8.3-2.9 15.7-9.8 15.7-18.6V128c0-35.3-28.7-64-64-64H64zm64 112l0 160c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16V176c0-8.8-7.2-16-16-16H144c-8.8 0-16 7.2-16 16zM96 160c0-17.7 14.3-32 32-32H448c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32H128c-17.7 0-32-14.3-32-32V160z"/></svg>
                        Réserver maintenant
                    </a>
                </div>
                <div class="hidden lg:mt-0 lg:col-span-5 lg:flex justify-end">
                    <a href="#" class="group flex relative" id="updateProductButton" data-modal-toggle="updateImage">
                        <img class="w-[250px]" src="/storage/img/banner.webp" alt="mockup">
                    </a>
                </div>
            </div>
            {{-- Modal Title --}}
            <x-modalCRUD dataToggle="updateTitle" modalTitle="Modifier le titre">
                <form action="{{ route('admin.appearance-banner-edit-title') }}" method="post">
                    @csrf
                    <div class="grid gap-4">
                        <x-input-text inputLabel="Titre" inputName="title" inputPlaceholder="{{$banner[0]['title']}}"/>
                    </div>
                    <div class="flex items-center space-x-4">
                        <x-button-submit btn="primary">
                            Modifier
                        </x-button-submit>
                    </div>
                </form>
            </x-modalCRUD>
            {{-- Modal Description --}}
            <x-modalCRUD dataToggle="updateDescription" modalTitle="Modifier la description">
                <form action="{{ route('admin.appearance-banner-edit-description') }}" method="post">
                    @csrf
                    <div class="grid gap-4">
                        <x-input-text inputLabel="Description" inputName="description" inputPlaceholder="{{$banner[0]['description']}}"/>
                    </div>
                    <div class="flex items-center space-x-4">
                        <x-button-submit btn="primary">
                            Modifier
                        </x-button-submit>
                    </div>
                </form>
            </x-modalCRUD>
            {{-- Modal Image --}}
            <x-modalCRUD dataToggle="updateImage" modalTitle="Modifier la image">
                <form action="{{ route('admin.appearance-banner-edit-image') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="grid gap-4">
                        <x-input-file inputName="image"/>
                    </div>
                    <div class="flex items-center space-x-4">
                        <x-button-submit btn="primary">
                            Modifier
                        </x-button-submit>
                    </div>
                </form>
            </x-modalCRUD>

            <div id="updateImage" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                    <!-- Modal content -->
                    <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                        <!-- Modal header -->
                        <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                Modifier l'image
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="updateImage">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form action="{{ route('admin.appearance-banner-edit-image') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="flex items-center space-x-4 mt-5">
                                <button type="submit" class="text-primary-main inline-flex items-center border border-primary-main focus:ring-4 focus:outline-none focus:ring-primary-focus font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 mr-4"><path fill="currentColor" d="M370.3 160H320c-17.7 0-32 14.3-32 32s14.3 32 32 32H448c17.7 0 32-14.3 32-32V64c0-17.7-14.3-32-32-32s-32 14.3-32 32v51.2L398.4 97.6c-87.5-87.5-229.3-87.5-316.8 0s-87.5 229.3 0 316.8s229.3 87.5 316.8 0c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0c-62.5 62.5-163.8 62.5-226.3 0s-62.5-163.8 0-226.3s163.8-62.5 226.3 0L370.3 160z"/></svg>                                    Modifier
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection