<?php

namespace App\Http\Controllers;

use App\Models\Cancellation;
use Illuminate\Http\Request;
use App\Models\FlightTransaction;

class CancellationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(request $request)
    {
        $cancellation =Cancellation::with('flighttransaction','cancellation')->get();
        $flighttransactions=FlightTransaction::all();
        return view('pages.cancellation.index',compact('cancellations','flighttransactions'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cancellation=Cancellation::create($request->all());
        return redirect()->back();
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
        $cancellation=Cancellation::find($id);
        $cancellation->delete();
        return redirect('cancellation');
    }
}
