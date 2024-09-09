<?php

namespace App\Http\Controllers;

use App\Models\Flightmaster;
use Illuminate\Http\Request;

class FlightMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(request $request)
    {
        $response['flightmasters']= Flightmaster::all();
        return view('pages.flightmaster.index')->with($response);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $flightmaster=Flightmaster::create($request->all());
        return redirect()->back();
    }

   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['flightmaster'] =Flightmaster::find($id);
        return view('pages.flightmaster.edit')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $flightmaster = Flightmaster::find($id);
        $flightmaster->update(array_merge($flightmaster->toArray(),$request->toArray()));
        return redirect('flightmaster');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $flightmaster=Flightmaster::find($id);
        $flightmaster->delete();
        return redirect('flightmaster');
    }
}
