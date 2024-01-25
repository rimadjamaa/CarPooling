@extends('layouts.app')

@section('Style')
    <link rel="stylesheet" href="{{ asset('assets/user/RideSearche.css') }}">
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
        .reserve-button {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background-color: #e9426a;
            color: #fff;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px 0px;
            width: 30%;
        }

        .reserve-button:hover {
            background-color: #8a1a84;
        }
        .reserved-button{
            position: absolute;
            bottom: 10px;
            right: 10px;
            background-color: #128818;
            color: #fff;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px 0px;
            width: 30%;
            height: auto;
            font-size: 15px;
        }
    </style>
@endsection

@section('content')
    <br>
    <div class="container col-8 ">
        <a href="{{ route('user.home') }}" style="font-size:1.5rem;justify-content:center;display:flex;margin-top:10px">Retour</a>
        <h2 class="mt-3 text-center text-center custom-title">Liste des Trajets Reserver</h2>
    <br>
        <ul class="ride-list">
            @foreach ($reservations as $reservation)
                <li class="ride-item">
                    <h3>Trajet #{{ $loop->iteration }}</h3>
                    <p>Lieu de Départ: {{ $reservation->pooling->depart}}</p>
                    <p>Destination: {{ $reservation->pooling->destination}}</p>
                    <p>Heure de Départ: {{ $reservation->pooling->time_depart}}</p>
                    <p>Heure Prix: {{ $reservation->pooling->price}}</p>
                    <button class="reserved-button">Réserver Deja</button>
                    <!-- Ajoutez d'autres détails du trajet ici -->
                </li>
            @endforeach


        </ul>
    </div>
@endsection
