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
            display: grid;
            column-gap: 20px;
            grid-template-columns: 50% 50% ;
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
            background-color: #e9426a;
            color: #fff;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size:15px;
            margin-top:20px;
            padding-left: 40px;
            padding-right: 40px;
        }

        .modify-button:hover,
        .delete-button:hover {
            background-color: #792174;
        }

        .modify-button {
            right: 32px;
        }

        .ifarme-container{
        border: 2px solid #792174;
        width: 90%;
        margin-top:25px;
        }

        iframe {
        width: 100%; 
        height: 100%; 
        }
        .edit {
        display: flex;
        
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
    <div class="container col-8 ">
        <h2 class="mt-3 text-center text-center custom-title">Liste des Trajets </h2>
        <ul class="ride-list">
            @foreach($reservations as $firstReservation)
                <li class="ride-item">
                    <div class="grad-item" >
                        <h3>Trajet #{{ $loop->iteration }}</h3>
                        <p>Conducteur: {{ $firstReservation->user->firstname }}</p>
                        <p>Lieu de Départ: {{ $firstReservation->depart }}</p>
                        <p>Destination: {{ $firstReservation->destination }}</p>
                        <p>Heure de Départ: {{ $firstReservation->time_depart }}</p>
                        <p>Nombre Max des Places : {{ $firstReservation->nb_place_max }}</p>
                        <p>longletude : {{ $firstReservation->longletude }}</p>
                        <p>latitude  : {{ $firstReservation->latitude }}</p>
                        <p>Nombre de Places Disponibles: {{ $firstReservation->nb_place_available }}</p>
                        <p>Prix: {{ $firstReservation->price }} DA </p>
                    </div>
                    <div class="grad-item" style="justify-content-center">
                        <div class="ifarme-container">
                            <iframe src="https://www.google.com/maps?q={{ $firstReservation->latitude }},{{ $firstReservation->longletude }}&hl=es;z=14&output=embed" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div>
                            <a class="custom-link" href="{{ route('admin.RideEdit',['id'=>$firstReservation->id]) }}">
                                <button class="modify-button">Modifier</button>
                            </a>
                            <button class="delete-button">Supprimer</button>
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
