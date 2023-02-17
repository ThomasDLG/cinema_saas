<header class="w-full">
    <nav class="bg-white border-b-2 border-primary-main px-4 lg:px-6 py-2.5 ">
        <div class="flex flex-wrap justify-between items-center">
            <div class="flex justify-start items-center">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap">L'étoile</span>
                </a>
                </div>
            <div class="flex items-center lg:order-2">
                <a href="{{ route('welcome') }}" class="sm:inline-flex items-center justify-center text-gray-900 font-medium rounded-lg text-xs px-3 py-1.5 mr-2 focus:outline-none">
                    Aller sur le site
                </a>
                <button type="button" class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                    <span class="sr-only">Open user menu</span>
                    <span>{!! $avatar = Avatar::create(Auth::user()->name . Auth::user()->surname)->toSvg()!!}</span>
                </button>
                <!-- Dropdown menu -->
                <div class="hidden z-50 my-4 w-56 text-base list-none bg-white rounded divide-y divide-gray-100 shadow" id="dropdown">
                    <div class="py-3 px-4">
                        <span class="block text-sm font-semibold text-gray-900">{{Auth::user()->name . ' ' . Auth::user()->surname}}</span>
                        <span class="block text-sm font-light text-gray-500 truncate">{{Auth::user()->email}}</span>
                    </div>
                    <ul class="py-1 font-light text-gray-500" aria-labelledby="dropdown">
                        <li>
                            <a href="{{route('admin.profile', ['pseudo'=>$pseudo])}}" class="block py-2 px-4 text-sm hover:bg-gray-100">Mon profil</a>
                        </li>
                    </ul>
                    <ul class="py-1 font-light text-gray-500" aria-labelledby="dropdown">
                        <li>
                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                <a href="{{route('logout')}}" onclick="event.preventDefault();this.closest('form').submit();" class="flex justify-between items-center py-2 px-4 text-sm hover:bg-gray-100">
                                    <span class="flex items-center">Déconnexion</span>
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>