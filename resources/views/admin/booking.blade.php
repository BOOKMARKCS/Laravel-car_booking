@extends('layouts.app')

@section('content')
<div class="container">
    <div class="flex justify-center font-sans items-top">
        <div class="lg:w-5/6">
            <div class="my-6 bg-white rounded shadow-md">
                <table class="w-full table-auto min-w-max">
                    <thead>
                        <tr class="text-sm leading-normal text-gray-600 uppercase bg-gray-200">
                            <th class="px-6 py-3 text-left">Name</th>
                            <th class="px-6 py-3 text-left">Origin</th>
                            <th class="px-6 py-3 text-center">Destination</th>
                            <th class="px-6 py-3 text-center">Departure time</th>
                            <th class="px-6 py-3 text-center">Return time</th>
                            <th class="px-6 py-3 text-center">passengers</th>
                            <th class="px-6 py-3 text-center">Status</th>
                            <th class="px-6 py-3 text-center">Action</th>

                        </tr>
                    </thead>
                    @foreach ($bookings as $booking)
                        <tbody class="text-sm font-light text-gray-600">
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="px-6 py-3 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span>
                                            {{ $booking->name }}
                                        </span>
                                    </div>
                                </td>
                                <td class="px-6 py-3 text-center">
                                    <div class="flex items-center">
                                        <span>
                                            {{ $booking->origin }}

                                        </span>
                                    </div>
                                </td>
                                <td class="px-6 py-3 text-center">
                                    <div class="flex items-center">
                                        <span>
                                            {{ $booking->destination }}
                                        </span>
                                    </div>
                                </td>
                                <td class="px-6 py-3 text-center">
                                    <div class="flex justify-center item-center">
                                        {{ $booking->dt_origin }}
                                    </div>
                                </td>
                                <td class="px-6 py-3 text-center">
                                    <div class="flex justify-center item-center">
                                        {{ $booking->dt_destination }}
                                    </div>
                                </td>
                                <td class="px-6 py-3 text-center">
                                    <div class="flex items-center justify-center">
                                        <span>{{ $booking->numbers }}</span>
                                    </div>
                                </td>
                                <td class="px-6 py-3 text-center">
                                    <div class="flex items-center justify-center">
                                        <span>
                                            @if ($booking->status == null)
                                                {{ 'pending' }}
                                            @else
                                                {{ 'accept' }}
                                            @endif
                                        </span>
                                    </div>
                                </td>
                                <form action="/destroy-booking/{{ $booking->id }}" method="POST">
                                    @CSRF
                                    @method('DELETE')
                                    <td class="justify-center px-6 py-3 text-centers">
                                        <div class="flex items-center justify-center">

                                            <div class="items-center w-4 mr-2 text-center transform hover:text-purple-500 hover:scale-110">
                                                <button class="py-0 mt-1" type="submit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="19" height="19"><path fill="#d50000" d="M5.7 22H42.5V26H5.7z" transform="rotate(-45.001 24.036 24.037)"/><path fill="#d50000" d="M24,4C13,4,4,13,4,24s9,20,20,20s20-9,20-20S35,4,24,4z M24,40c-8.8,0-16-7.2-16-16S15.2,8,24,8 s16,7.2,16,16S32.8,40,24,40z"/></svg>

                                                </button>
                                            </div>
                                            <div class="w-4 mr-4 transform hover:text-purple-500 hover:scale-110">
                                                <a href="{{ route('allow', $booking->id) }}">

                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="16" height="16" viewBox="0 0 256 256" xml:space="preserve">

                                                        <defs>
                                                        </defs>
                                                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                                            <path d="M 43.077 63.077 c -0.046 0 -0.093 -0.001 -0.14 -0.002 c -1.375 -0.039 -2.672 -0.642 -3.588 -1.666 L 23.195 43.332 c -1.84 -2.059 -1.663 -5.22 0.396 -7.06 c 2.059 -1.841 5.22 -1.664 7.06 0.396 l 12.63 14.133 l 38.184 -38.184 c 1.951 -1.952 5.119 -1.952 7.07 0 c 1.953 1.953 1.953 5.119 0 7.071 L 46.612 61.612 C 45.674 62.552 44.401 63.077 43.077 63.077 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,165,16); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                                                            <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 2.762 0 5 2.239 5 5 s -2.238 5 -5 5 c -19.299 0 -35 15.701 -35 35 s 15.701 35 35 35 s 35 -15.701 35 -35 c 0 -2.761 2.238 -5 5 -5 s 5 2.239 5 5 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,165,16); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                                                        </g>
                                                        </svg>
                                                </a>

                                            </div>
                                        </div>
                                    </td>
                                </form>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
