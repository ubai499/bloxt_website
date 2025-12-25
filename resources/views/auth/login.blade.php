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
                <h4 class="mt-0">Sign In</h4>
                <p class="text-muted mb-4">Enter your email address and password to access account.</p>

                <!-- form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="emailaddress" class="form-label">Email address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            id="emailaddress" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <a href="{{ route('password.request') }}" class="text-muted float-end"><small>Forgot your
                                password?</small></a>
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group input-group-merge">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" id="password"
                                autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="input-group-text" data-password="false">
                                <span class="password-eye"></span>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-signin">
                            <label class="form-check-label" for="checkbox-signin">Remember me</label>
                        </div>
                    </div>
                    <div class="text-center d-grid">
                        <button class="btn btn-primary" type="submit">Log In </button>
                    </div>
                    <br/>
                    <div class="row mb-0">
                        <div>
                            <a class="text-end" style="float:right;" href="{{ route('register') }}">Register</a>
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