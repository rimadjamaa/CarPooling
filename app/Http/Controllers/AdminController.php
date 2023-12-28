<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pooling;
use App\Models\Reservation;
use App\Models\User;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Pooling::all();
        $users = User::all();
        return view('admin.rides',compact('reservations','users'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rides = Pooling::find($id);
        $users = User::where('role', '=', 2)->get();
        return view('admin.modifyRide',compact('rides','users'));
    }

    /**
     * Update the specified resource in storage.
     *

     *

     */
    public function update(Request $request, string $id)
    {
        //
        $ride = Pooling::find($id);
        $ride->depart=$request->departureLocation;
        $ride->destination=$request->destination;
        $ride->longletude=$request->longlitude;
        $ride->latitude=$request->latitude;
        $ride->time_depart=$request->departureTime;
        $ride->nb_place_max=$request->numSeats;
        $ride->price=$request->Prix;
        $ride->user_id=$request->conducteur;
        $ride->save();
        return redirect()->route('admin.rides')->with('success', 'Trajet Modifier');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ride = Pooling::find($id);
        $ride->delete();
        return redirect()->route('admin.rides')->with('success', 'Trajet Supprimer');
    }
}
