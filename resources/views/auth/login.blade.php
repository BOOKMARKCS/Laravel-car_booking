@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="">
                <div class="">
                    <!-- component -->
                    <div class="max-w-lg mx-auto my-10 bg-white p-8 rounded-xl shadow shadow-slate-300">
                        <h1 class="text-4xl font-medium">Login</h1>
                        <p class="text-slate-500">Hi, Welcome back</p>


                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="flex flex-col space-y-5 my-5">
                                <label for="email">
                                    <p class="font-medium text-slate-700 pb-2">Email address</p>
                                    <input id="email" name="email" type="email" value="{{ old('email') }}"
                                        class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow @error('email') is-invalid @enderror"
                                        placeholder="Enter email address" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </label>
                                <label for="password">
                                    <p class="font-medium text-slate-700 pb-2">Password</p>
                                    <input id="password" name="password" type="password"
                                        class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow @error('password') is-invalid @enderror"
                                        placeholder="Enter your password" required autocomplete="current-password">


                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </label>
                                <div class="flex flex-row justify-between">
                                    <div>
                                        <label for="remember" class="">
                                            <input type="checkbox" id="remember" name="remember"
                                                class="w-4 h-4 border-slate-200 focus:bg-indigo-600"
                                                {{ old('remember') ? 'checked' : '' }}>
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                    <div>
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="font-medium text-indigo-600">
                                                {{ __('Forgot Your Password?') }}</a>
                                        @endif

                                    </div>
                                </div>
                                <button
                                    class="w-full py-3 font-medium text-white bg-indigo-600 hover:bg-indigo-500 rounded-lg border-indigo-500 hover:shadow inline-flex space-x-2 items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                                    </svg>
                                    <span> {{ __('Login') }}</span>
                                </button>
                                <p class="text-center">Not registered yet? <a href="{{ route('register') }}"
                                        class="text-indigo-600 font-medium inline-flex space-x-1 items-center"><span>Register
                                            now </span><span><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                            </svg></span></a></p>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
