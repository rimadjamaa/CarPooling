<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Pooling;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $ride->nb_place_available=$request->Nb_Place;
        $ride->bagage_size=$request->Bagage_size;
        $ride->gender=$request->Gender;
        $ride->price=$request->Price;
        $ride->user_id=Auth::user()->id;

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
        $ride = Pooling::find($id);
        $idDriver=$ride->user_id;
        $ride->delete();
        return redirect()->route('driver.rides',['idDriver' => $idDriver])->with('success', 'Trajet Supprimer');
    }


}
