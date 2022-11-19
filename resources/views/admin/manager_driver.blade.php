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
                        <a href="{{ route('manager') }}" class="p-2 mr-5 ">Booking</a>
                        <a href="{{  route('manager-car') }}" class="p-2 mr-5 ">Cars</a>
                        <a href="{{  route('manager-user') }}" class="p-2 mr-5 "">User</a>
                        <a href="{{  route('manager-driver') }}" class="p-2 mr-5 font-bold text-center rounded bg-slate-200 text-sky-500">Driver</a>

                    </div>

                    <div class="grid grid-cols-12 card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif



                        @foreach ($drivers as $driver)
                            <!-- component -->
                            <div
                                class="h-auto col-start-1 col-end-13 my-4 font-serif text-black border rounded-lg bg-slate-100">
                                <div class="p-3 my-3">
                                    <label for="">CAR ID: {{ $driver->id }}</label>
                                    <a href="{{ route('driver') }}"
                                    class="right-10 absolute -mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                    ADD
                                </a>
                                    <HR>
                                    <div class="grid grid-cols-2 my-3 ">
                                        <div class="flex p-2 bg-slate-200">
                                            <label for="" class="mr-3 font-bold">Driver Name:</label>
                                            <p>{{ $driver->driver_name }}</p>
                                        </div>
                                        <div class="flex p-2 bg-slate-200">
                                            <label for="" class="mr-3 font-bold ">Email:</label>
                                            <p>{{ $driver->email }}</p>
                                        </div>
                                        <div class="flex p-2 bg-white">
                                            <label for="" class="mr-3 font-bold ">Password:</label>
                                            <p>{{ $driver->password }}</p>
                                        </div>
                                        <div class="flex p-2 bg-white">
                                            <label for="" class="mr-3 font-bold ">Age:</label>
                                            <p>{{ $driver->age }}</p>
                                        </div>
                                        <div class="flex p-2 bg-slate-200">
                                            <label for="" class="mr-3 font-bold ">Sex:</label>
                                            <p>{{ $driver->sex }}</p>
                                        </div>

                                        <div class="flex p-2 bg-slate-200">
                                            <label for="" class="mr-3 font-bold ">Position:</label>
                                            <p>{{ $driver->position }}</p>
                                        </div>
                                        <div class="flex p-2 bg-white">
                                            <label for="" class="mr-3 font-bold ">Faculty:</label>
                                            <p>{{ $driver->faculty }}</p>
                                        </div>
                                        <div class="flex p-2 bg-white">
                                            <label for="" class="mr-3 font-bold ">Tel:</label>
                                            <p>{{ $driver->tel }}</p>
                                        </div>
                                        <div class="flex p-2 bg-slate-200">
                                            <label for="" class="mr-3 font-bold ">driver_license:</label>
                                            <p>{{ $driver->driver_license }}</p>
                                        </div>
                                        <div class="flex p-2 bg-slate-200">
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
