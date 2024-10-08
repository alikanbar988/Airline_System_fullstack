<?php

namespace App\Http\Controllers;

use App\Models\Aircraft;
use App\Models\Passenger;
use App\Models\Cancellation;
use App\Models\Flightmaster;
use Illuminate\Http\Request;
use App\Models\FlightTransaction;
use Illuminate\Support\Facades\DB;

class FlighttransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flighttransactions =FlightTransaction::with('passenger','flightmaster','aircraft')->get();
        $passengers=Passenger::all();
        $flightmasters=Flightmaster::all();
        $aircrafts=Aircraft::all();
        return view('pages.flighttransaction.index',compact('passengers','flightmasters','aircrafts','flighttransactions'));
    }

    public function show($id)
{
    $flightTransaction = FlightTransaction::find($id);
    
    return view('pages.flighttransaction.index', compact('flightTransaction'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $flighttransaction=FlightTransaction::create($request->all());
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['flighttransaction'] =FlightTransaction::find($id);
        $passengers=Passenger::all();
        $flightmasters=Flightmaster::all();
        $aircrafts=Aircraft::all();
        return view('pages.flighttransaction.edit')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $flighttransaction=FlightTransaction::find($id);
        $$flighttransaction->update($request->all);;
        return redirect('$flighttransaction');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $flighttransaction=FlightTransaction::find($id);
        $flighttransaction->delete();
        return redirect('flighttransaction');
    }
}
