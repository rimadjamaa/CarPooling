<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function userHome()
    {
        return view('user.home');
    }
    public function driverHome()
    {
        return view('driver.home');
    }
    public function adminHome()
    {
        $reservations = Reservation::with('pooling','user')->get();
        $users = User::all();
        return view('admin.home',compact('reservations','users'));
    }
}
