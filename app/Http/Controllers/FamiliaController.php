<?php

namespace App\Http\Controllers;

use App\Models\Familia;
use App\Http\Requests\StoreFamiliaRequest;
use App\Http\Requests\UpdateFamiliaRequest;
use App\Models\Zona;

class FamiliaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $familias = Familia::all();
        return response()->json($familias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->json(Zona::all()->pluck('nombre', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFamiliaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFamiliaRequest $request)
    {
        $familia = Familia::create($request->validated());
        return response()->json($familia);
    }

    public function search($search)
    {
        $familias = Familia::where('nombre', 'like', '%' . $search . '%')->get();
        return response()->json($familias);
    }

    public function getPossibleScopes()
    {
        $scopes = [
            'nombre',
            'descripcion',
            'activo',
            'zona.nombre',
            'zona.descripcion',
            'zona.activo',
        ];
        return response()->json($scopes);
    }

    public function searchWithSelectedScopes($search, $scopes)
    {
        $scopes = explode(',', $scopes);
        $search = explode(PHP_EOL, $search);
        $familias = Familia::where(function ($query) use ($scopes, $search) {
            foreach ($scopes as $scope) {
                foreach($search as $searchItem) {
                    $query->where($scope, 'like', '%' . $searchItem . '%');
                }
            }
        })->get();
        return response()->json($familias);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Familia  $familia
     * @return \Illuminate\Http\Response
     */
    public function show(Familia $familia)
    {
        return response()->json($familia);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return response()->json(Zona::all()->pluck('nombre', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFamiliaRequest  $request
     * @param  \App\Models\Familia  $familia
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFamiliaRequest $request, Familia $familia)
    {
        $familia->update($request->validated());
        return response()->json($familia);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Familia  $familia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Familia $familia)
    {
        $familia->delete();
        return response()->json([
            'message' => 'Familia eliminada correctamente'
        ]);
    }
}
