<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function ListesRides()
    {
        return view('user.Rides');
    }
    public function ReservedRides()
    {
        return view('user.reservedrides');
    }
}
