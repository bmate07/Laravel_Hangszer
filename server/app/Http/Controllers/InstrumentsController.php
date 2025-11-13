<?php

namespace App\Http\Controllers;

use App\Models\Instruments;
use App\Http\Requests\StoreInstrumentsRequest;
use App\Http\Requests\UpdateInstrumentsRequest;

class InstrumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInstrumentsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Instruments $instruments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInstrumentsRequest $request, Instruments $instruments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instruments $instruments)
    {
        //
    }
}
