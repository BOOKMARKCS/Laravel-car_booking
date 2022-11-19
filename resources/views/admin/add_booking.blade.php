@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="/store">
        @csrf
        <!-- component -->
        {{-- RESERVATION NAME --}}
        <div class="max-w-4xl py-4 mx-auto bg-white rounded-xl px-9 ">
            <div class="mb-3 -mx-3 md:flex">
                <div class="px-3 md:w-full"> <label
                        class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker" for="name">
                        Reservation name
                    </label>
                    <input
                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 form-control @error('name') is-invalid @enderror"
                        id="name" name="name" type="text" value="{{ old('name') }}"
                        placeholder="Reservation name.">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            {{-- ORIGIN --}}
            <div class="mb-3 -mx-3 md:flex">
                <div class="px-3 md:w-full"> <label
                    class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker"
                        for="origin">
                        Origin
                    </label>
                    <input
                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 form-control @error('origin') is-invalid @enderror"
                        id="origin" name="origin" type="text" value="{{ old('origin') }}"
                        placeholder="Origin">
                    @error('origin')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            {{-- DEPARTURE TIME --}}
            <div class="mb-3 -mx-3 md:flex">
                <div class="px-3 md:w-1/2 md:mb-0">
                    <label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker"
                        for="grid-first-name">
                        Date
                    </label>
                    <input
                        class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red"
                        id="d_date" name="d_date" type="date">
                </div>
                <div class="px-3 md:w-1/2">
                    <label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker"
                        for="grid-last-name">
                        Time
                    </label>
                    <input
                        class="block w-full px-4 py-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-grey-lighter"
                        id="d_time" name="d_time" type="time">
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
                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 form-control @error('destination') is-invalid @enderror"
                        id="destination" name="destination" type="text" placeholder="Destination">
                    @error('destination')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            {{-- RETURN TIME --}}
            <div class="mb-3 -mx-3 md:flex">
                <div class="px-3 md:w-1/2 md:mb-0">
                    <label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker"
                        for="grid-first-name">
                        Date
                    </label>
                    <input
                        class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red"
                        id="r_date" name="r_date" type="date">
                </div>
                <div class="px-3 md:w-1/2">
                    <label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker"
                        for="grid-last-name">
                        Time
                    </label>
                    <input
                        class="block w-full px-4 py-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-grey-lighter"
                        id="r_time" name="r_time" type="time">
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
                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 form-control @error('numbers') is-invalid @enderror"
                        id="numbers" name="numbers" type="number" placeholder="Number passenger">
                    @error('numbers')
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
@endsection
