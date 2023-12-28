<?php

namespace App\Http\Controllers;

use App\Models\Pooling;
use App\Models\Reservation;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function ListesRides()
    {
        return view('user.Rides');
    }
    public function show()
    {
        $reservations=Reservation::all();
        return view('user.reservedrides',compact('reservations'));
    }


    public function search(Request $request)
    {
        $destination = $request->input('Destination');
        $Depart_time = $request->input('Depart_time');
        $Nb_place = $request->input('Nb_place');
        $Bagage_size = $request->input('Bagage_size');
        $Gender = $request->input('Gender');
        $Longlitude = $request->input('Longlitude');
        $Latitude = $request->input('Latitude');

        $query = Pooling::query();

        // Add conditions based on the search criteria

        if ($destination) {
            $query->where('destination', 'LIKE', '%' . $destination . '%');
        }

        // if ($Depart_time) {
        //     // Convert input date to the database format
        //     $formattedDepartTime = Carbon::createFromFormat('d-m-Y H:i', $Depart_time)->format('Y-m-d H:i');

        //     // Use the converted date in the query
        //     $query->where('time_depart', 'LIKE', '%' . $formattedDepartTime . '%');
        // }

        if ($Nb_place) {
            $query->where('nb_place_available', '>=', $Nb_place);
        }

        if ($Bagage_size) {
            $query->where('bagage_size', 'LIKE', '%' . $Bagage_size . '%');
        }

        if ($Gender) {
            if ($Gender !== 'any') {
                $query->where('gender', 'LIKE', '%' . $Gender . '%');
            }
            else { $query->where('gender', 'LIKE', '%' . 'any' . '%'); }
        }

        if ($Longlitude) {
            $query->whereBetween('longletude', [$Longlitude - 1, $Longlitude + 1]);
        }

        if ($Latitude) {
            $query->whereBetween('latitude', [$Latitude - 1, $Latitude + 1]);
        }


        // Add more conditions as needed

        $rides = $query->get();


        return view('user.ridesresults', compact('rides','Nb_place'));
    }


    public function reserve(string $id , string $userid ,string $places)
    {

        $reservation=new Reservation();
        $reservation->pooling_id=$id;
        $reservation->user_id=$userid ;
        $reservation->save();
        $ride=Pooling::find($id);
        $ride->nb_place_available=($ride->nb_place_available)- $places;
        if($ride->nb_place_available == 0)
        {
            $ride->delete();
        }else{
            $ride->save();
        }
        return redirect()->route('user.reservedrides')->with('success', 'Trajet Réservé');
    }

}

