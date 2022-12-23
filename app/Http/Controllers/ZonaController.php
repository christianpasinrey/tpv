<?php

namespace App\Http\Controllers;

use App\Models\Zona;
use App\Models\Familia;
use App\Http\Requests\StoreZonaRequest;
use App\Http\Requests\UpdateZonaRequest;
use Inertia\Inertia;

class ZonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Zona::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->json([
            'familias' => Familia::all()->pluck('nombre', 'id'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreZonaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreZonaRequest $request)
    {
        $zona = Zona::create($request->validated());

        return response()->json($zona);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Zona  $zona
     * @return \Illuminate\Http\Response
     */
    public function show(Zona $zona)
    {
        return response()->json($zona);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Zona  $zona
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return response()->json([
            'familias' => Familia::all()->pluck('nombre', 'id'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateZonaRequest  $request
     * @param  \App\Models\Zona  $zona
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateZonaRequest $request, Zona $zona)
    {
        $zona->update($request->validated());

        return response()->json($zona);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zona  $zona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zona $zona)
    {
        $zona->delete();

        return response()->json([
            'message' => 'Zona eliminada correctamente',
        ]);
    }
}
