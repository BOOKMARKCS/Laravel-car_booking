@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <form action="/create_allow/{{ $booking->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!-- component -->
                {{-- RESERVATION NAME --}}
                <div class="max-w-4xl py-4 mx-auto bg-white rounded-xl px-9 ">
                    <div class="mb-3 -mx-3 md:flex">
                        <div class="px-3 md:w-full"> <label
                                class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker" for="name">
                                Reservation name
                            </label>
                            <input
                                class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-grey-lighter"
                                id="name" name="name" type="text" value="{{ $booking->name }}" placeholder="Reservation name.">
                        </div>
                    </div>
                    {{-- ORIGIN --}}
                    <div class="mb-3 -mx-3 md:flex">
                        <div class="px-3 md:w-full"> <label
                                class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker"
                                for="name">
                                Origin
                            </label>
                            <input
                                class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-grey-lighter"
                                id="origin" name="origin" type="text" value="{{ $booking->origin }}" placeholder="Origin">
                        </div>
                    </div>
                    {{-- DEPARTURE TIME --}}
                    <div class="mb-3 -mx-3 md:flex">
                        <div class="px-3 md:w-full">
                            <label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker"
                                for="grid-first-name">
                                Date
                            </label>
                            <input
                                class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red"
                                id="dt_origin" name="dt_origin" type="datetime-local" value="{{ date('Y-m-d H:i:s', strtotime($booking->dt_origin)) }}">
                        </div>
                    </div>
                    {{-- DESTINATION --}}
                    <div class="mb-3 -mx-3 md:flex">
                        <div class="px-3 md:w-full">
                            <label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker"
                                for="grid-password">
                                Destination
                            </label>
                            <input
                                class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-grey-lighter"
                                id="destination" name="destination" value="{{ $booking->destination }}" type="text" placeholder="Destination">
                        </div>
                    </div>
                    {{-- RETURN TIME --}}
                    <div class="mb-3 -mx-3 md:flex">
                        <div class="px-3 md:w-full ">
                            <label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker"
                                for="grid-first-name">
                                Date
                            </label>
                            <input
                                class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red"
                                id="dt_destination" name="dt_destination" value="{{ date('Y-m-d H:i:s', strtotime($booking->dt_destination)) }}" type="datetime-local">
                        </div>

                    </div>
                    {{-- NUMBER PASSENGERS --}}
                    <div class="mb-3 -mx-3 md:flex">
                        <div class="px-3 md:w-full">
                            <label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker"
                                for="grid-password">
                                Number passenger
                            </label>
                            <input
                                class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-grey-lighter"
                                id="numbers" name="numbers" type="number" value="{{ $booking->numbers }}" placeholder="Number passenger">
                        </div>
                    </div>
                     {{-- USER ID --}}
                     <div class="mb-3 -mx-3 md:flex">
                        <div class="px-3 md:w-full">
                            <label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker"
                                for="grid-password">
                               User id
                            </label>
                            <input
                                class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-grey-lighter"
                                id="user_id" name="user_id" type="number" value="" placeholder="User id">
                        </div>
                    </div>
                     {{-- CAR_ID --}}
                     <div class="mb-3 -mx-3 md:flex">
                        <div class="px-3 md:w-full">
                            <label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker"
                                for="grid-password">
                               Car id
                            </label>
                            <input
                                class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-grey-lighter"
                                id="car_id" name="car_id" type="number" value="" placeholder="Car id">
                        </div>
                    </div>
                     {{-- DRIVER ID--}}
                     <div class="mb-3 -mx-3 md:flex">
                        <div class="px-3 md:w-full">
                            <label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker"
                                for="grid-password">
                              Driver id
                            </label>
                            <input
                                class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-grey-lighter"
                                id="driver_id" name="driver_id" type="number" value="" placeholder="Driver id">
                        </div>
                    </div>

                    <div>
                        <button type="submit" role="button"
                            class="w-full py-4 text-sm font-semibold leading-none text-white bg-indigo-700 border rounded focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none hover:bg-indigo-600">SENT
                            A BOOKING REQUEST </button>
                    </div>
                </div>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
        </div>
    </div>
@endsection



@endsection
