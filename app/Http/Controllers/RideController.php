<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Pooling;
use App\Models\Reservation;
use Illuminate\Http\Request;

class RideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

       //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ride=new Pooling();
        $ride->depart=$request->Depart;
        $ride->destination=$request->Destination;
        $ride->longletude=$request->Longlitude;
        $ride->latitude=$request->Latitude;
        $ride->time_depart=$request->Depart_time;
        $ride->nb_place_max=$request->Nb_Place;
        $ride->bagage_size=$request->Bagage_size;
        $ride->gender=$request->Gender;
        $ride->price=$request->Price;
        $ride->user_id=3;

        $ride->save();
        return redirect()->route('driver.home')->with('success', 'Proposition valider');
     }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rides = Pooling::where('user_id', $id)->get();
        return view('driver.rides',compact('rides'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function reserve(string $id , string $userid)
    {

        $reservation=new Reservation();
        $reservation->pooling_id=$id;
        $reservation->user_id=$userid ;
        $reservation->save();

        return redirect()->route('user.reservedrides')->with('success', 'Trajet Réservé');
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


        return view('user.ridesresults', compact('rides'));
    }
}
