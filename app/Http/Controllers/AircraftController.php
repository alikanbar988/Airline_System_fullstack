<?php

namespace App\Http\Controllers;

use App\Models\Aircraft;
use Illuminate\Http\Request;

class AircraftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response['aircrafts']= Aircraft::all();
        return view('pages.aircraft.index')->with($response);
    }

 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $aircraft=Aircraft::create($request->all());
        return redirect()->back();
    }

   
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['aircraft'] =Aircraft::find($id);
        return view('pages.aircraft.edit')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $aircraft = Aircraft::find($id);
        $aircraft->update(array_merge($aircraft->toArray(),$request->toArray()));
        return redirect('aircraft');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aircraft=Aircraft::find($id);
        $aircraft->delete();
        return redirect('aircraft');
    }
}
