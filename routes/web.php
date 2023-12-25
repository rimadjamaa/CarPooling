<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RideController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// Route User
Route::middleware(['auth','role:user'])->group(function()
{
    Route::get("/user/home",[HomeController::class, 'userHome'])->name("user.home");
    Route::get("/user/Rides",[UserController::class, 'ListesRides'])->name("user.rides");
    Route::get("/user/ReservedRides",[UserController::class, 'ReservedRides'])->name("user.reservedrides");
});
// Route Driver
Route::middleware(['auth','role:driver'])->group(function()
{
    Route::get("/driver/home",[HomeController::class, 'driverHome'])->name("driver.home");
    Route::post("/driver/store",[RideController::class, 'store'])->name("store.ride");
    Route::get("/driver/rides/{idDriver}",[RideController::class, 'show'])->name("driver.rides");


});
// Route Admin
Route::middleware(['auth','role:admin'])->group(function()
{
    Route::get("/admin/home",[HomeController::class, 'adminHome'])->name("admin.home");
    Route::get("/admin/rides",[AdminController::class, 'index'])->name("admin.rides");
    Route::get("/admin/editride/{id_reservation}",[AdminController::class, 'edit'])->name("admin.RideEdit");
});
