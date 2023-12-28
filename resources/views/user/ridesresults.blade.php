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
        .reserved-button{
            background-color: #128818;
            color: #fff;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px 0px;
            width:40%;
            height: auto;
            font-size: 15px;
        }
        .alert{
            font-size: 25px;
            text-align: center;
            font-weight: bold;
            border:2px solid #e9426a!important;
            background-color: rgb(236, 220, 220) !important;
            color: #e9426a !important;
            width: 50%;
            margin: auto;

}
    </style>
@endsection

@section('content')
    <br>

    @if(session('success'))
<div class="alert alert-success items-center" >
    {{ session('success') }}
</div>
@endif


    <div class="container col-8 ">
        <h2 class="mt-3 text-center text-center custom-title">Resultats de Recherche</h2>

        <ul class="ride-list">
        @forelse ($rides as $ride)
            <li class="ride-item" style="position: relative">
                <div class="items">
                <h3>Trajet #{{ $loop->iteration }}</h3>
                <p>Nom Conducteur: {{ $ride->user->firstname }}</p>
                <p>Numero Tel du Conducteur: {{ $ride->user->phone_number }}</p>
                <p>Destination: {{ $ride->destination }}</p>
                <p>Prix de Trajet: {{ $ride->price }}$</p>
                <a href="{{route('user.ridereserve' ,  ['id' => $ride->id, 'userid' => Auth::user()->id , 'Nb_place' => $Nb_place] )}} " ><button class="reserved-button">Réserver Trajet</button></a>
                </div>
                <div class="ifarme-container">
                <iframe src="https://www.google.com/maps?q={{ $ride->latitude }},{{ $ride->longletude }}&hl=es;z=14&output=embed"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </li>
            @empty
            <p>No rides available.</p>
            @endforelse

            <!-- Ajoutez plus de trajets au besoin -->

        </ul>
    </div>
@endsection
