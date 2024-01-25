@extends('layouts.app')
@section('Style')
    <link rel="stylesheet" href="{{ asset('assets/driver/RideSearche.css') }}">
@endsection

@section('content')

@if(session('success'))
<div class="alert alert-success items-center" >
    {{ session('success') }}
</div>
@endif
<div class="grid-content">
    <div class="grid-item">
        <div class="ifarme-container" style="height: 100%;" >
            <iframe id="googleMapIframe" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
<div class="container custom-card">
    <h2 class="mt-3 text-center text-center custom-title">Proposer un Trajet</h2>
    <form method="POST" action="{{ route('store.ride') }}" class="row g-3 mt-3">
        @csrf
        <div class="col-md-6">
            <label for="departureLocation" class="form-label">Lieu de Départ</label>
            <input type="text" name="Depart" class="form-control" id="departureLocation" placeholder="Ex: Alger" required>
        </div>
        <div class="col-md-6">
            <label for="destination" class="form-label">Destination</label>
            <input type="text" name="Destination" class="form-control" id="destination" placeholder="Ex: Anaba" required>
        </div>
        <div class="col-md-6" style="display: none">
            <label for="longlitude" class="form-label">Longlitude</label>
            <input type="text" name="Longlitude" class="form-control" id="longlitude" value="" placeholder="Votre Longlitude dans maps">
        </div>
        <div class="col-md-6" style="display: none">
            <label for="latitude" class="form-label">Latitude</label>
            <input type="text" class="form-control" name="Latitude" id="latitude" placeholder="Votre Latitude dans maps">
        </div>
        <div class="col-md-6">
            <label for="departureTime" class="form-label">Heure de Départ</label>
            <input type="datetime-local" name="Depart_time" class="form-control" id="departureTime" required>
        </div>
        <div class="col-md-6">
            <label for="numSeats" class="form-label">Nombre des Places</label>
            <input type="number" name="Nb_Place" class="form-control" id="numSeats" placeholder="Ex: 3" required>
        </div>
        <div class="col-md-6">
            <label for="luggageSize" class="form-label">Taille des Bagages</label>
            <select id="luggageSize" name="Bagage_size" class="form-select" required>
                <option value="small">Petit</option>
                <option value="medium">Moyen</option>
                <option value="large">Grand</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="preferredGender" class="form-label">Genre Préféré des Co-Voyageurs</label>
            <select id="preferredGender" name="Gender" class="form-select" required>
                <option value="any">Peu Importe</option>
                <option value="male">Homme</option>
                <option value="female">Femme</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="returnTime" class="form-label">Heure de Retour (estimer)</label>
            <input type="datetime-local" name="return_time" class="form-control" id="returnTime" required>

        </div>
        <div class="col-md-6">
            <label for="price" class="form-label">Prix du Trajet (DA)</label>
            <div class="input-group">
                <input type="text" name="Price" class="form-control" id="price" placeholder="Ex: 20$" required>
                <span class="input-group-text">DA</span>
            </div>
        </div>

        <!-- Ajoutez d'autres champs selon vos besoins -->

        <div class="col-12 mt-4">
            <button type="submit" class="custom-btn">Proposer le Trajet</button>
        </div>
    </form>


<br>
    <!-- Liste des trajets proposés -->
    <!-- Vous pouvez utiliser une section séparée ou une modal pour afficher les résultats -->

</div>
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
                    document.getElementById('latitude').value = latitude ;
                    document.getElementById('longlitude').value = longitude ;
                    var googleMapIframe = document.getElementById('googleMapIframe');
                    googleMapIframe.src = `https://www.google.com/maps?q=${latitude},${longitude}&hl=es;z=14&output=embed`;

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
