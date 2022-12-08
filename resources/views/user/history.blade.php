@extends('layouts.app-user')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div>
                <p class="text-xl hover:text-base">
                    BOOKING HISTORY
                </p>
                <HR>
            </div>
            @foreach ($bookings as $booking)
                <!-- component -->
                <div class="max-w-full my-4 flex h-auto  flex-col rounded-lg bg-white font-serif text-black shadow-xl">
                    <div class="my-3">
                        <label for="">BOOKING ID: {{ $booking->id }}</label>
                        <HR>
                        <div class="grid grid-cols-6 gap-4 my-3 ">
                            <div class="font-bold">Name:</div>
                            <div class="">{{ $booking->name }}</div>
                            <div class="font-bold">Origin:</div>
                            <div class="">{{ $booking->origin }}</div>
                            <div class="font-bold">Destination:</div>
                            <div class="">{{ $booking->destination }}</div>
                            <div class="font-bold">Departure time:</div>
                            <div class="">{{ date('Y-m-d H:i:s', strtotime($booking->dt_origin)) }}</div>
                            <div class="font-bold">Return time:</div>
                            <div class="">{{ date('Y-m-d H:i:s', strtotime($booking->dt_destination)) }}</div>
                            <div class="font-bold">passengers:</div>
                            <div class="">{{ $booking->numbers }}</div>
                            <div class="font-bold">Distance:</div>
                            <div class="">{{ $booking->distance }}</div>
                            <div class="font-bold">Car type:</div>
                            <div class="">{{ $booking->car_id }}</div>
                            <div class="font-bold">Car registration:</div>
                            <div class="">{{ $booking->car_id }}</div>
                            <div class="font-bold">Driver name:</div>
                            <div class="">{{ $booking->driver_id }}</div>
                            <div class="font-bold">Driver Name:</div>
                            <div class="">{{ $booking->driver_id}}</div>
                            <div class="font-bold">Tel:</div>
                            <div class="">{{ $booking->driver_id }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
