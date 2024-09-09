<?php

namespace App\Http\Controllers;

use App\Models\Passenger;
use Illuminate\Http\Request;

class PassengerController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
   // protected $passenger;
   // public function __construct()
   // {
    //    $this->$Passenger = new Passenger();
     //   }

    public function index()
    {
      //  $response['Passengers']= $this->passenger->all();
      $response['Passengers']= Passenger::all();
        return view('pages.passenger.index')->with($response);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $passenger=Passenger::create($request->all());
        return redirect()->back();
    }

   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['passenger'] =Passenger::find($id);
        return view('pages.passenger.edit')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $passenger=Passenger::find($id);
        $passenger->update(array_merge($passenger->toArray(),$request->toArray()));
        return redirect('passenger');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $passenger=Passenger::find($id);
        $passenger->delete();
        return redirect('passenger');
    }
}
