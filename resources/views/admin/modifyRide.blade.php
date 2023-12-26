@extends('layouts.app')
@section('Style')
    <link rel="stylesheet" href="{{ asset('assets/admin/RideSearche.css') }}">
@endsection

@section('content')
      <div class="container col-8 custom-card">
        <h2 class="mt-3 text-center text-center custom-title">Modification de trajet #{{ $rides->id}}</h2>
        {{-- this form will redirect to the methode of search which will redirect to the view user.rides with the reasult  --}}
        <form class="myform row g-3 mt-3">
            <div class="col-md-6">
                <label for="conducteur" class="form-label">Condecteur </label>
                <input type="text" class="form-control" id="conducteur" placeholder="Ex: ibrahim " value="{{ $rides->user->firstname}}">
            </div>
            <div class="col-md-6">
                <label for="departureLocation" class="form-label">Lieu de Départ</label>
                <input type="text" class="form-control" id="departureLocation" placeholder="Ex: Ville de départ " value="{{ $rides->depart}}">
            </div>
            <div class="col-md-6">
                <label for="destination" class="form-label">Destination</label>
                <input type="text" class="form-control" id="destination" placeholder="Ex: Ville de destination" value="{{ $rides->destination}}">
            </div>
            <div class="col-md-6">
                <label for="departureLocation" class="form-label">Longlitude</label>
                <input type="text" class="form-control" id="longlitude" placeholder="Votre Longlitude dans maps" value="{{ $rides->longletude}}">
            </div>
            <div class="col-md-6">
                <label for="departureLocation" class="form-label">Latitude</label>
                <input type="text" class="form-control" name="latitude" id="latitude" placeholder="Votre Latitude dans maps"value="{{ $rides->latitude}}">
            </div>
            <div class="col-md-6">
                <label for="departureTime" class="form-label">Heure de Départ</label>
                <input type="text" class="form-control" id="departureTime" placeholder="Ex: 08:00 AM"value="{{ $rides->time_depart}}">
            </div>
            <div class="col-md-6">
                <label for="numSeats" class="form-label">Nombre Max des Places</label>
                <input type="number" class="form-control" id="numSeats" placeholder="Ex: 2"value="{{ $rides->nb_place_max}}">
            </div>
            <div class="col-md-6">
                <label for="Prix" class="form-label"> Prix </label>
                <input type="number" class="form-control" id="Prix" placeholder="Ex: 100"value="{{ $rides->price}}">
            </div>
            <div class="col-12 mt-4">
                <button type="submit" class="custom-btn">Valide les modification</button>
            </div>
        </form>
    </div>
@endsection
@section('scripte')
<script type="text/javascript">

        if (navigator.geolocation) {
                // Demandez la géolocalisation à l'utilisateur
                navigator.geolocation.getCurrentPosition(function (position) {
                    var latitude = position.coords.latitude;
                    var longitude = position.coords.longitude;

                    // Affichez les coordonnées dans le paragraphe
                    document.getElementById('latitude').value = 'Latitude: ' + latitude ;
                    document.getElementById('longlitude').value = 'Longlitude: ' + longitude ;

                    // Remplissez automatiquement le champ de lieu de départ
                    var googleMapsLink = `https://www.google.com/maps?q=${latitude},${longitude}`;

                    // Remplir automatiquement le champ de lieu de départ avec le lien Google Maps
                    document.getElementById('departureLocation').value = googleMapsLink;
                }, function (error) {
                    console.error('Erreur de géolocalisation:', error.message);
                    locationResult.textContent = 'Impossible d\'obtenir la géolocalisation.';
                });

        } else {
            console.error('La géolocalisation n\'est pas prise en charge par ce navigateur.');
            locationResult.textContent = 'La géolocalisation n\'est pas prise en charge par ce navigateur.';
        }
   
</script>
@endsection
