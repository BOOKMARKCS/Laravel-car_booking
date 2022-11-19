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
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
</head>

<body class="bg-slate-200">
    {{-- <div class="grid h-full grid-cols-7 grid-row-2"> --}}
    <div id="app" class="row-start-1 ">

        <div class="">
            <!-- Right Side Of Navbar -->
            <!-- Authentication Links -->
            @guest
                <nav class="bg-white border-gray-200 px-2 md:px-4 py-2.5 dark:bg-gray-900">
                    <div class="flex flex-wrap items-center justify-between mx-auto max-w-screen-2xl">
                        <a href="https://flowbite.com" class="flex items-center">
                            <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="" />
                            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Allowed
                            </span>
                        </a>
                        <div class="flex items-center md:order-2">
                            @if (Route::has('login'))
                                <a href="{{ route('login') }}"
                                    class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Login</a>
                            @endif

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Sign
                                    up</a>
                            @endif

                        </div>
                    </div>
                </nav>
            @else
                <div class="fixed h-16">
                    <nav class="fixed w-full bg-white">
                        <div class="max-w-full px-20 mx-auto sm:px-6 lg:px-8">
                            <div class="flex items-center justify-end h-16">
                                <div class="hidden md:block">
                                    <div class="flex items-center ml-4 md:ml-6">
                                        <button type="button"
                                            class="p-1 text-gray-400 bg-gray-800 rounded-full hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                                            <span class="sr-only">View notifications</span>
                                            <!-- Heroicon name: outline/bell -->
                                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                                            </svg>
                                        </button>

                                        <!-- Profile dropdown -->
                                        <div class="relative ml-5">
                                            <div class="nav-item dropdown ">
                                                <a id="navbarDropdown" class="" href="#" role="button"
                                                    data-bs-toggle="dropdown">
                                                    <span class="sr-only">Open user menu</span>
                                                    <img class="w-8 h-8 mr-10 rounded-full"
                                                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                        alt="">
                                                </a>

                                                <div class="z-10 hidden py-1 mt-2 text-center bg-white rounded-md dropdown-menu "
                                                    role="menu" aria-orientation="vertical"
                                                    aria-labelledby="navbarDropdown">
                                                    <!-- Active: "bg-gray-100", Not Active: "" -->

                                                    <a href="{{ route('logout') }}" class="block py-2 text-sm text-gray-700"
                                                        role="menuitem" tabindex="-1" id="user-menu-item-2"
                                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                        Sign out
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        class="d-none">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </nav>



                    <div id="sidebar"
                        class=" fixed flex flex-col  z-50 left-60 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 h-screen overflow-y-scroll lg:overflow-y-auto no-scrollbar w-64 lg:w-20 lg:sidebar-expanded:!w-64 2xl:!w-64 shrink-0 bg-slate-800 p-4 transition-all duration-200 ease-in-out -translate-x-64">
                        <div class="flex justify-between pr-3 mb-10 sm:px-2">
                            <button class="lg:hidden text-slate-500 hover:text-slate-400" aria-controls="sidebar"
                                aria-expanded="false">
                                <span class="sr-only">Close sidebar</span>
                                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z">

                                    </path>
                                </svg></button>
                            <a aria-current="page" class="flex active" href="/"><svg width="32" height="32"
                                    viewBox="0 0 32 32">
                                    <defs>
                                        <linearGradient x1="28.538%" y1="20.229%" x2="100%" y2="108.156%"
                                            id="logo-a">
                                            <stop stop-color="#A5B4FC" stop-opacity="0" offset="0%"></stop>
                                            <stop stop-color="#A5B4FC" offset="100%"></stop>
                                        </linearGradient>
                                        <linearGradient x1="88.638%" y1="29.267%" x2="22.42%" y2="100%"
                                            id="logo-b">
                                            <stop stop-color="#38BDF8" stop-opacity="0" offset="0%"></stop>
                                            <stop stop-color="#38BDF8" offset="100%"></stop>
                                        </linearGradient>
                                    </defs>
                                    <rect fill="#6366F1" width="32" height="32" rx="16"></rect>
                                    <path
                                        d="M18.277.16C26.035 1.267 32 7.938 32 16c0 8.837-7.163 16-16 16a15.937 15.937 0 01-10.426-3.863L18.277.161z"
                                        fill="#4F46E5"></path>
                                    <path
                                        d="M7.404 2.503l18.339 26.19A15.93 15.93 0 0116 32C7.163 32 0 24.837 0 16 0 10.327 2.952 5.344 7.404 2.503z"
                                        fill="url(#logo-a)"></path>
                                    <path
                                        d="M2.223 24.14L29.777 7.86A15.926 15.926 0 0132 16c0 8.837-7.163 16-16 16-5.864 0-10.991-3.154-13.777-7.86z"
                                        fill="url(#logo-b)"></path>
                                </svg>
                                <span
                                    class="self-center ml-6 text-xl font-bold text-white whitespace-nowrap dark:text-white">
                                    Allowed
                                </span>

                            </a>
                        </div>
                        <div class="space-y-8">
                            <div>
                                <h3 class="pl-3 text-xs font-semibold uppercase text-slate-500"><span
                                        class="hidden w-6 text-center lg:block lg:sidebar-expanded:hidden 2xl:hidden"
                                        aria-hidden="true">•••</span><span
                                        class="lg:hidden lg:sidebar-expanded:block 2xl:block">Pages</span></h3>
                                <ul class="mt-3">
                                    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 bg-slate-900">
                                        <a href="#0"
                                            class="block truncate transition duration-150 text-slate-200 hover:text-white hover:text-slate-200">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center"><svg class="w-6 h-6 shrink-0"
                                                        viewBox="0 0 24 24">
                                                        <path class="fill-current text-slate-400 !text-indigo-500"
                                                            d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z">
                                                        </path>
                                                        <path class="text-indigo-600 fill-current text-slate-600"
                                                            d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z">
                                                        </path>
                                                        <path class="text-indigo-200 fill-current text-slate-400"
                                                            d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z">
                                                        </path>
                                                    </svg><span
                                                        class="ml-3 text-sm font-medium duration-200 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100">Dashboard</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 false"><a href="{{ route('profile') }}"
                                            class="block truncate transition duration-150 text-slate-200 hover:text-white false">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center"><svg class="w-6 h-6 shrink-0"
                                                        viewBox="0 0 24 24">
                                                        <path class="fill-current text-slate-600 false"
                                                            d="M18.974 8H22a2 2 0 012 2v6h-2v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5h-2v-6a2 2 0 012-2h.974zM20 7a2 2 0 11-.001-3.999A2 2 0 0120 7zM2.974 8H6a2 2 0 012 2v6H6v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5H0v-6a2 2 0 012-2h.974zM4 7a2 2 0 11-.001-3.999A2 2 0 014 7z">
                                                        </path>
                                                        <path class="fill-current text-slate-400 false"
                                                            d="M12 6a3 3 0 110-6 3 3 0 010 6zm2 18h-4a1 1 0 01-1-1v-6H6v-6a3 3 0 013-3h6a3 3 0 013 3v6h-3v6a1 1 0 01-1 1z">
                                                        </path>
                                                    </svg><span
                                                        class="ml-3 text-sm font-medium duration-200 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100">Profile</span>
                                                </div>

                                            </div>
                                        </a>
                                    </li>
                                    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 false">
                                        <a href="{{ route('booking') }}"
                                            class="block truncate transition duration-150 text-slate-200 hover:text-white false">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center"><svg class="w-6 h-6 shrink-0"
                                                        viewBox="0 0 24 24">
                                                        <path class="fill-current text-slate-400 false"
                                                            d="M13 6.068a6.035 6.035 0 0 1 4.932 4.933H24c-.486-5.846-5.154-10.515-11-11v6.067Z">
                                                        </path>
                                                        <path class="fill-current text-slate-700 false"
                                                            d="M18.007 13c-.474 2.833-2.919 5-5.864 5a5.888 5.888 0 0 1-3.694-1.304L4 20.731C6.131 22.752 8.992 24 12.143 24c6.232 0 11.35-4.851 11.857-11h-5.993Z">
                                                        </path>
                                                        <path class="fill-current text-slate-600 false"
                                                            d="M6.939 15.007A5.861 5.861 0 0 1 6 11.829c0-2.937 2.167-5.376 5-5.85V0C4.85.507 0 5.614 0 11.83c0 2.695.922 5.174 2.456 7.17l4.483-3.993Z">
                                                        </path>
                                                    </svg><span
                                                        class="ml-3 text-sm font-medium duration-200 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100">Booking</span>
                                                </div>
                                            </div>
                                        </a>

                                    </li>

                                    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 false">
                                        <a href="{{ route('booking-status') }}"
                                            class="block truncate transition duration-150 text-slate-200 hover:text-white false">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center"><svg class="w-6 h-6 shrink-0"
                                                        viewBox="0 0 24 24">
                                                        <path class="fill-current text-slate-600 false"
                                                            d="M8 1v2H3v19h18V3h-5V1h7v23H1V1z"></path>
                                                        <path class="fill-current text-slate-600 false" d="M1 1h22v23H1z">
                                                        </path>
                                                        <path class="fill-current text-slate-400 false"
                                                            d="M15 10.586L16.414 12 11 17.414 7.586 14 9 12.586l2 2zM5 0h14v4H5z">
                                                        </path>
                                                    </svg><span
                                                        class="ml-3 text-sm font-medium duration-200 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100">Booking
                                                        Status</span>
                                                </div>
                                            </div>
                                        </a>

                                    </li>
                                    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 false"><a aria-current="page"
                                            class="block truncate transition duration-150 text-slate-200 hover:text-white false active"
                                            href="/">
                                            <div class="flex items-center"><svg class="w-6 h-6 shrink-0"
                                                    viewBox="0 0 24 24">
                                                    <path class="fill-current text-slate-600 false" d="M1 3h22v20H1z">
                                                    </path>
                                                    <path class="fill-current text-slate-400 false"
                                                        d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z"></path>
                                                </svg><span
                                                    class="ml-3 text-sm font-medium duration-200 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100">History</span>
                                            </div>
                                        </a></li>
                                    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 false">
                                        <a href="{{ route('manager') }} "
                                            class="block truncate transition duration-150 text-slate-200 hover:text-white false">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center"><svg class="w-6 h-6 shrink-0"
                                                        viewBox="0 0 24 24">
                                                        <circle class="fill-current text-slate-400 false" cx="18.5"
                                                            cy="5.5" r="4.5"></circle>
                                                        <circle class="fill-current text-slate-600 false" cx="5.5"
                                                            cy="5.5" r="4.5"></circle>
                                                        <circle class="fill-current text-slate-600 false" cx="18.5"
                                                            cy="18.5" r="4.5"></circle>
                                                        <circle class="fill-current text-slate-400 false" cx="5.5"
                                                            cy="18.5" r="4.5"></circle>
                                                    </svg><span
                                                        class="ml-3 text-sm font-medium duration-200 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100">Manager</span>
                                                </div>
                                            </div>
                                        </a>

                                    </li>
                                    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0">
                                        <a aria-current="page"
                                            class="block truncate transition duration-150 text-slate-200 hover:text-white active"
                                            href="{{ route('contact') }}">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center grow"><svg class="w-6 h-6 shrink-0"
                                                        viewBox="0 0 24 24">
                                                        <path class="fill-current text-slate-600 false"
                                                            d="M14.5 7c4.695 0 8.5 3.184 8.5 7.111 0 1.597-.638 3.067-1.7 4.253V23l-4.108-2.148a10 10 0 01-2.692.37c-4.695 0-8.5-3.184-8.5-7.11C6 10.183 9.805 7 14.5 7z">
                                                        </path>
                                                        <path class="fill-current text-slate-400 false"
                                                            d="M11 1C5.477 1 1 4.582 1 9c0 1.797.75 3.45 2 4.785V19l4.833-2.416C8.829 16.85 9.892 17 11 17c5.523 0 10-3.582 10-8s-4.477-8-10-8z">
                                                        </path>
                                                    </svg><span
                                                        class="ml-3 text-sm font-medium duration-200 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100">Contact
                                                        Us</span>
                                                </div>

                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endguest
        </div>

    </div>

    {{-- </div> --}}

    <div class="grid items-center justify-center h-full grid-cols-8 ml-4">
        <div class="col-start-2 col-end-9 ">

            <main>
                <div class="mx-auto mt-4 py-7 sm:px-10 lg:px-8">
                    <!-- Replace with your content -->
                    <div class="px-4 py-6 sm:px-0">
                        <div class="border-4 border-gray-200 border-dashed rounded-lg h-96">
                            @yield('content')
                        </div>
                    </div>
                    <!-- /End replace -->
                </div>
            </main>
        </div>

    </div>

    {{-- </div> --}}

</body>

</html>
