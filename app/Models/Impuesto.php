<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Impuesto extends Model
{
    use HasFactory;

    protected $table = 'impuestos';

    protected $fillable = [
        'nombre',
        'descripcion',
        'porcentaje',
        'activo'
    ];

    public function productos()
    {
        return $this->hasMany(Producto::class);
    }

    public function servicios()
    {
        return $this->hasMany(Servicio::class);
    }

    public function facturas()
    {
        return $this->belongsToMany(
            Factura::class,
            'impuestos_facturas',
            'impuesto_id',
            'factura_id',
            'id',
            'id'
        );
    }

    public function lineasTickets()
    {
        return $this->hasMany(LineaTicket::class);
    }
}
