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
                <nav class="relative px-4 py-4 flex justify-between items-center bg-white">
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
                </div>
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
                <div class="mx-auto mt-4 py-7 sm:px-10 lg:px-8">
                    <!-- Replace with your content -->
                    <div class="px-4 py-6 sm:px-0">
                        <div class="h-96 rounded-lg border-4 border-dashed border-gray-200">
                            @yield('content') </div>
                    </div> <!-- /End replace -->
                </div>
            </main>
        </div>
    </div>
</body>


</html>
