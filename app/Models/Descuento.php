<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Descuento extends Model
{
    use HasFactory;

    const TIPO_PORCENTAJE = 1;
    const TIPO_CANTIDAD = 2;

    protected $table = 'descuentos';

    protected $fillable = [
        'nombre',
        'descripcion',
        'tipo',
        'valor',
        'activo'
    ];

    public function lineaTickets()
    {
        return $this->hasMany(LineaTicket::class);
    }

    public function facturas()
    {
        return $this->belongsToMany(
            Factura::class,
            'descuentos_facturas',
            'descuento_id',
            'factura_id',
            'id',
            'id'
        );
    }
}
