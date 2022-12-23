<?php

namespace App\Http\Controllers;

use App\Models\Subfamilia;
use App\Http\Requests\StoreSubfamiliaRequest;
use App\Http\Requests\UpdateSubfamiliaRequest;

class SubfamiliaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subfamilias = Subfamilia::all();
        return response()->json($subfamilias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSubfamiliaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubfamiliaRequest $request)
    {
        $subfamilia = Subfamilia::create($request->validated());
        return response()->json($subfamilia);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subfamilia  $subfamilia
     * @return \Illuminate\Http\Response
     */
    public function show(Subfamilia $subfamilia)
    {
        return response()->json($subfamilia);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubfamiliaRequest  $request
     * @param  \App\Models\Subfamilia  $subfamilia
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubfamiliaRequest $request, Subfamilia $subfamilia)
    {
        $subfamilia->update($request->validated());
        return response()->json($subfamilia);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subfamilia  $subfamilia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subfamilia $subfamilia)
    {
        $subfamilia->delete();
        return response()->json([
            'message' => 'Subfamilia eliminada correctamente'
        ]);
    }
}
