@extends('layouts.app')
@section('Style')
    <link rel="stylesheet" href="{{ asset('assets/admin/RideSearche.css') }}">
@endsection

@section('content')
      <div class="container col-8 custom-card">
        <h2 class="mt-3 text-center text-center custom-title">Modification de trajet #{{ $rides->id}}</h2>
        {{-- this form will redirect to the methode of search which will redirect to the view user.rides with the reasult  --}}
        <form class="myform row g-2 mt-1" action="{{ route('admin.RideUpdate',['id'=>$rides->id]) }}" method="POST">
        @csrf
            <div class="col-md-6">
                <label for="conducteur" class="form-label">Condecteur </label>
                <select id="conducteur" name="conducteur" class="form-select" required>
                    <option value="{{$rides->user_id}}">{{$rides->user->firstname}}</option>
                    @foreach ($users as $user)
                        @if ($user->id !== $rides->user_id)
                            <option value="{{$user->id}}">{{$user->firstname}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="departureLocation" class="form-label">Lieu de Départ</label>
                <input type="text" class="form-control" id="departureLocation" name="departureLocation" placeholder="Ex: Ville de départ " value="{{ $rides->depart}}">
            </div>
            <div class="col-md-6">
                <label for="destination" class="form-label">Destination</label>
                <input type="text" class="form-control" id="destination" name="destination" placeholder="Ex: Ville de destination" value="{{ $rides->destination}}">
            </div>
            <div class="col-md-6">
                <label for="departureLocation" class="form-label">Longlitude</label>
                <input type="text" class="form-control" id="longlitude" name="longlitude" placeholder="Votre Longlitude dans maps" value="{{ $rides->longletude}}">
            </div>
            <div class="col-md-6">
                <label for="departureLocation" class="form-label">Latitude</label>
                <input type="text" class="form-control" name="latitude" id="latitude" placeholder="Votre Latitude dans maps"value="{{ $rides->latitude}}">
            </div>
            <div class="col-md-6">
                <label for="departureTime" class="form-label">Heure de Départ</label>
                <input type="text" class="form-control" id="departureTime" name="departureTime"  placeholder="Ex: 08:00 AM"value="{{ $rides->time_depart}}">
            </div>
            <div class="col-md-6">
                <label for="numSeats" class="form-label">Nombre Max des Places</label>
                <input type="number" class="form-control" id="numSeats" name="numSeats" placeholder="Ex: 2"value="{{ $rides->nb_place_max}}">
            </div>
            <div class="col-md-6">
                <label for="Prix" class="form-label">Prix (DA)</label>
                <div class="input-group">
                    <input type="number" class="form-control" id="Prix" name="Prix" placeholder="Ex: 100" value="{{ $rides->price }}">
                    <span class="input-group-text">DA</span>
                </div>
            </div>
            <div class="col-12 mt-1">
                <button type="submit" class="custom-btn">Valide les modification</button>
            </div>
        </form>
    </div>
@endsection
@section('scripte')

@endsection
