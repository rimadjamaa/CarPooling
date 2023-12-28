@extends('layouts.app')

@section('Style')
    <link rel="stylesheet" href="{{ asset('assets/driver/RideSearche.css') }}">
    <style>
        /* Ajoutez vos styles personnalisés ici */
        .ride-list {
            list-style-type: none;
            padding: 0;
        }

        .ride-item {
            position: relative;
            display: grid;
            column-gap: 20px;
            grid-template-columns: 40% 60% ;
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
            background-color: #792174;
        }
        .ifarme-container{

            border: 2px solid #792174;
            width: 90%;
        }
        iframe {
            width: 100%; /* Set the width as needed */
            height: 100%; /* Set the height as needed */
        }
        .modify-button,
        .delete-button {
            background-color: #e9426a;
            color: #fff;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size:15px;
            margin-top:20px;
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
    @if(session('success'))
    <div class="alert alert-success items-center" >
        {{ session('success') }}
    </div>
    @endif
    <br>
    <div class="text-center mt-3" style="margin-bottom: 20px">
        <a href="{{ url('/driver/home') }}" class="btn col-5" style="text-decoration-line:underline; color:blue; font-size:20px ">Retour</a>
    </div>
    <br>
    <div class="container col-8 ">
        <h2 class="text-center text-center custom-title" style="margin-top: 50px;margin-bottom:20px">Vos Trajets Proposer</h2>
        <ul class="ride-list">
            @forelse ($rides as $ride)
            <li class="ride-item" style="position: relative">
                <div class="items grid-item">
                <h3>Trajet #{{ $loop->iteration }}</h3>
                <p>Lieu de Départ: {{ $ride->depart }}</p>
                <p>Destination: {{ $ride->destination }}</p>
                <p>Heure de Départ: {{ $ride->time_depart }}</p>
                <p>Nombre de Places Disponibles: {{ $ride->nb_place_available }}</p>
                <a class="custom-link" href="{{ route('driver.RideDelete',['id'=>$ride->id]) }}">
                    <button class="delete-button" style="font-size: 15px">Supprimer</button>
                </a>
                </div>
                <div class="grid-item">
                    <div class="ifarme-container">
                    <iframe src="https://www.google.com/maps?q={{ $ride->latitude }},{{ $ride->longletude }}&hl=es;z=14&output=embed"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>
            </li>
            @empty
            <p>No rides available.</p>
            @endforelse

        </ul>
    </div>
@endsection

