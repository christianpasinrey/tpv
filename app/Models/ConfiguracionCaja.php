<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfiguracionCaja extends Model
{
    use HasFactory;

    protected $table = 'configuraciones_caja';

    protected $fillable = [
        'caja_id',
        'configuracion_ticket_id',
        'tpv_configuracion_id',
        'factura_configuracion_id',
        'predeterminado'
    ];
}
