@extends('layouts.app')

@section('Style')
    <link rel="stylesheet" href="{{ asset('assets/admin/RideSearche.css') }}">
    <style>
        /* Ajoutez vos styles personnalisés ici */
        .ride-list {
            list-style-type: none;
            padding: 0;
        }
        .ride-item {
            position: relative;
            border: 1px solid #e5e5e5;
            border-radius: 10px;
            margin-bottom: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .ride-item:hover {
            transform: scale(1.02);
        }

        .ride-item h3 {
            margin-bottom: 10px;
            color: black;
            font-weight: bolder;
        }

        .ride-item p {
            margin: 0;
            font-size: 15px;
            color: #666;
            display: block;
        }
        .modify-button,
        .delete-button {
            position: absolute;
            bottom: 10px;
            background-color: #e9426a;
            color: #fff;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size:15px;
        }

        .modify-button:hover,
        .delete-button:hover {
            background-color: #792174;
        }

        .modify-button {
            right: 10px;
        }

        .delete-button {
            right: 100px; /* Adjust as needed */
        }
    </style>
@endsection

@section('content')
    <br>
    <div class="container col-8 ">
        <h2 class="mt-3 text-center text-center custom-title">Liste des Trajets Reservées </h2>
        <ul class="ride-list">
            @foreach($reservations->groupBy('pooling_id') as $groupedReservations)
                @php
                    $firstReservation = $groupedReservations->first();
                @endphp 
                <li class="ride-item">
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
                    <p>Nombre Max des Places : {{ $firstReservation->pooling->nb_place_max }}</p>
                    <p>Nombre de Places Disponibles: {{ $firstReservation->pooling->nb_place_available }}</p>
                    <div> 
                        <button class="modify-button"><a class="custom-link" href="{{ route('admin.RideEdit', ['id_reservation' => $firstReservation->pooling_id]) }}">Modifier</a></button>
                        <button class="delete-button">Supprimer</button>

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