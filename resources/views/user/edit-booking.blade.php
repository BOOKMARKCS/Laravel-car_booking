@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row  justify-content-center">

            <form action="/update-booking/{{ $booking->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!-- component -->
                {{-- RESERVATION NAME --}}
                <div class="max-w-4xl mx-auto bg-white rounded-xl px-9 py-4 ">
                    <div class="-mx-3 md:flex mb-3">
                        <div class="md:w-full px-3"> <label
                                class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="name">
                                Reservation name
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                                id="name" name="name" type="text" value="{{ $booking->name }}" placeholder="Reservation name.">
                        </div>
                    </div>
                    {{-- ORIGIN --}}
                    <div class="-mx-3 md:flex mb-3">
                        <div class="md:w-full px-3"> <label
                                class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                for="name">
                                Origin
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                                id="origin" name="origin" type="text" value="{{ $booking->origin }}" placeholder="Origin">
                        </div>
                    </div>
                    {{-- DEPARTURE TIME --}}
                    <div class="-mx-3 md:flex mb-3">
                        <div class="md:w-full px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                for="grid-first-name">
                                Date
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                                id="dt_origin" name="dt_origin" type="datetime-local" value="{{ date('Y-m-d H:i:s', strtotime($booking->dt_origin)) }}">
                        </div>
                    </div>
                    {{-- DESTINATION --}}
                    <div class="-mx-3 md:flex mb-3">
                        <div class="md:w-full px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                for="grid-password">
                                Destination
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                                id="destination" name="destination" value="{{ $booking->destination }}" type="text" placeholder="Destination">
                        </div>
                    </div>
                    {{-- RETURN TIME --}}
                    <div class="-mx-3 md:flex mb-3">
                        <div class="md:w-full px-3 ">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                for="grid-first-name">
                                Date
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                                id="dt_destination" name="dt_destination" value="{{ date('Y-m-d H:i:s', strtotime($booking->dt_destination)) }}" type="datetime-local">
                        </div>

                    </div>
                    {{-- NUMBER PASSENGERS --}}
                    <div class="-mx-3 md:flex mb-3">
                        <div class="md:w-full px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                for="grid-password">
                                Number passenger
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                                id="numbers" name="numbers" type="number" value="{{ $booking->numbers }}" placeholder="Number passenger">
                        </div>
                    </div>

                    <div>
                        <button type="submit" role="button"
                            class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 text-sm font-semibold leading-none text-white focus:outline-none bg-indigo-700 border rounded hover:bg-indigo-600 py-4 w-full">SENT
                            A BOOKING REQUEST </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
