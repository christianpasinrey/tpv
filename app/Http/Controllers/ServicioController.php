<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use App\Models\Zona;
use App\Models\Familia;
use App\Models\Subfamilia;
use App\Http\Requests\StoreServicioRequest;
use App\Http\Requests\UpdateServicioRequest;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Servicio::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zonas = Zona::all()->pluck('nombre', 'id');
        $familias = Familia::all()->pluck('nombre', 'id');
        $subfamilias = Subfamilia::all()->pluck('nombre', 'id');
        return response()->json(compact('zonas', 'familias', 'subfamilias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServicioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServicioRequest $request)
    {
        $servicio = Servicio::create($request->validated());

        return response()->json($servicio);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function show(Servicio $servicio)
    {
        return response()->json($servicio,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicio $servicio)
    {
        $zonas = Zona::all()->pluck('nombre', 'id');
        $familias = Familia::all()->pluck('nombre', 'id');
        $subfamilias = Subfamilia::all()->pluck('nombre', 'id');
        return response()->json(compact('zonas', 'familias', 'subfamilias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServicioRequest  $request
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServicioRequest $request, Servicio $servicio)
    {
        $servicio->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicio $servicio)
    {
        //
    }
}
