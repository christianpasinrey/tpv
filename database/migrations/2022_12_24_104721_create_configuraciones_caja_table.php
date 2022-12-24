<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuraciones_caja', function (Blueprint $table) {
            $table->id();
            $table->foreignId('caja_id')->constrained('cajas');
            $table->foreignId('configuracion_tickets_id')->constrained('configuraciones_ticket');
            $table->foreignId('configuracion_tpv_id')->constrained('configuraciones_tpv');
            $table->foreignId('configuracion_facturas_id')->constrained('configuraciones_factura');
            $table->boolean('predeterminado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caja_configuracions');
    }
};
