@extends('layouts.app')

@section('content')

    <div class="auth-fluid">
        <div class="auth-fluid-form-box">
            <div class="align-items-center d-flex h-100">
                <div class="p-3">

                    <!-- Logo -->
                    <div class="auth-brand text-center text-lg-start">
                        <div class="auth-brand">
                            <a href="{{ url('/') }}" class="logo logo-dark text-center">
                                <div class="logo">
                                    <a href="{{url('/')}}" class="header-logo">
                                        <img src="{{ asset('assets/img/logo/logo5.webp') }}" alt="logo-img"
                                            style="width:120px;"></a>
                            </a>
                        </div>
                        </a>
                    </div>
                </div>

                <!-- title-->
                <h4 class="mt-0">Register</h4>
                <p class="text-muted mb-4">Enter your email address and password to create your account.</p>

                <!-- form -->
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="name">{{ __('Name') }}</label>

                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="email">{{ __('Email Address') }}</label>

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="password">{{ __('Password') }}</label>

                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="password-confirm">{{ __('Confirm Password') }}</label>

                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password">
                    </div>

                    <div class="text-center d-grid">
                        <button class="btn btn-primary" type="submit">Register </button>
                    </div>
                    <br/>
                    <div class="row mb-0">
                        <div>
                            <a class="text-end" style="float:right;" href="{{ route('login') }}">Login</a>
                        </div>
                    </div>
                </form>
                <!-- end form-->


            </div>
            <!-- end .card-body -->
        </div>
        <!-- end .align-items-center.d-flex.h-100-->
    </div>
    <!-- end auth-fluid-form-box-->

    <!-- Auth fluid right content -->
    <!-- end Auth fluid right content -->
    </div>
    <!-- end auth-fluid-->
@endsection