@extends('layouts.app')
@section('content')
    <div class="auth-fluid">
        <!--Auth fluid left content -->
        <div class="auth-fluid-form-box">
            <div class="align-items-center d-flex h-100">
                <div class="p-3">

                    <!-- Logo -->
                    <div class="auth-brand text-center text-lg-start">
                        <div class="auth-brand">
                            <a href="{{ url('/') }}" class="logo logo-dark text-center">
                               <div class="logo">
                                <a href="{{url('/')}}" class="header-logo">
                                    <img src="{{asset('assets/img/logo/final_logo.png')}}" alt="logo-img" style="width:120px;">
                                </a>
                            </div>
                            </a>
                        </div>
                    </div>

                    <!-- title-->
                    <h4 class="mt-0">Recover Password</h4>
                    <p class="text-muted mb-4">Enter your email address and we'll send you an email with instructions to
                        reset your password.</p>

                    <!-- form -->
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="emailaddress" class="form-label">Email address</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" id="emailaddress" required autocomplete="email"
                                autofocus>
                            @error('email')
                                <span class="invalid-feedback text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="text-center d-grid">
                            <button class="btn btn-primary waves-effect waves-light" type="submit">
                                {{ __('Send Password Reset Link') }}</button>
                        </div>

                    </form>
                    <!-- end form-->

                    <!-- Footer-->
                    <footer class="footer footer-alt">
                        <p class="text-muted">Back to <a href="{{ route('login') }}" class="text-muted ms-1"><b>Log
                                    in</b></a></p>
                    </footer>

                </div>
                <!-- end .card-body -->
            </div>
            <!-- end .align-items-center.d-flex.h-100-->
        </div>
        <!-- end auth-fluid-form-box-->

        <!-- Auth fluid right content -->
        <div class="auth-fluid-right text-center">
            <div class="auth-user-testimonial">
                <h2 class="mb-3 text-white">I love the color!</h2>
                <p class="lead"><i class="mdi mdi-format-quote-open"></i> I've been using your theme from the previous
                    developer for our web app, once I knew new version is out, I immediately bought with no hesitation.
                    Great themes, good documentation with lots of customization
                    available and sample app that really fit our need. <i class="mdi mdi-format-quote-close"></i>
                </p>
                <h5 class="text-white">
                    - Fadlisaad (Bloxt Admin User)
                </h5>
            </div>
            <!-- end auth-user-testimonial-->
        </div>
        <!-- end Auth fluid right content -->
    </div>
@endsection
