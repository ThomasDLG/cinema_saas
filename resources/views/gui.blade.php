<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GUI</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container mx-auto my-6 text-4xl">
        <h2 class="font-sans text-center">GUI - Cinéma</h2>
        <div class="flex flex-row">
            <div class="basis-1/4">
                <nav class="position-sticky">
                    <ul class="text-sm my-6">
                        <li><a href="#colors">Colors</a></li>
                        <li><a href="#fonts">Fonts</a></li>
                        <li><a href="#buttons">Buttons</a></li>
                        <li><a href="#inputs">Inputs</a></li>
                        <li><a href="#carousel">Movies carousel</a></li>
                        <li><a href="#dropdown">Dropdown</a></li>
                        <li><a href="#products">Products thumbnails</a></li>
                    </ul>
                </nav>
            </div>
            <div class="basis-3/4">
                {{-- Colors --}}
                <h3 id="colors" class="text-2xl my-6">Colors</h3>
                <div class="flex flex-row">
                    <div class="basis-1/6">
                        <p class="text-sm text-center text-gray-50 p-5 m-2 bg-primary-hover">Primary hover</p>
                        <p class="text-sm text-center text-gray-50 p-5 m-2 bg-primary-main">Primary main</p>
                        <p class="text-sm text-center text-black p-5 m-2 bg-primary-border">Primary border</p>
                        <p class="text-sm text-center text-black p-5 m-2 bg-primary-focus">Primary focus</p>
                        <p class="text-sm text-center text-black p-5 m-2 bg-primary-background">Primary bg</p>
                    </div>
                    <div class="basis-1/6">
                        <p class="text-sm text-center text-gray-50 p-5 m-2 bg-secondary-hover">Secondary hover</p>
                        <p class="text-sm text-center text-gray-50 p-5 m-2 bg-secondary-main">Secondary main</p>
                        <p class="text-sm text-center text-black p-5 m-2 bg-secondary-border">Secondary border</p>
                        <p class="text-sm text-center text-black p-5 m-2 bg-secondary-focus">Secondary focus</p>
                        <p class="text-sm text-center text-black p-5 m-2 bg-secondary-background">Secondary bg</p>
                    </div>
                    <div class="basis-1/6">
                        <p class="text-sm text-center text-gray-50 p-5 m-2 bg-success-hover">Success hover</p>
                        <p class="text-sm text-center text-gray-50 p-5 m-2 bg-success-main">Success main</p>
                        <p class="text-sm text-center text-black p-5 m-2 bg-success-border">Success border</p>
                        <p class="text-sm text-center text-black p-5 m-2 bg-success-focus">Success focus</p>
                        <p class="text-sm text-center text-black p-5 m-2 bg-success-background">Success bg</p>
                    </div>
                    <div class="basis-1/6">
                        <p class="text-sm text-center text-gray-50 p-5 m-2 bg-warning-hover">Warning hover</p>
                        <p class="text-sm text-center text-gray-50 p-5 m-2 bg-warning-main">Warning main</p>
                        <p class="text-sm text-center text-black p-5 m-2 bg-warning-border">Warning border</p>
                        <p class="text-sm text-center text-black p-5 m-2 bg-warning-focus">Warning focus</p>
                        <p class="text-sm text-center text-black p-5 m-2 bg-warning-background">Warning bg</p>
                    </div>
                    <div class="basis-1/6">
                        <p class="text-sm text-center text-gray-50 p-5 m-2 bg-danger-hover">Danger hover</p>
                        <p class="text-sm text-center text-gray-50 p-5 m-2 bg-danger-main">Danger main</p>
                        <p class="text-sm text-center text-black p-5 m-2 bg-danger-border">Danger border</p>
                        <p class="text-sm text-center text-black p-5 m-2 bg-danger-focus">Danger focus</p>
                        <p class="text-sm text-center text-black p-5 m-2 bg-danger-background">Danger bg</p>
                    </div>
                    <div class="basis-1/6">
                        <p class="text-sm text-center text-gray-50 p-5 m-2 bg-info-hover">Info hover</p>
                        <p class="text-sm text-center text-gray-50 p-5 m-2 bg-info-main">Info main</p>
                        <p class="text-sm text-center text-black p-5 m-2 bg-info-border">Info border</p>
                        <p class="text-sm text-center text-black p-5 m-2 bg-info-focus">Info focus</p>
                        <p class="text-sm text-center text-black p-5 m-2 bg-info-background">Info bg</p>
                    </div>
                </div>
                <hr class="bg-gray-200 my-6">
                {{-- Fonts --}}
                <h3 id="fonts" class="text-2xl my-6">Fonts</h3>
                <h1 class="text-5xl">h1. Heading</h1>
                <h2 class="text-4xl">h2. Heading</h2>
                <h3 class="text-2xl">h3. Heading</h3>
                <h4 class="text-xl">h4. Heading</h4>
                <h5 class="text-lg">h5. Heading</h5>
                <h6 class="text-base">h6. Heading</h6>
                <hr class="bg-gray-200 my-6">
                {{-- Buttons --}}
                <h3 id="buttons" class="text-2xl my-6">Buttons</h3>
                <a href="" class="btn-primary">Primary</a>
                <a href="" class="btn-secondary">Secondary</a>
                <a href="" class="btn-light">Light</a>
                <a href="" class="btn-dark">Dark</a>
                <hr class="bg-gray-200 my-6">
                {{-- Inputs --}}
                <h3 id="inputs" class="text-2xl my-6">Inputs</h3>
                <p class="text-base text-gray-400 my-4">Input type text</p>
                <div class="col-span-6 sm:col-span-3">
                    <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                    <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="input-form">
                </div>
                <p class="text-base text-gray-400 my-4">Textarea</p>
                <div class="col-span-6 sm:col-span-3">
                    <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                    <textarea class="
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-primary-border focus:ring-primary-border focus:outline-none"
                    name="message" id="message" cols="30" rows="10"></textarea>
                </div>
                <p class="text-base text-gray-400 my-4">Search</p>
                <div class="relative rounded-md shadow-sm">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center">
                    <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
                    </svg>
                    </div>
                    <input type="text" class="input-form pl-10" placeholder="Rechercher un film" onChange={handleInputChange}/>
                </div>
                <p class="text-base text-gray-400 my-4">Input type checkbox</p>
                <div class="flex h-5 items-center">
                    <input id="offers" name="offers" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-primary-border focus:ring-primary-border m-2">
                    <input id="offers" name="offers" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-primary-border focus:ring-primary-border m-2">
                    <input id="offers" name="offers" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-primary-border focus:ring-primary-border m-2">
                </div>
                <p class="text-base text-gray-400 my-4">Input type radio</p>
                <div class="flex items-center">
                    <input id="push-everything" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-primary-border focus:ring-primary-border">
                    <label for="push-everything" class="ml-3 block text-sm font-medium text-gray-700">Everything</label>
                </div>
                <div class="flex items-center">
                    <input id="push-everything" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-primary-border focus:ring-primary-border">
                    <label for="push-everything" class="ml-3 block text-sm font-medium text-gray-700">Everything</label>
                </div>
                <div class="flex items-center">
                    <input id="push-everything" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-primary-border focus:ring-primary-border">
                    <label for="push-everything" class="ml-3 block text-sm font-medium text-gray-700">Everything</label>
                </div>
                <p class="text-base text-gray-400 my-4">Input type toggle</p>
                <label class="inline-flex relative items-center cursor-pointer">
                    <input type="checkbox" value="" class="sr-only peer">
                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-main"></div>
                    <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Toggle me</span>
                </label>
                <hr class="bg-gray-200 my-6">
                {{-- Movie carousel --}}
                <h3 id="carousel" class="text-2xl my-6">Movies carousel</h3>
                <div class="relative w-full flex gap-6 snap-x snap-mandatory overflow-x-auto pb-14">
                    <div class="snap-start w-36 h-auto shrink-0 first:pl-8 last:pr-8">
                      <img class="w-full" src="https://images.unsplash.com/photo-1604999565976-8913ad2ddb7c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=160&q=80" />
                    </div>
                    <div class="snap-start w-36 h-auto shrink-0 first:pl-8 last:pr-8 ...">
                      <img class="w-full" src="https://images.unsplash.com/photo-1540206351-d6465b3ac5c1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=160&q=80" />
                    </div>
                    <div class="snap-start w-36 h-auto shrink-0 first:pl-8 last:pr-8 ...">
                      <img class="w-full" src="https://images.unsplash.com/photo-1622890806166-111d7f6c7c97?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=160&q=80" />
                    </div>
                    <div class="snap-start w-36 h-auto shrink-0 first:pl-8 last:pr-8 ...">
                      <img class="w-full" src="https://images.unsplash.com/photo-1590523277543-a94d2e4eb00b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=160&q=80" />
                    </div>
                    <div class="snap-start w-36 h-auto shrink-0 first:pl-8 last:pr-8 ...">
                      <img class="w-full" src="https://images.unsplash.com/photo-1575424909138-46b05e5919ec?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=160&q=80" />
                    </div>
                  </div>
                <hr class="bg-gray-200 my-6">
              
            </div>
        </div>
    </div>
</body>
@vite('resources/js/app.js')
@vite('node_modules/flowbite/dist/datepicker.js')
</html>