@extends('layouts.app')
@section('Style')
    <link rel="stylesheet" href="{{ asset('assets/driver/RideSearche.css') }}">
@endsection

@section('content')
<div class="container col-8 custom-card">
    <h2 class="mt-3 text-center text-center custom-title">Proposition de Trajet</h2>
    <form methode="POST" action="{{ route('store.ride') }}" class="row g-3 mt-3">
        <div class="col-md-6">
            <label for="departureLocation" class="form-label">Lieu de Départ</label>
            <input type="text" name="Depart" class="form-control" id="departureLocation" placeholder="Ex: Ville de départ">
        </div>
        <div class="col-md-6">
            <label for="destination" class="form-label">Destination</label>
            <input type="text" name="Destination" class="form-control" id="destination" placeholder="Ex: Ville de destination">
        </div>
        <div class="col-md-6">
            <label for="departureLocation" class="form-label">Longlitude</label>
            <input type="text" name="Longlitude" class="form-control" id="longlitude" value="" placeholder="Votre Longlitude dans maps">
        </div>
        <div class="col-md-6">
            <label for="departureLocation" class="form-label">Latitude</label>
            <input type="text" class="form-control" name="Latitude" id="latitude" placeholder="Votre Latitude dans maps">
        </div>
        <div class="col-md-6">
            <label for="departureTime" class="form-label">Heure de Départ</label>
            <input type="text" name="Depart_time" class="form-control" id="departureTime" placeholder="Ex: 08:00 AM">
        </div>
        <div class="col-md-6">
            <label for="numSeats" class="form-label">Nombre des Places</label>
            <input type="number" name="Nb_Place" class="form-control" id="numSeats" placeholder="Ex: 3">
        </div>
        <div class="col-md-6">
            <label for="luggageSize" class="form-label">Taille des Bagages</label>
            <select id="luggageSize" name="Bagage_size" class="form-select">
                <option value="small">Petit</option>
                <option value="medium">Moyen</option>
                <option value="large">Grand</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="preferredGender" class="form-label">Genre Préféré des Co-Voyageurs</label>
            <select id="preferredGender" name="Gender" class="form-select">
                <option value="any">Peu Importe</option>
                <option value="male">Homme</option>
                <option value="female">Femme</option>
            </select>
        </div>
        <div class="col-md-6">
            <label class="form-check-label">Heure de Retour (estimer)</label>
            <input type="text" name="return_time" class="form-control" id="returnTime" placeholder="Ex: 06:00 PM">
        </div>
        <div class="col-md-6">
            <label class="form-check-label">Prix du Trajet</label>
            <input type="text" name="Price" class="form-control" id="price" placeholder="Ex: 20.00">
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
