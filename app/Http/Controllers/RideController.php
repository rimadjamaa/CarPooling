<?php

namespace App\Http\Controllers;

use App\Models\Pooling;
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
        $request->validate([
            'Depart' => 'required',
            'Destination' => 'required',
            'Longlitude' => 'required',
            'latitude' => 'required',
            'Depart_time' => 'required',
            'Nb_Place' => 'required',
            'Bagage_size' => 'required|in:small,medium,large',
            'Gender' => 'required|in:male,female,any',
            'Price' => 'required',
        ]);

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

        $ride->save();
        return 'stored';
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
}
