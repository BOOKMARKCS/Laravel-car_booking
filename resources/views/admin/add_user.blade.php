@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <form method="POST" action="{{ 'create_user' }}">
                @csrf
                <!-- component -->
                {{-- RESERVATION NAME --}}
                <div class="grid max-w-4xl grid-cols-2 py-4 mx-auto bg-white rounded-xl px-9">
                    <div class="mb-3 -mx-3 md:flex">
                        <div class="px-3 md:w-full"> <label
                                class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker" for="name">
                                name
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 form-control @error('name') is-invalid @enderror"
                                id="car_registration" name="name" type="text"
                                value="{{ old('name') }}" placeholder="Reservation name.">
                            @error('car_registration')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- ORIGIN --}}
                    <div class="mb-3 -mx-3 md:flex">
                        <div class="px-3 md:w-full"> <label
                                class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker"
                                for="model">
                                email
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 form-control @error('email') is-invalid @enderror"
                                id="email" name="email" type="email" value="{{ old('email') }}"
                                placeholder="model">
                            @error('model')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- DESTINATION --}}
                    <div class="mb-3 -mx-3 md:flex">
                        <div class="px-3 md:w-full">
                            <label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker"
                                for="color">
                                Password
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 form-control @error('password') is-invalid @enderror"
                                id="password" name="password" value="{{old('password')}}" type="text" placeholder="Color">
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- NUMBER PASSENGERS --}}
                    <div class="mb-3 -mx-3 md:flex">
                        <div class="px-3 md:w-full">
                            <label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker"
                                for="type">
                                age
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 form-control @error('age') is-invalid @enderror"
                                id="age" name="age" value="{{ old('age') }}" type="number" placeholder="Type">
                            @error('age')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- NUMBER PASSENGERS --}}
                    <div class="mb-3 -mx-3 md:flex">
                        <div class="px-3 md:w-full">
                            <label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker"
                                for="Acr date">
                                Sex
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 form-control @error('sex') is-invalid @enderror"
                                id="sex" name="sex" value="{{ old('sex') }}" type="text" placeholder="Sex">
                            @error('sex')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- NUMBER PASSENGERS --}}
                    <div class="mb-3 -mx-3 md:flex">
                        <div class="px-3 md:w-full">
                            <label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker"
                                for="act_expiration_date">
                                tel
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 form-control @error('tel') is-invalid @enderror"
                                id="act_expiration_date" value="{{ old('tel') }}" name="act_expiration_date" type="text"
                                placeholder="tel">
                            @error('tel')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 -mx-3 md:flex">
                        <div class="px-3 md:w-full">
                            <label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker"
                                for="Oil">
                                Position
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 form-control @error('position') is-invalid @enderror"
                                id="position" name="position" value="{{ old('position') }}}" type="text" placeholder="oil">
                            @error('position')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 -mx-3 md:flex">
                        <div class="px-3 md:w-full">
                            <label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker"
                                for="faculty">
                                Faculty
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 form-control @error('Faculty') is-invalid @enderror"
                                id="Faculty" name="Faculty" value="{{ old('Faculty') }}" type="text" placeholder="image">
                            @error('Faculty')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <button role="button"
                            class="w-full py-4 text-sm font-semibold leading-none text-white bg-indigo-700 border rounded focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none hover:bg-indigo-600">SENT
                            A BOOKING REQUEST </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
