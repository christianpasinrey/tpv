<?php

namespace App\Http\Controllers;

use App\Models\ConfiguracionTicket;
use App\Http\Requests\StoreConfiguracionTicketRequest;
use App\Http\Requests\UpdateConfiguracionTicketRequest;

class ConfiguracionTicketController extends Controller
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
     * @param  \App\Http\Requests\StoreConfiguracionTicketRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConfiguracionTicketRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ConfiguracionTicket  $configuracionTicket
     * @return \Illuminate\Http\Response
     */
    public function show(ConfiguracionTicket $configuracionTicket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ConfiguracionTicket  $configuracionTicket
     * @return \Illuminate\Http\Response
     */
    public function edit(ConfiguracionTicket $configuracionTicket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConfiguracionTicketRequest  $request
     * @param  \App\Models\ConfiguracionTicket  $configuracionTicket
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConfiguracionTicketRequest $request, ConfiguracionTicket $configuracionTicket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ConfiguracionTicket  $configuracionTicket
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConfiguracionTicket $configuracionTicket)
    {
        //
    }
}
