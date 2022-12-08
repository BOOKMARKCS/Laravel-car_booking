<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-200">
    <div id="app">

        <div class="">

            <!-- component -->

            <body class="bg-blue-500">
                {{-- <nav class="relative px-4 py-4 flex justify-between items-center bg-white">
                    <a href="https://flowbite.com" class="flex items-center">
                        <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="" />
                        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Allowed
                        </span>
                    </a>



                    <div class="lg:hidden">
                        <button class="navbar-burger flex items-center text-blue-600 p-3">
                            <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Mobile menu</title>
                                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                            </svg>
                        </button>
                    </div>
                    @guest
                    @else
                    <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:items-center lg:w-auto lg:space-x-6">
                        <li>
                            <a class="text-sm  hover:font-bold {{ 'home' == request()->path()? 'text-blue-600 font-bold':'text-gray-400 hover:text-gray-500 '}}" href="{{route('home')}}">Home</a></li>
                <li class="text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </svg>
                </li>
                <li><a class="text-sm  hover:font-bold {{ 'booking' == request()->path()?'text-blue-600  font-bold':'text-gray-400 hover:text-gray-500 '}}" href="{{route('booking')}}">Booking</a></li>
                <li class="text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </svg>
                </li>
                <li><a class="text-sm   hover:font-bold {{'status' == request()->path()?'text-blue-600 font-bold' : 'text-gray-400 hover:text-gray-500 '}}" href="{{route('status')}}">Satus</a></li>
                <li class="text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </svg>
                </li>
                <li><a class="text-sm  hover:font-bold {{'history' == request()->path()?'text-blue-600 fonst-bold':'text-gray-400 hover:text-gray-500 '}}" href="{{route('history')}}">History</a></li>
                <li class="text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </svg>
                </li>
                <li><a class="text-sm hover:font-bold {{'contact' == request()->path()?'text-blue-600 font-bold':'text-gray-400 hover:text-gray-500 ' }}" href="{{route('contact')}}">Contact</a></li>
                </ul>

                @endguest

                <!-- Profile dropdown -->

                <div class="relative ">
                    <div class="nav-item dropdown ">
                        <a id="navbarDropdown" class="flex item-center" href="#" role="button" data-bs-toggle="dropdown">
                            <img class="w-11 h-11 mr-3 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            <div class="hidden md:block mr-3 ">
                                <div class="max-w-[7rem] truncate font-bold">Charlize Theron</div>
                                <div class="text-xs text-slate-400">Faculty of Science</div>
                            </div>
                        </a>

                        <div class="dropdown-menu w-56  mt-3 -mx-11">

                            <ul class="dropdown-content ">
                                <li>
                                    <a class="dropdown-item cursor-pointer flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide w-4 h-4 mr-2">
                                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        Profile
                                    </a>
                                </li>

                                <li><a class="dropdown-item cursor-pointer flex items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide w-4 h-4 mr-2">
                                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                            <path d="M7 11V7a5 5 0 0110 0v4"></path>
                                        </svg> Reset Password </a></li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a href="{{route('logout')}}" class="dropdown-item cursor-pointer flex items-center" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide w-4 h-4 mr-2">
                                            <rect x="1" y="5" width="22" height="14" rx="7" ry="7"></rect>
                                            <circle cx="16" cy="12" r="3"></circle>
                                        </svg> Logout </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>


                    </div>
                </div>

                </nav>
                <div class="navbar-menu relative z-50 hidden">
                    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
                    <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
                        <div class="flex items-center mb-8">

                            <a href="https://flowbite.com" class="mr-auto text-3xl font-bold leading-none">
                                <div class="flex items-center">
                                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="" />
                                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Allowed
                                    </span>
                                </div>
                            </a>

                            <button class="navbar-close">
                                <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                        <div>
                            @guest
                            @else
                            <ul>
                                <li class="mb-1">
                                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Home</a>
                                </li>
                                <li class="mb-1">
                                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Booking</a>
                                </li>
                                <li class="mb-1">
                                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Status</a>
                                </li>
                                <li class="mb-1">
                                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">History</a>
                                </li>
                                <li class="mb-1">
                                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Contact</a>
                                </li>
                            </ul>
                            @endguest
                        </div>
                        <div class="mt-auto">
                            <div class="pt-6">
                                @if (Route::has('login'))
                                <a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold bg-gray-50 hover:bg-gray-100 rounded-xl" href="{{ route('login')}}">Sign in</a>
                                @endif
                                @if (Route::has('register'))
                                <a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-blue-600 hover:bg-blue-700  rounded-xl" href="{{ route('register')}}">Sign Up</a>
                                @endif
                            </div>
                            <p class="my-4 text-xs text-center text-gray-400">
                                <span>Copyright © 2023</span>
                            </p>
                        </div>
                    </nav>
                </div> --}}
                <nav class="bg-sky-500">
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div class="flex h-16 items-center justify-between">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                                </div>
                                <div class="hidden md:block">
                                    <div class="ml-10 flex items-baseline space-x-4">
                                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                        <a href="{{route('home')}}" class=" {{ 'home' == request()->path()? 'bg-blue-700 text-white font-bold ':''}}  text-gray-300 hover:bg-blue-600 hover:text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Home</a>

                                        <a href="{{route('booking')}}" class="{{ 'booking' == request()->path()? 'bg-blue-700 text-white font-bold ':''}} text-gray-300 hover:bg-blue-600 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Booking</a>

                                        <a href="{{route('status')}}" class="{{ 'status' == request()->path()? 'bg-blue-700 text-white font-bold ':''}}  text-gray-300 hover:bg-blue-600 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Status</a>

                                        <a href="{{route('history')}}" class="{{ 'history' == request()->path()? 'bg-blue-700 text-white font-bold ':''}}  text-gray-300 hover:bg-blue-600 hover:text-white px-3 py-2 rounded-md text-sm font-medium">History</a>

                                        <a href="{{route('contact')}}" class="{{ 'contact' == request()->path()? 'bg-blue-700 text-white font-bold ':''}}  text-gray-300 hover:bg-blue-600 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden md:block">
                                <div class="ml-4 flex items-center md:ml-6">
                                    <button type="button" class="rounded-full bg-sky-600 p-1 text-gray-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-sky-700">
                                        <span class="sr-only">View notifications</span>
                                        <!-- Heroicon name: outline/bell -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                                        </svg>
                                    </button>

                                    <!-- Profile dropdown -->
                                    <div class="relative ml-3">
                                        <div>
                                            <button type="button" class="flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                                <span class="sr-only">Open user menu</span>
                                                <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                            </button>
                                        </div>

                                        <!--
                Dropdown menu, show/hide based on menu state.

                Entering: "transition ease-out duration-100"
                  From: "transform opacity-0 scale-95"
                  To: "transform opacity-100 scale-100"
                Leaving: "transition ease-in duration-75"
                  From: "transform opacity-100 scale-100"
                  To: "transform opacity-0 scale-95"
              -->
                                        <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                                            <!-- Active: "bg-gray-100", Not Active: "" -->
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>

                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>

                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="-mr-2 flex md:hidden">
                                <!-- Mobile menu button -->
                                <button type="button" class="inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                                    <span class="sr-only">Open main menu</span>
                                    <!--
              Heroicon name: outline/bars-3

              Menu open: "hidden", Menu closed: "block"
            -->
                                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                    </svg>
                                    <!--
              Heroicon name: outline/x-mark

              Menu open: "block", Menu closed: "hidden"
            -->
                                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile menu, show/hide based on menu state. -->
                    <div class="md:hidden" id="mobile-menu">
                        <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Home</a>

                            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Booking</a>

                            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Status</a>

                            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">History</a>

                            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Contact</a>
                        </div>
                        <div class="border-t border-gray-700 pt-4 pb-3">
                            <div class="flex items-center px-5">
                                <div class="flex-shrink-0">
                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                </div>
                                <div class="ml-3">
                                    <div class="text-base font-medium leading-none text-white">Tom Cook</div>
                                    <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
                                </div>
                                <button type="button" class="ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                                    <span class="sr-only">View notifications</span>
                                    <!-- Heroicon name: outline/bell -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                                    </svg>
                                </button>
                            </div>
                            <div class="mt-3 space-y-1 px-2">
                                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your Profile</a>

                                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>

                                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign out</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </body>

            <script>
                // Burger menus
                document.addEventListener('DOMContentLoaded', function() {
                    // open
                    const burger = document.querySelectorAll('.navbar-burger');
                    const menu = document.querySelectorAll('.navbar-menu');

                    if (burger.length && menu.length) {
                        for (var i = 0; i < burger.length; i++) {
                            burger[i].addEventListener('click', function() {
                                for (var j = 0; j < menu.length; j++) {
                                    menu[j].classList.toggle('hidden');
                                }
                            });
                        }
                    }

                    // close
                    const close = document.querySelectorAll('.navbar-close');
                    const backdrop = document.querySelectorAll('.navbar-backdrop');

                    if (close.length) {
                        for (var i = 0; i < close.length; i++) {
                            close[i].addEventListener('click', function() {
                                for (var j = 0; j < menu.length; j++) {
                                    menu[j].classList.toggle('hidden');
                                }
                            });
                        }
                    }

                    if (backdrop.length) {
                        for (var i = 0; i < backdrop.length; i++) {
                            backdrop[i].addEventListener('click', function() {
                                for (var j = 0; j < menu.length; j++) {
                                    menu[j].classList.toggle('hidden');
                                }
                            });
                        }
                    }
                });

            </script>

        </div>

    </div>

    <div class="items-center justify-center">
        <div class="col-start-2 col-end-9">

            <main>
                <!-- Replace with your content -->
                <div class="py-6">
                    <div class="">
                        @yield('content') </div>
                </div> <!-- /End replace -->
            </main>
        </div>
    </div>
</body>


</html>
