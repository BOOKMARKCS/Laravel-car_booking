@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header ">
                        <p class="mb-4 text-xl text-black">
                            Manager
                        </p>
                        <a href="{{ route('manager') }}"
                            class="p-2 mr-5 font-bold text-center rounded bg-slate-200 text-sky-500">Booking</a>
                        <a href="{{ route('manager-car') }}" class="mr-5">Cars</a>
                        <a href="{{ route('manager-user') }}" class="mr-5">User</a>
                        <a href="{{ route('manager-driver') }}" class="mr-5">Driver</a>

                    </div>

                    <div class="grid grid-cols-12 card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @foreach ($bookings as $booking)
                            <!-- component -->
                            <div class="h-auto col-start-1 col-end-13 my-4 font-serif text-black border rounded-lg bg-slate-100">
                                <div class="p-3 my-3">
                                    <label for="">BOOKING ID: {{ $booking->id }}</label>
                                    <a href="{{ route('add-booking') }}"
                                    class="right-10 absolute -mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                    ADD
                                </a>
                                    <HR>
                                    <div class="grid grid-cols-3 my-3 ">
                                        <div class="flex p-2 bg-slate-200">
                                            <label for="" class="mr-3 font-bold">Name:</label>
                                            <p>{{ $booking->name }}</p>
                                        </div>
                                        <div class="flex p-2 bg-slate-200">
                                            <label for="" class="mr-3 font-bold ">Origin:</label>
                                            <p>{{ $booking->origin }}</p>
                                        </div>
                                        <div class="flex p-2 bg-slate-200">
                                            <label for="" class="mr-3 font-bold ">Departure time:</label>
                                            <p>{{ date('Y-m-d H:i:s', strtotime($booking->dt_origin)) }}</p>
                                        </div>
                                        <div class="flex p-2 bg-white">
                                            <label for="" class="mr-3 font-bold ">Return time:</label>
                                            <p>{{ date('Y-m-d H:i:s', strtotime($booking->dt_destination)) }}</p>
                                        </div>
                                        <div class="flex p-2 bg-white">
                                            <label for="" class="mr-3 font-bold ">passengers:</label>
                                            <p>{{ $booking->numbers }}</p>
                                        </div>
                                        <div class="flex p-2 bg-white">
                                            <label for="" class="mr-3 font-bold ">Distance:</label>
                                            <p>{{ $booking->distance }}</p>
                                        </div>
                                        <div class="flex p-2 bg-slate-200">
                                            <label for="" class="mr-3 font-bold ">Car type:</label>
                                            <p>{{ $booking->car_id }}</p>
                                        </div>
                                        <div class="flex p-2 bg-slate-200">
                                            <label for="" class="mr-3 font-bold ">Distance:</label>
                                            <p>{{ $booking->distance }}</p>
                                        </div>
                                        <div class="flex p-2 bg-slate-200">
                                            <label for="" class="mr-3 font-bold ">Car registration:</label>
                                            <p>{{ $booking->car_id }}</p>
                                        </div>
                                        <div class="flex p-2 bg-white">
                                            <label for="" class="mr-3 font-bold ">Driver name:</label>
                                            <p>{{ $booking->driver_id }}</p>
                                        </div>
                                        <div class="flex p-2 bg-white">
                                            <label for="" class="mr-3 font-bold ">Tel:</label>
                                            <p>{{ $booking->driver_id }}</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
