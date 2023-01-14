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
                <div class="liveSearch"></div>
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
                    <div class="snap-center shrink-0 first:pl-8 last:pr-8">
                      <img src="https://images.unsplash.com/photo-1604999565976-8913ad2ddb7c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=160&q=80" />
                    </div>
                    <div class="snap-center shrink-0 first:pl-8 last:pr-8 ...">
                      <img src="https://images.unsplash.com/photo-1540206351-d6465b3ac5c1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=160&q=80" />
                    </div>
                    <div class="snap-center shrink-0 first:pl-8 last:pr-8 ...">
                      <img src="https://images.unsplash.com/photo-1622890806166-111d7f6c7c97?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=160&q=80" />
                    </div>
                    <div class="snap-center shrink-0 first:pl-8 last:pr-8 ...">
                      <img src="https://images.unsplash.com/photo-1590523277543-a94d2e4eb00b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=160&q=80" />
                    </div>
                    <div class="snap-center shrink-0 first:pl-8 last:pr-8 ...">
                      <img src="https://images.unsplash.com/photo-1575424909138-46b05e5919ec?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=160&q=80" />
                    </div>
                  </div>
                <hr class="bg-gray-200 my-6">
                {{-- Dropdown --}}
                <h3 id="dropdown" class="text-2xl my-6">Dropdown</h3>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item bg-white border border-gray-200">
                      <h2 class="accordion-header mb-0" id="headingOne">
                        <button class="button-accordion" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                          aria-controls="collapseOne">
                          Accordion Item #1
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body py-4 px-5 text-base">
                          <strong>This is the first item's accordion body.</strong> It is shown by default,
                          until the collapse plugin adds the appropriate classes that we use to style each
                          element. These classes control the overall appearance, as well as the showing and
                          hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                          our default variables. It's also worth noting that just about any HTML can go within
                          the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item bg-white border border-gray-200">
                      <h2 class="accordion-header mb-0" id="headingTwo">
                        <button class="button-accordion" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                          aria-controls="collapseTwo">
                          Accordion Item #2
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body py-4 px-5 text-base">
                          <strong>This is the second item's accordion body.</strong> It is hidden by default,
                          until the collapse plugin adds the appropriate classes that we use to style each
                          element. These classes control the overall appearance, as well as the showing and
                          hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                          our default variables. It's also worth noting that just about any HTML can go within
                          the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item bg-white border border-gray-200">
                      <h2 class="accordion-header mb-0" id="headingThree">
                        <button class="button-accordion" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                          aria-controls="collapseThree">
                          Accordion Item #3
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body py-4 px-5 text-base">
                          <strong>This is the third item's accordion body.</strong> It is hidden by default,
                          until the collapse plugin adds the appropriate classes that we use to style each
                          element. These classes control the overall appearance, as well as the showing and
                          hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                          our default variables. It's also worth noting that just about any HTML can go within
                          the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>
                  </div>
                <hr class="bg-gray-200 my-6">
                {{-- Products thumbnails --}}
                <h3 id="products" class="text-2xl my-6">Products thumbnails</h3>
                <div class="text-center relative w-24 transition ease-in-out">
                    <button class="w-4 absolute top-2 right-2 z-[100]" type="button" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Infos about product"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-144c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/></svg></button>
                    <img src="https://images.unsplash.com/photo-1587132129911-80e544e7e7b9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=883&q=80" alt="" class="rounded-lg w-100 mx-auto mb-4">
                    <p class="text-base strong">Popcorn</p>
                    <span class="text-sm">4,99 €</span>
                    <div class="flex justify-between text-base">
                        <input type="hidden" id="" value="" name="productId">
                        <input type="hidden" class="productCount" value="0" name="productCount">
                        <button class="productsMinus rounded-full bg-gray-200 border-gray-500 p-2 transition ease-in-out hover:scale-125"><svg class="w-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"/></svg></button>
                        <span class="productsCount">0</span>
                        <button class="productsPlus rounded-full bg-gray-200 border-gray-500 p-2 transition ease-in-out hover:scale-125"><svg class="w-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg></button>
                    </div>
                </div>
                <div class="text-center relative w-24 transition ease-in-out">
                    <button class="w-4 absolute top-2 right-2 z-[100]" type="button" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Infos about product"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-144c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/></svg></button>
                    <img src="https://images.unsplash.com/photo-1587132129911-80e544e7e7b9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=883&q=80" alt="" class="rounded-lg w-100 mx-auto mb-4">
                    <p class="text-base strong">Popcorn</p>
                    <span class="text-sm">4,99 €</span>
                    <div class="flex justify-between text-base">
                        <input type="hidden" id="" value="" name="productId">
                        <input type="hidden" class="productCount" value="0" name="productCount">
                        <button class="productsMinus rounded-full bg-gray-200 border-gray-500 p-2 transition ease-in-out hover:scale-125"><svg class="w-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"/></svg></button>
                        <span class="productsCount">0</span>
                        <button class="productsPlus rounded-full bg-gray-200 border-gray-500 p-2 transition ease-in-out hover:scale-125"><svg class="w-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg></button>
                    </div>
                </div>
                <div class="text-center relative w-24 transition ease-in-out">
                    <button class="w-4 absolute top-2 right-2 z-[100]" type="button" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Infos about product"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-144c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/></svg></button>
                    <img src="https://images.unsplash.com/photo-1587132129911-80e544e7e7b9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=883&q=80" alt="" class="rounded-lg w-100 mx-auto mb-4">
                    <p class="text-base strong">Popcorn</p>
                    <span class="text-sm">4,99 €</span>
                    <div class="flex justify-between text-base">
                        <input type="hidden" id="" value="" name="productId">
                        <input type="hidden" class="productCount" value="0" name="productCount">
                        <button class="productsMinus rounded-full bg-gray-200 border-gray-500 p-2 transition ease-in-out hover:scale-125"><svg class="w-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"/></svg></button>
                        <span class="productsCount">0</span>
                        <button class="productsPlus rounded-full bg-gray-200 border-gray-500 p-2 transition ease-in-out hover:scale-125"><svg class="w-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg></button>
                    </div>
                </div>
                
                <hr class="bg-gray-200 my-6">
            </div>
        </div>
    </div>
</body>
@vite('resources/js/app.js')
</html>