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
                    <h2 class="mt-2 fs-1 display-5 fw-bold ls-tight" id="carPoolingHeading" style="color: hsl(218, 81%, 95%)">
                        {{ __('CarPooling') }}<br />
                        <span style="color: hsl(218, 81%, 75%)"> {{ __('Partage de trajets, économies garanties!') }}</span>
                    </h2>
                    <img src="{{ asset('assets/img/loginimg.png') }}" alt="vector1" width="70%" height="70%">
                </div>
                <div class="col-lg-6 mb-3 mb-lg-0 position-relative">
                    <!-- Background shapes -->
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass">
                        <div class="card-body px-4 py-4 ">
                            <!-- Login Form px-md-5-->
                            <div id="login" class="tab-content login">
                                <form method="POST" action="{{ route('login') }}" class="text-center">
                                    <h1 class="display-6" style="color: rgb(92, 18, 107); font-size:30px;font-weight:bolder">{{ __('Se connecter') }}</h1>
                                    @csrf
                                    <div class="form-outline mb-4">
                                        <input type="email" id="form3Example3" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" placeholder="Address Email" value="{{ old('email') }}" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="helper-text" data-error="wrong" data-success="right">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <input type="password" id="form3Example4" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" placeholder="Mot de pass" value="{{ old('password') }}" required autofocus>
                                        @if ($errors->has('password'))
                                            <span class="helper-text" data-error="wrong" data-success="right">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <p>
                                        <label>
                                            <input type="checkbox" name="remember" class="filled-in" {{ old('remember') ? 'checked' : '' }} />
                                            <span>{{ __('Remember Me') }}</span> <!--Jnsp kifah y9olo remembre me en français-->
                                        </label>
                                    </p>

                                    <!-- Submit button -->
                                    <button type="submit" style="background-color: #aa51a5;border:none" class="btn btn-primary btn-block mb-4 col-10"> {{ __('Se connecter') }} </button>
                                    <p>{{ __('Vous n’avez pas de compte ?') }} <a style="color:#aa51a5;font-weight:bold" href="{{ route('register') }}" class="tab-link">{{ __('Inscrivez-vous') }}</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('scripte')
<script>

</script>
@endsection

