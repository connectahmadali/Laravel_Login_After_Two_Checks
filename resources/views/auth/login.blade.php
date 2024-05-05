@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Log in</h3>
            </div>

            @if (session('error'))
                <div class="alert alert-danger mb-4" role="alert">
                    {{ session('error') }}
                </div>
            @endif

            <div class="card-body">
                <!-- Session Status -->
                @if (session('status'))
                    <div class="alert alert-success mb-4" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('auto.login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="email" id="email" class="form-control" placeholder="Email" name="email"
                            :value="old('email')" required autofocus autocomplete="username">
                    </div>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif

                    <!-- Password -->
                    <div class="input-group form-group mt-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" id="password" class="form-control" placeholder="Password" name="password"
                            required autocomplete="current-password">
                    </div>
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" name="remember"
                                class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800">
                            <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="form-group mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                href="{{ route('password.request') }}">
                                {{ __('Reset your password?') }}
                            </a>
                            <div class="d-flex justify-content-center links">
                                Don't have an account?<a href="/register">Sign Up</a>
                            </div>
                        @endif

                        <div class="form-group">
                            <input type="submit" value="Login" class="btn login_btn">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
