@extends('layouts.app')

@section('content')
    {{-- <div class="container"> --}}
    <div class="">
        <!-- component -->

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
                                        <td class="px-6 py-3 text-center">
                                            <div class="flex items-center justify-center">
                                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <a href="{{ route('edit_booking', $booking->id) }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <button class="py-0 mt-1" type="submit">
                                                        {{-- <a href="destroy-booking/{{ $booking->id }}"> --}}
                                                        <svg class="w-4" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                        {{-- </a> --}}
                                                    </button>
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
    </div>
    </div>
@endsection
