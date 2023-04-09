<?php

namespace App\Http\Controllers;

use App\Models\Gatito;
use App\Http\Requests\StoreGatitoRequest;
use App\Http\Requests\UpdateGatitoRequest;

class GatitoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGatitoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGatitoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gatito  $gatito
     * @return \Illuminate\Http\Response
     */
    public function show(Gatito $gatito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gatito  $gatito
     * @return \Illuminate\Http\Response
     */
    public function edit(Gatito $gatito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGatitoRequest  $request
     * @param  \App\Models\Gatito  $gatito
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGatitoRequest $request, Gatito $gatito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gatito  $gatito
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gatito $gatito)
    {
        //
    }
}
