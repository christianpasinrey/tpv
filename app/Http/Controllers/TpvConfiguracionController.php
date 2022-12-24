<?php

namespace App\Http\Controllers;

use App\Models\ConfiguracionTpv;
use App\Models\Caja;
use App\Models\Zona;
use App\Http\Requests\StoreTpvConfiguracionRequest;
use App\Http\Requests\UpdateTpvConfiguracionRequest;

class TpvConfiguracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ConfiguracionTpv::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->json([
            'cajas' => Caja::all()->pluck('name','id'),
            'zonas' => Zona::all()->pluck('name','id')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTpvConfiguracionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTpvConfiguracionRequest $request)
    {
        $tpvConfiguracion = ConfiguracionTpv::create($request->validated());
        return response()->json($tpvConfiguracion, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TpvConfiguracion  $tpvConfiguracion
     * @return \Illuminate\Http\Response
     */
    public function show(ConfiguracionTpv $tpvConfiguracion)
    {
        return response()->json($tpvConfiguracion);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TpvConfiguracion  $tpvConfiguracion
     * @return \Illuminate\Http\Response
     */
    public function edit(ConfiguracionTpv $tpvConfiguracion)
    {
        return response()->json([
            'tpvConfiguracion' => $tpvConfiguracion,
            'cajas' => Caja::all()->pluck('name','id'),
            'zonas' => Zona::all()->luck('name','id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTpvConfiguracionRequest  $request
     * @param  \App\Models\TpvConfiguracion  $tpvConfiguracion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTpvConfiguracionRequest $request, ConfiguracionTpv $tpvConfiguracion)
    {
        $tpvConfiguracion->update($request->validated());
        return response()->json($tpvConfiguracion, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TpvConfiguracion  $tpvConfiguracion
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConfiguracionTpv $tpvConfiguracion)
    {
        $tpvConfiguracion->delete();
        return response()->json(null, 204);
    }
}
