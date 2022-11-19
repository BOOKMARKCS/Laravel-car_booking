@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <form method="POST" action="{{ 'create_car' }}">
                @csrf
                <!-- component -->
                {{-- RESERVATION NAME --}}
                <div class="grid max-w-4xl grid-cols-2 py-4 mx-auto bg-white rounded-xl px-9">
                    <div class="mb-3 -mx-3 md:flex">
                        <div class="px-3 md:w-full"> <label
                                class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker" for="name">
                                Car registration
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 form-control @error('car_registration') is-invalid @enderror"
                                id="car_registration" name="car_registration" type="text"
                                value="{{ old('car_registration') }}" placeholder="Reservation name.">
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
                                Model
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 form-control @error('model') is-invalid @enderror"
                                id="model" name="model" type="text" value="{{ old('model') }}"
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
                                Color
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 form-control @error('color') is-invalid @enderror"
                                id="color" name="color" value="{{old('color')}}" type="text" placeholder="Color">
                            @error('color')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- NUMBER PASSENGERS --}}
                    <div class="mb-3 -mx-3 md:flex">
                        <div class="px-3 md:w-full">
                            <label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker"
                                for="type">
                                Type
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 form-control @error('type') is-invalid @enderror"
                                id="type" name="type" value="{{ old('type') }}" type="text" placeholder="Type">
                            @error('type')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- NUMBER PASSENGERS --}}
                    <div class="mb-3 -mx-3 md:flex">
                        <div class="px-3 md:w-full">
                            <label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker"
                                for="Acr date">
                                Acr date
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 form-control @error('acr_date') is-invalid @enderror"
                                id="acr_date" name="acr_date" value="{{ old('acr_date') }}" type="text" placeholder="Acr_date">
                            @error('acr_date')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- NUMBER PASSENGERS --}}
                    <div class="mb-3 -mx-3 md:flex">
                        <div class="px-3 md:w-full">
                            <label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker"
                                for="act_expiration_date">
                                act_expiration_date
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 form-control @error('act_expiration_date') is-invalid @enderror"
                                id="act_expiration_date" value="{{ old('act_expiration_date') }}" name="act_expiration_date" type="text"
                                placeholder="Act expiration date">
                            @error('act_expiration_date')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 -mx-3 md:flex">
                        <div class="px-3 md:w-full">
                            <label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker"
                                for="Oil">
                                Oil
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 form-control @error('act_expiration_date') is-invalid @enderror"
                                id="oil" name="oil" value="{{ old('oil') }}}" type="text" placeholder="oil">
                            @error('oil')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 -mx-3 md:flex">
                        <div class="px-3 md:w-full">
                            <label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker"
                                for="image">
                                image
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 form-control @error('act_expiration_date') is-invalid @enderror"
                                id="image" name="image" value="{{ old('image') }}" type="text" placeholder="image">
                            @error('image')
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
