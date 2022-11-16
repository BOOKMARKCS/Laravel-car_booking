@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row  justify-content-center">
            <form action="">
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
                                id="name" type="text" placeholder="Reservation name.">
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
                                id="origin" type="text" placeholder="Origin">
                        </div>
                    </div>
                    {{-- DEPARTURE TIME --}}
                    <div class="-mx-3 md:flex mb-3">
                        <div class="md:w-1/2 px-3  md:mb-0">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                for="grid-first-name">
                                Date
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                                id="d_date" type="date">
                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                for="grid-last-name">
                                Time
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                id="d_time" type="time">
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
                                id="destination" type="text" placeholder="Destination">
                        </div>
                    </div>
                    {{-- RETURN TIME --}}
                    <div class="-mx-3 md:flex mb-3">
                        <div class="md:w-1/2 px-3 md:mb-0">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                for="grid-first-name">
                                Date
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                                id="r_date" type="date">
                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                for="grid-last-name">
                                Time
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                id="r_time" type="time">
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
                                id="number_p" type="number" placeholder="Number passenger">
                        </div>
                    </div>

                    <div>
                        <button role="button"
                            class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 text-sm font-semibold leading-none text-white focus:outline-none bg-indigo-700 border rounded hover:bg-indigo-600 py-4 w-full">SENT
                            A BOOKING REQUEST </button>
                    </div>

                    {{-- <div class="-mx-3 md:flex mb-2">
                    <div class="md:w-1/2 px-3 mb-3 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                        for="grid-city">
                        City
                    </label>
                    <input
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                    id="grid-city" type="text" placeholder="Albuquerque">
                </div>
                <div class="md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                    for="grid-state">
                    State
                </label>
                <div class="relative">
                            <select
                                class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded"
                                id="grid-state">
                                <option>New Mexico</option>
                                <option>Missouri</option>
                                <option>Texas</option>
                            </select>
                            <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">
                            Zip
                        </label>
                        <input
                            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                            id="grid-zip" type="text" placeholder="90210">
                    </div>
                </div> --}}
                </div>
            </form>
        </div>
    </div>
@endsection
