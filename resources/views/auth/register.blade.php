@extends('layouts.app')
@section('Style')
 <link rel="stylesheet" href="{{ asset('assets/auth/style.css') }}">


@endsection
@section('content')
<!-- Page disgn  -->
<div class="row">
    <section class="background-radial-gradient overflow-hidden" style="padding: 20px;" >
        <div class="container text-center text-lg-start">
            <div class="row gx-lg-5 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                <h1 class="mt-2 fs-1 display-5 fw-bold ls-tight animate__animated animate__fadeInUp" id="carPoolingHeading" style="color: hsl(218, 81%, 95%)">
                        {{ __('CarPooling') }}<br />
                        <span style="color: hsl(218, 81%, 75%)"> {{ __('Partage de trajets, économies garanties!') }}</span>
                    </h1>
                    <img src="{{ asset('assets/img/loginimg.png') }}" alt="vector1" width="70%" height="70%">
                </div>
                <div class="col-lg-6 mb-3 mb-lg-0 position-relative">
                    <!-- Background shapes -->
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass">
                        <div class="card-body px-4 py-4 px-md-3">
                         <!-- Sign Up Form -->
                            <div id="signup" class="tab-content signup">
                                <form method="POST" action="{{ route('register') }}" class="text-center">
                                    @csrf
                                    <h1 class="display-6" style="color: rgb(92, 18, 107); font-size:30px;font-weight:bolder">{{ __('Inscrivez-vous') }}</h1>
                                    <div class="row">
                                        <!-- First Name input -->
                                        <div class="col-md-6 mb-2">
                                            <div class="form-outline">
                                                <input type="text" id="form3Example1" class="form-control @error('firstname') is-invalid @enderror" name="firstname" placeholder="Prénom" required/>
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
                                                <input type="text" id="form3Example2" class="form-control @error('lastname') is-invalid @enderror" name="lastname" placeholder="Nom" required/>
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
                                        <input type="text" id="form3Example3" class="form-control @error('matricule') is-invalid @enderror" name="matricule" placeholder="Matricule" required/>
                                        @error('matricule')
                                            <span class="helper-text" data-error="wrong" data-success="right">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Phone number input -->
                                    <div class="form-outline mb-4">
                                        <input type="tel" id="form3Example4" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" placeholder="Numéro mobile" required/>
                                        @error('phoneNumber')
                                            <span class="helper-text" data-error="wrong" data-success="right">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <input type="email" id="form3Example5" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email " required/>
                                        @error('email')
                                            <span class="helper-text" data-error="wrong" data-success="right">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    {{-- Gender input  --}}
                                    <div class="form-outline mb-4">
                                        <select class="form-control" id="gender" name="gender" required>
                                            <option value="femme" {{ old('gender') == 'femme' ? 'selected' : '' }}>Femme</option>
                                            <option value="homme" {{ old('gender') == 'homme' ? 'selected' : '' }}>Homme</option>
                                        </select>
                                        @error('gender')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <input type="password" id="form3Example6" class="form-control" name="password" placeholder="Mot de pass" required/>

                                    </div>
                                    <!-- Role selection labels with increased width and height in the same line -->
                                    <div class="row justify-content-center">
                                    <div class="col-4 mb-4 form-check ">
                                        <input class=" @error('role') is-invalid @enderror" type="radio" name="role" id="role1" value="driver">
                                        <label class="custom-label" for="role1">Conducteur</label>
                                        @error('role')
                                            <span class="helper-text" style="width: auto;height:auto;font-size:20px;" data-error="wrong" data-success="right">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-4 mb-4 form-check">
                                        <input class=" @error('role') is-invalid @enderror" type="radio" name="role" id="role2" value="client" checked style="background-color: #aa51a5">
                                        <label class="custom-label" for="role2">Client</label>
                                        @error('role')
                                            <span class="helper-text" data-error="wrong" data-success="right">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    </div>
                                    <!-- Submit button -->
                                    <button type="submit" style="background-color: #aa51a5;border:none" class="btn btn-primary btn-block mb-4 col-10">
                                        {{ __('S’inscrire') }}
                                    </button>
                                    <br>
                                    <p class="mb-4" style="color: blue;">{{ __('Vous avez un compte ?') }} <a style="color:#aa51a5;font-weight:bold" href="{{ route('login') }}" class="tab-link">{{ __('Connectez-vous') }}</a></p>

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

