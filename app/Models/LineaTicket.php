<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineaTicket extends Model
{
    use HasFactory;

    protected $table = 'linea_tickets';

    protected $fillable = [
        'ticket_id',
        'producto_id',
        'servicio_id',
        'cantidad',
        'precio',
        'descuento_id',
        'impuesto_id',
        'subtotal',
        'factura_id',
        'total'
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }

    public function servicio()
    {
        return $this->belongsTo(Servicio::class);
    }

    public function descuento()
    {
        return $this->belongsTo(Descuento::class);
    }

    public function impuesto()
    {
        return $this->belongsTo(Impuesto::class);
    }

    public function factura()
    {
        return $this->belongsTo(Factura::class);
    }


}
