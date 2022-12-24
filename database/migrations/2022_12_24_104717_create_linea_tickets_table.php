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
        Schema::create('linea_tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ticket_id')->constrained();
            $table->foreignId('producto_id')->nullable()->constrained();
            $table->foreignId('servicio_id')->nullable()->constrained();
            $table->integer('cantidad');
            $table->decimal('precio', 8, 2);
            $table->foreignId('descuento_id')->nullable()->constrained();
            $table->decimal('subtotal', 8, 2);
            $table->decimal('total', 8, 2);
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
        Schema::dropIfExists('linea_tickets');
    }
};
