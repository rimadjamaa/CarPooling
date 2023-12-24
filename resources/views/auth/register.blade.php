'@extends('layouts.app')
@section('Style')
 <link rel="stylesheet" href="{{ asset('assets/auth/style.css') }}">

@endsection
@section('content')
<!-- Page disgn  -->
<div class="row">
    <section class="background-radial-gradient overflow-hidden" style="height: 87vh;" >
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
                        <!-- Sign Up Form -->
                            <div id="signup" class="tab-content signup">
                                <h1 class="display-6">{{ __('Sign Up') }}</h1>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row">
                                        <!-- First Name input -->
                                        <div class="col-md-6 mb-2">
                                            <div class="form-outline">
                                                <input type="text" id="form3Example1" class="form-control @error('firstname') is-invalid @enderror" name="firstname" placeholder="First name"/>
                                                @error('firstname')
                                                    <span class="helper-text" data-error="wrong" data-success="right">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Last Name input -->
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" id="form3Example2" class="form-control @error('lastname') is-invalid @enderror" name="lastname" placeholder="Last name" />
                                                @error('lastname')
                                                    <span class="helper-text" data-error="wrong" data-success="right">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Matricule input -->
                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example3" class="form-control @error('matricule') is-invalid @enderror" name="matricule" placeholder="Matricule" />
                                        @error('matricule')
                                            <span class="helper-text" data-error="wrong" data-success="right">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Phone number input -->
                                    <div class="form-outline mb-4">
                                        <input type="tel" id="form3Example4" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" placeholder="Phone number"/>
                                        @error('phoneNumber')
                                            <span class="helper-text" data-error="wrong" data-success="right">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <input type="email" id="form3Example5" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Address"/>
                                        @error('email')
                                            <span class="helper-text" data-error="wrong" data-success="right">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <input type="password" id="form3Example6" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password"/>
                                        @error('password')
                                            <span class="helper-text" data-error="wrong" data-success="right">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <!-- Role selection labels with increased width and height in the same line -->
                                        <div class="mb-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" value="driver" id="roleDriver" name="role">
                                                <label class="form-check-label btn custom-label btn-outline-primary" for="roleDriver">
                                                    {{ __('Driver') }}
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" value="consumer" id="roleConsumer" name="role">
                                                <label class="form-check-label btn custom-label btn-outline-primary" for="roleConsumer">
                                                    {{ __('Consumer') }}
                                                </label>
                                            </div>
                                        </div>
                                        <!-- Submit button -->
                                    <button type="submit" class="btn btn-block mb-4" style="color: #fff; background-color: #3d5861; border-color: #117a8b; width: 100%;">
                                        {{ __('Sign up') }}
                                    </button>

                                        <h6>
                                            {{ __('  Already have an account?') }} 
                                            <a href="{{ route('login') }}" class="tab-link">{{ __('Login') }}</a>
                                        </h6>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</div>
@endsection
@section('scripte')
<script>

document.addEventListener("DOMContentLoaded", function () {
        document.location.hash = document.location.hash || 'signup';
    });
// title animation
    $(document).ready(function() {
            // Show the heading with a fade-in and upward movement effect
        $('#carPoolingHeading').removeClass('d-none').hide().addClass('animate__fadeInUp').fadeIn(1000);
    });
</script>
@endsection
