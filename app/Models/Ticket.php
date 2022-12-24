<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $table = 'tickets';

    protected $fillable = [
        'fecha',
        'numero',
        'subtotal',
        'total',
        'activo',
        'cliente_id',
        'caja_id',
        'empleado_id',
        'factura_id',
        'zona_id',
        'impuesto_id',
        'descuento_id',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function caja()
    {
        return $this->belongsTo(Caja::class);
    }

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }

    public function zona()
    {
        return $this->belongsTo(Zona::class);
    }

    public function impuesto()
    {
        return $this->belongsTo(Impuesto::class);
    }

    public function descuento()
    {
        return $this->belongsTo(Descuento::class);
    }

    public function factura()
    {
        return $this->belongsTo(Factura::class);
    }

    public function lineas()
    {
        return $this->hasMany(LineaTicket::class);
    }

    public function pagos()
    {
        return $this->hasMany(Pago::class);
    }
}
