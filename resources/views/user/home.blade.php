@extends('layouts.app')
@section('Style')
    <link rel="stylesheet" href="{{ asset('build/assets/FrontEnd/RideSearche.css') }}">
@endsection

@section('content')
<div class="container col-8 custom-card">
    <h2 class="mt-3 text-center text-center custom-title">Recherche de Trajet</h2>
    <form class="row g-3 mt-3">
        <div class="col-md-6">
            <label for="departureLocation" class="form-label">Lieu de Départ</label>
            <input type="text" class="form-control" id="departureLocation" placeholder="Ex: Ville de départ">
        </div>
        <div class="col-md-6">
            <label for="destination" class="form-label">Destination</label>
            <input type="text" class="form-control" id="destination" placeholder="Ex: Ville de destination">
        </div>
        <div class="col-md-6">
            <label for="departureTime" class="form-label">Heure de Départ</label>
            <input type="text" class="form-control" id="departureTime" placeholder="Ex: 08:00 AM">
        </div>
        <div class="col-md-6">
            <label for="numSeats" class="form-label">Nombre de Places</label>
            <input type="number" class="form-control" id="numSeats" placeholder="Ex: 2">
        </div>
        <div class="col-md-6">
            <label for="luggageSize" class="form-label">Taille des Bagages</label>
            <select id="luggageSize" class="form-select">
                <option value="small">Petit</option>
                <option value="medium">Moyen</option>
                <option value="large">Grand</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="preferredGender" class="form-label">Genre Préféré des Co-Voyageurs</label>
            <select id="preferredGender" class="form-select">
                <option value="any">Peu Importe</option>
                <option value="male">Homme</option>
                <option value="female">Femme</option>
            </select>
        </div>
        <div class="col-md-6">
            <label class="form-check-label">Heure de Départ Flexible</label>
            <input type="checkbox" class="form-check-input" id="flexibleDeparture">
        </div>
        <div class="col-md-6">
            <label class="form-check-label">Accepter les Détours</label>
            <input type="checkbox" class="form-check-input" id="acceptDetours">
        </div>

        <div class="col-12 mt-4">
            <button type="submit" class="custom-btn">Rechercher</button>
        </div>
    </form>

    <!-- Display the search results here -->
    <!-- You can use a separate section or modal to show the results -->

</div>
@endsection
