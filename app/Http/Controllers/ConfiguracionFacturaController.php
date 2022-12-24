<?php

namespace App\Http\Controllers;

use App\Models\ConfiguracionFactura;
use App\Http\Requests\StoreConfiguracionFacturaRequest;
use App\Http\Requests\UpdateConfiguracionFacturaRequest;

class ConfiguracionFacturaController extends Controller
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
     * @param  \App\Http\Requests\StoreConfiguracionFacturaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConfiguracionFacturaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ConfiguracionFactura  $configuracionFactura
     * @return \Illuminate\Http\Response
     */
    public function show(ConfiguracionFactura $configuracionFactura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ConfiguracionFactura  $configuracionFactura
     * @return \Illuminate\Http\Response
     */
    public function edit(ConfiguracionFactura $configuracionFactura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConfiguracionFacturaRequest  $request
     * @param  \App\Models\ConfiguracionFactura  $configuracionFactura
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConfiguracionFacturaRequest $request, ConfiguracionFactura $configuracionFactura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ConfiguracionFactura  $configuracionFactura
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConfiguracionFactura $configuracionFactura)
    {
        //
    }
}
