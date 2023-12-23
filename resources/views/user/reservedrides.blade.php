@extends('layouts.app')

@section('Style')
    <link rel="stylesheet" href="{{ asset('assets/FrontEnd/RideSearche.css') }}">
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
        }
    </style>
@endsection

@section('content')
    <br>
    <div class="text-center mt-3" style="margin-bottom: 20px">
        <a href="{{ url('/user/home') }}" class="btn col-5" style="text-decoration-line:underline; color:blue; font-size:20px ">Retour</a>
    </div>
    <div class="container col-8 ">
        <h2 class="mt-3 text-center text-center custom-title">Liste des Trajets Reserver</h2>
    <br>
        <ul class="ride-list">
            <li class="ride-item">
                <h3>Trajet 1</h3>
                <p>Lieu de Départ: Ville A</p>
                <p>Destination: Ville B</p>
                <p>Heure de Départ: 08:00 AM</p>
                <p>Nombre de Places Disponibles: 3</p>
                <button class="reserved-button">Réserver Deja</button>
                <!-- Ajoutez d'autres détails du trajet ici -->
            </li>

            <li class="ride-item">
                <h3>Trajet 2</h3>
                <p>Lieu de Départ: Ville C</p>
                <p>Destination: Ville D</p>
                <p>Heure de Départ: 09:30 AM</p>
                <p>Nombre de Places Disponibles: 2</p>
                <button class="reserved-button">Réserver Deja</button>
                <!-- Ajoutez d'autres détails du trajet ici -->
            </li>

            <!-- Ajoutez plus de trajets au besoin -->

        </ul>
    </div>
@endsection
