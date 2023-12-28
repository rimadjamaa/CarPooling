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
    Route::get("/user/ReservedRides",[UserController::class, 'show'])->name("user.reservedrides");
    Route::get("/user/ridesearch",[UserController::class, 'search'])->name("user.ridesearch");
    Route::get("/user/ridereserve/{id}{userid}{Nb_place}",[UserController::class, 'reserve'])->name("user.ridereserve");
});
// Route Driver
Route::middleware(['auth','role:driver'])->group(function()
{
    Route::get("/driver/home",[HomeController::class, 'driverHome'])->name("driver.home");
    Route::post("/driver/store",[RideController::class, 'store'])->name("store.ride");
    Route::get("/driver/rides/{idDriver}",[RideController::class, 'show'])->name("driver.rides");
    Route::get("/driver/deleteride/{id}",[RideController::class, 'destroy'])->name("driver.RideDelete");


});
// Route Admin
Route::middleware(['auth','role:admin'])->group(function()
{
    Route::get("/admin/home",[HomeController::class, 'adminHome'])->name("admin.home");
    Route::get("/admin/rides",[AdminController::class, 'index'])->name("admin.rides");
    Route::post("/admin/updateride/{id}",[AdminController::class, 'update'])->name("admin.RideUpdate");
    Route::get("/admin/editride/{id}",[AdminController::class, 'edit'])->name("admin.RideEdit");
    Route::get("/admin/deleteride/{id}",[AdminController::class, 'destroy'])->name("admin.RideDelete");


});
