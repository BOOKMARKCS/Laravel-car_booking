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
                        <a href="{{  route('manager-car') }}" class="p-2 mr-5 font-bold text-center rounded bg-slate-200 text-sky-500">Cars</a>
                        <a href="{{  route('manager-user') }}" class="mr-5">User</a>
                        <a href="{{  route('manager-driver') }}" class="mr-5">Driver</a>

                    </div>

                    <div class="grid grid-cols-12 card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif



                        @foreach ($cars as $car)
                            <!-- component -->
                            <div
                                class="h-auto col-start-1 col-end-13 my-4 font-serif text-black border rounded-lg bg-slate-100">
                                <div class="p-3 my-3">

                                    <label for="">CAR ID: {{ $car->id }}</label>
                                    <a href="{{ route('car') }}"
                                    class="right-10 absolute -mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                    ADD
                                </a>
                                    <HR>
                                    <div class="grid grid-cols-3 my-3 ">
                                        <div class="flex p-2 bg-slate-200">
                                            <label for="" class="mr-3 font-bold">Car registration:</label>
                                            <p>{{ $car->car_registration }}</p>
                                        </div>
                                        <div class="flex p-2 bg-slate-200">
                                            <label for="" class="mr-3 font-bold ">Model:</label>
                                            <p>{{ $car->model }}</p>
                                        </div>
                                        <div class="flex p-2 bg-slate-200">
                                            <label for="" class="mr-3 font-bold ">Color:</label>
                                            <p>{{ $car->color }}</p>
                                        </div>
                                        <div class="flex p-2 bg-white">
                                            <label for="" class="mr-3 font-bold ">Type:</label>
                                            <p>{{ $car->type }}</p>
                                        </div>
                                        <div class="flex p-2 bg-white">
                                            <label for="" class="mr-3 font-bold ">Acr date:</label>
                                            <p>{{ $car->acr_date }}</p>
                                        </div>
                                        <div class="flex p-2 bg-white">
                                            <label for="" class="mr-3 font-bold ">Act expiration date:</label>
                                            <p>{{ $car->act_expiration_date }}</p>
                                        </div>
                                        <div class="flex p-2 bg-slate-200">
                                            <label for="" class="mr-3 font-bold ">Oil:</label>
                                            <p>{{ $car->oil }}</p>
                                        </div>
                                        <div class="flex p-2 bg-slate-200">
                                            <label for="" class="mr-3 font-bold ">image:</label>
                                            <p>{{ $car->image }}</p>
                                        </div>
                                        <div class="flex p-2 bg-slate-200">
                                            <label for="" class="mr-3 font-bold ">Status:</label>
                                            <p>{{ $car->status }}</p>
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
