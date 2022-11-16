@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div>
                <p class="text-xl hover:text-base">
                    BOOKING HISTORY
                </p>
                <HR>
            </div>
            <!-- component -->
            <div class="max-w-full my-4 flex h-auto  flex-col rounded-lg bg-white font-serif text-black shadow-xl">
                <div class="my-3">
                    <label for="">BOOKING ID: value</label>
                    <HR>
                    <div class="grid grid-cols-6 gap-4 my-3 ">
                        <div class="">Name:</div>
                        <div class="">value</div>
                        <div class="">Origin:</div>
                        <div class="">value</div>
                        <div class="">Destination:</div>
                        <div class="">value</div>
                        <div class="">Departure time:</div>
                        <div class="">value</div>
                        <div class="">Return time:</div>
                        <div class="">value</div>
                        <div class="">Number passengers:</div>
                        <div class="">value</div>
                        <div class="">Distance:</div>
                        <div class="">value</div>
                        <div class="">Car type:</div>
                        <div class="">value</div>
                        <div class="">Car registration:</div>
                        <div class="">value</div>
                        <div class="">Driver name:</div>
                        <div class="">value</div>
                        <div class="">Driver Name:</div>
                        <div class="">value</div>
                        <div class="">Tel:</div>
                        <div class="">value</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
