@extends('layouts.app')

@section('content')
<div>
    <div class="relative overflow-hidden -mt-6">
        <div class="relative  pt-8 bg-gray-800 pb-32 ">
            <div class="px-4 md:px-10 mx-auto w-full">
                <div>
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                            <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="flex-auto p-4">
                                    <div class="flex flex-wrap">
                                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                            <h5 class="text-blueGray-400 uppercase font-bold text-xs">TRAFFIC</h5><span class="font-semibold text-xl text-blueGray-700">350,897</span>
                                        </div>
                                        <div class="relative w-auto pl-4 flex-initial">
                                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500"><i class="far fa-chart-bar"></i></div>
                                        </div>
                                    </div>
                                    <p class="text-sm text-blueGray-400 mt-4"><span class="text-emerald-500 mr-2"><i class="fas fa-arrow-up"></i> 3.48%</span><span class="whitespace-nowrap">Since last month</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                            <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="flex-auto p-4">
                                    <div class="flex flex-wrap">
                                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                            <h5 class="text-blueGray-400 uppercase font-bold text-xs">NEW USERS</h5><span class="font-semibold text-xl text-blueGray-700">2,356</span>
                                        </div>
                                        <div class="relative w-auto pl-4 flex-initial">
                                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-orange-500"><i class="fas fa-chart-pie"></i></div>
                                        </div>
                                    </div>
                                    <p class="text-sm text-blueGray-400 mt-4"><span class="text-red-500 mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span><span class="whitespace-nowrap">Since last week</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                            <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="flex-auto p-4">
                                    <div class="flex flex-wrap">
                                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                            <h5 class="text-blueGray-400 uppercase font-bold text-xs">SALES</h5><span class="font-semibold text-xl text-blueGray-700">924</span>
                                        </div>
                                        <div class="relative w-auto pl-4 flex-initial">
                                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-pink-500"><i class="fas fa-users"></i></div>
                                        </div>
                                    </div>
                                    <p class="text-sm text-blueGray-400 mt-4"><span class="text-orange-500 mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span><span class="whitespace-nowrap">Since yesterday</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                            <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="flex-auto p-4">
                                    <div class="flex flex-wrap">
                                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                            <h5 class="text-blueGray-400 uppercase font-bold text-xs">PERFORMANCE</h5><span class="font-semibold text-xl text-blueGray-700">49,65%</span>
                                        </div>
                                        <div class="relative w-auto pl-4 flex-initial">
                                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-lightBlue-500"><i class="fas fa-percent"></i></div>
                                        </div>
                                    </div>
                                    <p class="text-sm text-blueGray-400 mt-4"><span class="text-emerald-500 mr-2"><i class="fas fa-arrow-up"></i> 12%</span><span class="whitespace-nowrap">Since last month</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-4 md:px-10 mx-auto w-full -m-24">
            <div class="flex flex-wrap">
                <div class="w-full xl:w-4/12 px-4">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                        <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                            <div class="flex flex-wrap items-center">
                                <div class="relative w-full max-w-full flex-grow flex-1">
                                    <h6 class="uppercase text-blueGray-400 mb-1 text-xs font-semibold">Performance</h6>
                                    <h2 class="text-blueGray-700 text-xl font-semibold">Total orders</h2>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 flex-auto">
                            <div class="relative h-350-px">
                                <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand">
                                        <div class=""></div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink">
                                        <div class=""></div>
                                    </div>
                                </div><canvas id="bar-chart" style="display: block; width: 261px; height: 350px;" width="261" height="350" class="chartjs-render-monitor"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4 ">
                    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-gray-700">
                        <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                            <div class="flex flex-wrap items-center">
                                <div class="relative w-full max-w-full flex-grow flex-1">
                                    <h6 class="uppercase text-blueGray-100 mb-1 text-xs font-semibold">Overview</h6>
                                    <h2 class="text-white text-xl font-semibold">Sales value</h2>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 flex-auto">
                            <div class="relative h-350-px">
                                <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand">
                                        <div class=""></div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink">
                                        <div class=""></div>
                                    </div>
                                </div><canvas id="line-chart" style="display: block; width: 585px; height: 350px;" width="585" height="350" class="chartjs-render-monitor"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full  px-4">
                <div class="overflow-x-auto relative shadow-md sm:rounded-lg w-full">
                    <div class="flex justify-between items-center pb-4 bg-white dark:bg-gray-900">
                        <div>
                            <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                                <span class="sr-only">Action button</span>
                                Action
                                <svg class="ml-2 w-3 h-3" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownAction" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownActionButton">
                                    <li>
                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reward</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Promote</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Activate account</a>
                                    </li>
                                </ul>
                                <div class="py-1">
                                    <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete User</a>
                                </div>
                            </div>
                        </div>
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="table-search-users" class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for users">
                        </div>
                    </div>
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                    </div>
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Name
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Position
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Status
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="p-4 w-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row" class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                    <div class="pl-3">
                                        <div class="text-base font-semibold">Neil Sims</div>
                                        <div class="font-normal text-gray-500">neil.sims@flowbite.com</div>
                                    </div>
                                </th>
                                <td class="py-4 px-6">
                                    React Developer
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center">
                                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> Online
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit user</a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="p-4 w-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-2" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-2" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row" class="flex items-center py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="Jese image">
                                    <div class="pl-3">
                                        <div class="text-base font-semibold">Bonnie Green</div>
                                        <div class="font-normal text-gray-500">bonnie@flowbite.com</div>
                                    </div>
                                </th>
                                <td class="py-4 px-6">
                                    Designer
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center">
                                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> Online
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit user</a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="p-4 w-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-2" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-2" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row" class="flex items-center py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-2.jpg" alt="Jese image">
                                    <div class="pl-3">
                                        <div class="text-base font-semibold">Jese Leos</div>
                                        <div class="font-normal text-gray-500">jese@flowbite.com</div>
                                    </div>
                                </th>
                                <td class="py-4 px-6">
                                    Vue JS Developer
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center">
                                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> Online
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit user</a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="p-4 w-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-2" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-2" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row" class="flex items-center py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-5.jpg" alt="Jese image">
                                    <div class="pl-3">
                                        <div class="text-base font-semibold">Thomas Lean</div>
                                        <div class="font-normal text-gray-500">thomes@flowbite.com</div>
                                    </div>
                                </th>
                                <td class="py-4 px-6">
                                    UI/UX Engineer
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center">
                                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> Online
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit user</a>
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="p-4 w-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row" class="flex items-center py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-4.jpg" alt="Jese image">
                                    <div class="pl-3">
                                        <div class="text-base font-semibold">Leslie Livingston</div>
                                        <div class="font-normal text-gray-500">leslie@flowbite.com</div>
                                    </div>
                                </th>
                                <td class="py-4 px-6">
                                    SEO Specialist
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center">
                                        <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div> Offline
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit user</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

            <footer class="block py-4 ">
                <div class="container mx-auto px-4">
                    <hr class="mb-4 border-b-1 border-gray-200">
                    <div class="flex flex-wrap items-center md:justify-between justify-center">
                        <div class="w-full md:w-4/12 px-4">
                            <div class="text-sm text-blueGray-500 font-semibold py-1 text-center md:text-left">Copyright © 2022 <a href="https://www.creative-tim.com?ref=nnjs-footer-admin" class="text-blueGray-500 hover:text-blueGray-700 text-sm font-semibold py-1">Creative Tim</a></div>
                        </div>
                        <div class="w-full md:w-8/12 px-4">
                            <ul class="flex flex-wrap list-none md:justify-end  justify-center">
                                <li><a href="https://www.creative-tim.com?ref=nnjs-footer-admin" class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">Creative Tim</a></li>
                                <li><a href="https://www.creative-tim.com/presentation?ref=nnjs-footer-admin" class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">About Us</a></li>
                                <li><a href="http://blog.creative-tim.com?ref=nnjs-footer-admin" class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">Blog</a></li>
                                <li><a href="https://github.com/creativetimofficial/notus-nextjs/blob/main/LICENSE.md?ref=nnjs-footer-admin" class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">MIT License</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <div class="mt-20"></div>

        </div>
    </div>
</div>
@endsection
