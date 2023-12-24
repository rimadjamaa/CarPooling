@extends('layouts.app')
@section('Style')
    <link rel="stylesheet" href="{{ asset('assets/auth/style.css') }}">
@endsection
@section('content')
 <!-- Page disgn  -->
<div class="row">
    <section class="background-radial-gradient overflow-hidden" style="height: 87vh;">
        <div class="container text-center text-lg-start">
            <div class="row gx-lg-5 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="mt-2 fs-1 display-5 fw-bold ls-tight animate__animated animate__fadeInUp" id="carPoolingHeading" style="color: hsl(218, 81%, 95%)">
                        {{ __('CarPooling') }}<br />
                        <span style="color: hsl(218, 81%, 75%)"> {{ __('Share rides and save money') }}</span>
                    </h1>
                    <img src="{{ asset('assets/img/loginimg.png') }}" alt="vector1" width="70%" height="70%">
                </div>
                <div class="col-lg-6 mb-3 mb-lg-0 position-relative">
                    <!-- Background shapes -->
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass">
                        <div class="card-body px-4 py-4 px-md-5">
                            <!-- Login Form -->
                            <div id="login" class="tab-content login">
                                <h1 class="display-6">{{ __('Login') }}</h1>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-outline mb-4">
                                        <input type="email" id="form3Example3" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" placeholder="Email address" value="{{ old('email') }}" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="helper-text" data-error="wrong" data-success="right">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <input type="password" id="form3Example4" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" placeholder="Password" value="{{ old('password') }}" required autofocus>
                                        @if ($errors->has('password'))
                                            <span class="helper-text" data-error="wrong" data-success="right">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <br>
                                    <p>
                                        <label>
                                            <input type="checkbox" name="remember" class="filled-in" {{ old('remember') ? 'checked' : '' }} />
                                            <span>{{ __('Remember Me') }}</span>
                                        </label>
                                    </p>
                                    <br>
                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-primary btn-block mb-4"> {{ __('Login') }} </button>
                                    <p>{{ __('Do not have an account?') }} <a href="{{ route('register') }}" class="tab-link">{{ __('Sign up') }}</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


@section('scripte')
<script>
// function to set the default form on page load
    document.addEventListener("DOMContentLoaded", function () {
        document.location.hash = document.location.hash || 'login';
    });

// title animation
    $(document).ready(function() {
            // Show the heading with a fade-in and upward movement effect
        $('#carPoolingHeading').removeClass('d-none').hide().addClass('animate__fadeInUp').fadeIn(1000);
    });
</script>
@endsection
@endsection