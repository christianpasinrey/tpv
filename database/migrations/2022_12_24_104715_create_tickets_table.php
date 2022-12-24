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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha');
            $table->string('numero');
            $table->foreignId('caja_id')->constrained('cajas');
            $table->foreignId('cliente_id')->constrained('clientes');
            $table->foreignId('impuesto_id')->constrained('impuestos');
            $table->foreignId('descuento_id')->constrained('descuentos');
            $table->foreignId('empleado_id')->constrained('empleados');
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
        Schema::dropIfExists('tickets');
    }
};
