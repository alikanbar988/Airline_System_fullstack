<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AircraftController;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\CancellationController;
use App\Http\Controllers\FlightMasterController;
use App\Http\Controllers\FlighttransactionController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/passenger',PassengerController::class);
Route::resource('/flightmaster',FlightMasterController::class);
Route::resource('/aircraft',AircraftController::class);
Route::resource('/flighttransaction',FlighttransactionController::class);
Route::resource('/cancellation',CancellationController::class);
