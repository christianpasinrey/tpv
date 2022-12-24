<?php

namespace App\Http\Controllers;

use App\Models\CajaConfiguracion;
use App\Http\Requests\StoreCajaConfiguracionRequest;
use App\Http\Requests\UpdateCajaConfiguracionRequest;

class CajaConfiguracionController extends Controller
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
     * @param  \App\Http\Requests\StoreCajaConfiguracionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCajaConfiguracionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CajaConfiguracion  $cajaConfiguracion
     * @return \Illuminate\Http\Response
     */
    public function show(CajaConfiguracion $cajaConfiguracion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CajaConfiguracion  $cajaConfiguracion
     * @return \Illuminate\Http\Response
     */
    public function edit(CajaConfiguracion $cajaConfiguracion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCajaConfiguracionRequest  $request
     * @param  \App\Models\CajaConfiguracion  $cajaConfiguracion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCajaConfiguracionRequest $request, CajaConfiguracion $cajaConfiguracion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CajaConfiguracion  $cajaConfiguracion
     * @return \Illuminate\Http\Response
     */
    public function destroy(CajaConfiguracion $cajaConfiguracion)
    {
        //
    }
}
