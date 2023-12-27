@extends('layouts.app')

@section('Style')
    <link rel="stylesheet" href="{{ asset('assets/admin/RideSearche.css') }}">
@endsection

@section('content')
    <br>
    <div class="container col-8 ">
        <h2 class="text-center custom-title">Liste des Trajets Reservées </h2>
        <ul class="ride-list">
            @foreach($reservations->groupBy('pooling_id') as $groupedReservations)
                @php
                    $firstReservation = $groupedReservations->first();
                @endphp
                <li class="ride-item">
                    <div class="grad-item" >
                        <h3>Trajet #{{ $firstReservation->pooling_id }}</h3>
                        <p>Client(s):
                            @foreach ($groupedReservations as $reservation)
                            - {{ $reservation->user->id }} {{ $reservation->user->firstname }}
                            @endforeach
                        </p>
                        <p>Conducteur: {{ $firstReservation->pooling->user->firstname }}</p>
                        <p>Lieu de Départ: {{ $firstReservation->pooling->depart }}</p>
                        <p>Destination: {{ $firstReservation->pooling->destination }}</p>
                        <p>Heure de Départ: {{ $firstReservation->pooling->time_depart }}</p>
                    </div>
                    <div>
                    <div class="ifarme-container">
                        <iframe src="https://www.google.com/maps?q={{ $firstReservation->pooling->latitude }},{{ $firstReservation->pooling->longletude }}&hl=es;z=14&output=embed"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                    <!-- Ajoutez d'autres détails du trajet ici -->
                </li>
            @endforeach
            <!-- Ajoutez plus de trajets au besoin -->
        </ul>
    </div>
@endsection
@section('scripte')
@endsection
