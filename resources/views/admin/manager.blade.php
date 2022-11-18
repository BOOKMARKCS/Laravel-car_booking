@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header">
                        <p class="mb-3 text-xl text-black">
                            Manager
                        </p>
                        <span class="mr-5">Booking</span>
                        <span class="mr-5">Cars</span>
                        <span class="mr-5">User</span>

                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
