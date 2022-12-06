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
        <!-- Sidebar -->
        <div class="fixed h-full w-screen">
            <div id="sidebar" class=" h-full lg:static lg:left-auto lg:top-auto lg:translate-x-0 w-64   max-sm:w-2/12 max-lg:w-24 lg:sidebar-expanded:!w-64 2xl:!w-64  bg-sky-500 transition-all duration-500 ">

                <div class="flex justify-center w-100 py-3 mb-4 ">
                    <a aria-current="page" class="flex active" href="/"><svg width="40" height="40" viewBox="0 0 32 32">
                            <defs>
                                <linearGradient x1="28.538%" y1="20.229%" x2="100%" y2="108.156%" id="logo-a">
                                    <stop stop-color="#A5B4FC" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#A5B4FC" offset="100%"></stop>
                                </linearGradient>
                                <linearGradient x1="88.638%" y1="29.267%" x2="22.42%" y2="100%" id="logo-b">
                                    <stop stop-color="#38BDF8" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#38BDF8" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <rect fill="#6366F1" width="32" height="32" rx="16"></rect>
                            <path d="M18.277.16C26.035 1.267 32 7.938 32 16c0 8.837-7.163 16-16 16a15.937 15.937 0 01-10.426-3.863L18.277.161z" fill="#4F46E5"></path>
                            <path d="M7.404 2.503l18.339 26.19A15.93 15.93 0 0116 32C7.163 32 0 24.837 0 16 0 10.327 2.952 5.344 7.404 2.503z" fill="url(#logo-a)"></path>
                            <path d="M2.223 24.14L29.777 7.86A15.926 15.926 0 0132 16c0 8.837-7.163 16-16 16-5.864 0-10.991-3.154-13.777-7.86z" fill="url(#logo-b)"></path>
                        </svg>
                        <span class="self-center max-lg:hidden   ml-6 w-32 text-xl font-bold text-white  dark:text-white max-lg:transition-all max-lg:duration-100">
                            Allowed
                        </span>

                    </a>
                </div>
                <div>
                    <div class="items-center">
                        <h3 class="max-lg:justify-center  flex text-slate-200 font-bold">
                            <span class="hidden w-6 max-sm:block" aria-hidden="true">•••</span>
                            <span class="text-base w-full mx-3 pl-2 max-sm:hidden font-bold">Pages</span>
                        </h3>
                        <ul class="mt-2 justify-center flex flex-col gap-1">
                            <li>
                                <a href="{{route('home')}}" class="text-slate-200 hover:text-white w-100 text-base">
                                    <div class="flex h-12 items-center justify-center lg:mx-6 max-lg:m-1 max-lg:p-1 lg:py-1  hover:bg-blue-700 hover:font-bold hover:text-lg rounded-lg  gap-3 hover:h-14 hover:duration-500 {{ 'home' == request()->path()? 'bg-blue-900 text-white font-bold ':''}}">
                                        <svg class="h-full" viewBox="0 0 24 24">
                                            <path class="fill-current !text-indigo-500" d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z">
                                            </path>
                                            <path class="fill-current text-slate-600" d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z">
                                            </path>
                                            <path class="fill-current text-slate-400" d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z">
                                            </path>
                                        </svg>
                                        <span class="max-lg:hidden w-32 ">Dashboard</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('profile') }}" class="text-slate-200 hover:text-white text-base">
                                    <div class="flex items-center h-12 justify-center lg:mx-6 max-lg:m-1 max-lg:p-1  hover:bg-blue-700 hover:font-bold hover:text-lg lg:p-2 rounded-lg  gap-3 hover:h-14 hover:duration-500  {{ 'profile' == request()->path()? 'bg-blue-900 text-white font-bold ':''}}">
                                        <svg class="h-full" viewBox="0 0 24 24">
                                            <path class="fill-current text-slate-600 false" d="M18.974 8H22a2 2 0 012 2v6h-2v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5h-2v-6a2 2 0 012-2h.974zM20 7a2 2 0 11-.001-3.999A2 2 0 0120 7zM2.974 8H6a2 2 0 012 2v6H6v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5H0v-6a2 2 0 012-2h.974zM4 7a2 2 0 11-.001-3.999A2 2 0 014 7z">
                                            </path>
                                            <path class="fill-current text-slate-400 false" d="M12 6a3 3 0 110-6 3 3 0 010 6zm2 18h-4a1 1 0 01-1-1v-6H6v-6a3 3 0 013-3h6a3 3 0 013 3v6h-3v6a1 1 0 01-1 1z">
                                            </path>
                                        </svg>
                                        <span class="max-lg:hidden w-32">Profile</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('booking') }}" class="text-slate-200 hover:text-white text-base ">
                                    <div class="flex items-center h-12 justify-center lg:mx-6 max-lg:m-1 max-lg:p-1 lg:p-2 hover:bg-blue-700 hover:font-bold hover:text-lg p-2 rounded-lg  gap-3 hover:h-14 hover:duration-500 {{ 'booking' == request()->path()? 'bg-blue-900 text-white font-bold ':''}}">
                                        <svg class="h-full" viewBox="0 0 24 24">
                                            <path class="fill-current text-slate-400 false" d="M13 6.068a6.035 6.035 0 0 1 4.932 4.933H24c-.486-5.846-5.154-10.515-11-11v6.067Z">
                                            </path>
                                            <path class="fill-current text-slate-700 false" d="M18.007 13c-.474 2.833-2.919 5-5.864 5a5.888 5.888 0 0 1-3.694-1.304L4 20.731C6.131 22.752 8.992 24 12.143 24c6.232 0 11.35-4.851 11.857-11h-5.993Z">
                                            </path>
                                            <path class="fill-current text-slate-600 false" d="M6.939 15.007A5.861 5.861 0 0 1 6 11.829c0-2.937 2.167-5.376 5-5.85V0C4.85.507 0 5.614 0 11.83c0 2.695.922 5.174 2.456 7.17l4.483-3.993Z">
                                            </path>
                                        </svg>
                                        <span class="max-lg:hidden w-32">Booking</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('booking-status') }}" class="text-slate-200 hover:text-white text-base">
                                    <div class="flex items-center h-12 justify-center lg:mx-6 max-lg:m-1 max-lg:p-1 lg:p-2 hover:bg-blue-700 hover:font-bold hover:text-lg p-2 rounded-lg  gap-3 hover:h-14 hover:duration-500 {{ 'status' == request()->path()? 'bg-blue-900 text-white font-bold ':''}}">
                                        <svg class="h-full" viewBox="0 0 24 24">
                                            <path class="fill-current text-slate-600 false" d="M8 1v2H3v19h18V3h-5V1h7v23H1V1z"></path>
                                            <path class="fill-current text-slate-600 false" d="M1 1h22v23H1z">
                                            </path>
                                            <path class="fill-current text-slate-400 false" d="M15 10.586L16.414 12 11 17.414 7.586 14 9 12.586l2 2zM5 0h14v4H5z">
                                            </path>
                                        </svg>
                                        <span class="max-lg:hidden w-32">Status</span>
                                    </div>
                                </a>

                            </li>
                            <li>
                                <a aria-current="page" class="text-slate-200 hover:text-white text-base" href="/">
                                    <div class="flex items-center h-12 justify-center lg:mx-6 max-lg:m-1 max-lg:p-1 lg:p-2 hover:bg-blue-700 hover:font-bold hover:text-lg rounded-lg  gap-3 hover:h-14 hover:duration-500 {{ 'history' == request()->path()? 'bg-blue-900 text-white font-bold ':''}}">
                                        <svg class="h-full" viewBox="0 0 24 24">
                                            <path class="fill-current text-slate-600 false" d="M1 3h22v20H1z">
                                            </path>
                                            <path class="fill-current text-slate-400 false" d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z"></path>
                                        </svg>
                                        <span class="max-lg:hidden w-32">History</span>
                                    </div>
                                </a></li>
                            <li>
                                <a href="{{ route('manager') }} " class="text-slate-200 hover:text-white text-base">
                                    <div class="flex items-center h-12 justify-center lg:mx-6 max-lg:m-1 max-lg:p-1 lg:p-2 hover:bg-blue-700 hover:font-bold hover:text-lg  rounded-lg  gap-3 hover:h-14 hover:duration-500 {{ 'manager' == request()->path()? 'bg-blue-900 text-white font-bold ':''}}">
                                        <svg class="h-full" viewBox="0 0 24 24">
                                            <circle class="fill-current text-slate-400 false" cx="18.5" cy="5.5" r="4.5"></circle>
                                            <circle class="fill-current text-slate-600 false" cx="5.5" cy="5.5" r="4.5"></circle>
                                            <circle class="fill-current text-slate-600 false" cx="18.5" cy="18.5" r="4.5"></circle>
                                            <circle class="fill-current text-slate-400 false" cx="5.5" cy="18.5" r="4.5"></circle>
                                        </svg>
                                        <span class="max-lg:hidden w-32">Manager</span>
                                    </div>
                                </a>

                            </li>
                            <li>
                                <a aria-current="page" class="text-slate-200 hover:text-white text-base" href="{{ route('contact') }}">
                                    <div class="flex items-center h-12 justify-center lg:mx-6 max-lg:m-1 max-lg:p-1 lg:p-2 hover:bg-blue-700 hover:font-bold hover:text-lg  rounded-lg  gap-3 hover:h-14 hover:duration-500 {{ 'contact' == request()->path()? 'bg-blue-900 text-white font-bold ':''}}">
                                        <svg class="h-full" viewBox="0 0 24 24">
                                            <path class="fill-current text-slate-600 false" d="M14.5 7c4.695 0 8.5 3.184 8.5 7.111 0 1.597-.638 3.067-1.7 4.253V23l-4.108-2.148a10 10 0 01-2.692.37c-4.695 0-8.5-3.184-8.5-7.11C6 10.183 9.805 7 14.5 7z">
                                            </path>
                                            <path class="fill-current text-slate-400 false" d="M11 1C5.477 1 1 4.582 1 9c0 1.797.75 3.45 2 4.785V19l4.833-2.416C8.829 16.85 9.892 17 11 17c5.523 0 10-3.582 10-8s-4.477-8-10-8z">
                                            </path>
                                        </svg>
                                        <span class="max-lg:hidden w-32">Contact Us</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content -->
        <div class="flex bg-red-700">
            <div class=" h-screen  w-64 max-lg:w-24 lg:sidebar-expanded:!w-64 2xl:!w-64 shrink-0 p-4 transition-all duration-200 ">

            </div>
            <div class="min-h-full w-100">
                <nav class="bg-white">
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div class="flex h-16 items-center justify-between">
                            <div></div>
                            <div class="">
                                <div class="ml-4 flex items-center md:ml-6">
                                    <button type="button" class="rounded-full  p-1 text-slate-300 hover:text-sky-500 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:text-sky-500  ">
                                        <span class="sr-only">View notifications</span>
                                        <!-- Heroicon name: outline/bell -->
                                        <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                                        </svg>
                                    </button>

                                    <!-- Profile dropdown -->
                                    <div class="relative ml-4">
                                        <div class="">
                                            <button type="button" class="flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-sky-500" id="user-menu-button" aria-expanded="false" data-bs-toggle="dropdown" aria-haspopup="true">
                                                <span class="sr-only">Open user menu</span>
                                                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                            </button>

                                            <div class="absolute mt-2">
                                                <div class="dropdown-menu" role="menu" aria-labelledby="user-menu-button">
                                                    <!-- Active: "bg-gray-100", Not Active: "" -->
                                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>

                                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>

                                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <main>
                    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">


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
    </div>

</body>

</html>
