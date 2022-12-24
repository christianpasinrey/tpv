<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $table = 'facturas';

    protected $fillable = [
        'fecha',
        'subtotal',
        'total',
        'cliente_id',
        'caja_id',
        'activo'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function caja()
    {
        return $this->belongsTo(Caja::class);
    }

    public function impuestos()
    {
        return $this->belongsToMany(
            Impuesto::class,
            'impuestos_facturas',
            'factura_id',
            'impuesto_id',
            'id',
            'id'
        );
    }

    public function descuentos()
    {
        return $this->belongsToMany(
            Descuento::class,
            'descuentos_facturas',
            'factura_id',
            'descuento_id',
            'id',
            'id'
        );
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
