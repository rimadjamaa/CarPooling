@extends('layouts.app')
@section('Style')
    <link rel="stylesheet" href="{{ asset('assets/user/RideSearche.css') }}">
@endsection

@section('content')
<div class="grid-content">
<div class="grid-item">
    <div class="ifarme-container" style="height: 100%;" >
        <iframe id="googleMapIframe" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<div class="container custom-card grid-item">
    <h2 class="mt-3 text-center text-center custom-title">Rechercher un Trajet</h2>
    {{-- this form will redirect to the methode of search which will redirect to the view user.rides with the reasult  --}}
    <form method="GET" action="{{route('user.ridesearch')}}" class="myform row g-3 mt-3">
        <div class="col-md-6">
            <label for="departureLocation" class="form-label">Lieu de Départ</label>
            <input type="text" name="Depart" class="form-control" id="departureLocation" placeholder="Ex: Ville de départ">
        </div>
        <div class="col-md-6">
            <label for="destination" class="form-label">Destination</label>
            <input type="text" name="Destination" class="form-control" id="destination" value="" placeholder="Ex: Ville de destination">
        </div>
        <div class="col-md-6" style="display: none">
            <label for="departureLocation" class="form-label">Longlitude</label>
            <input type="text" name="Longlitude" class="form-control" id="longlitude" value="" placeholder="Votre Longlitude dans maps">
        </div>
        <div class="col-md-6" style="display: none">
            <label for="departureLocation" class="form-label">Latitude</label>
            <input type="text" name="Latitude" class="form-control" name="latitude" id="latitude" placeholder="Votre Latitude dans maps">
        </div>
        <div class="col-md-6">
            <label for="departureTime" class="form-label">Heure de Départ</label>
            <input type="datetime-local" name="Depart_time" class="form-control" id="departureTime" required>
        </div>
        <div class="col-md-6">
            <label for="numSeats" class="form-label">Nombre de Places</label>
            <input type="number" name="Nb_place" class="form-control" id="numSeats" placeholder="Ex: 2">
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
        <div class="col-12 mt-4">
            <button type="submit" class="custom-btn">Rechercher</button>
        </div>
    </form>

    <!-- Display the search results here -->
    <!-- You can use a separate section or modal to show the results -->

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
                    // Remplissez automatiquement le champ de lieu de départ
                    // var googleMapsLink = `https://www.google.com/maps?q=${latitude},${longitude}`;

                    // Remplir automatiquement le champ de lieu de départ avec le lien Google Maps
                    // document.getElementById('departureLocation').value = googleMapsLink;
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
