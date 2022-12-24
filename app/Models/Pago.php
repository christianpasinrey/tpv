<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $table = 'pagos';

    protected $fillable = [
        'forma_pago_id',
        'caja_id',
        'importe',
        'cambio',
    ];

    public function formaPago()
    {
        return $this->belongsTo(FormaPago::class);
    }

    public function ticket()
    {
        return $this->belongsToMany(
            Ticket::class,
            'pagos_tickets',
            'pago_id',
            'ticket_id',
            'id',
            'id'
        );
    }

    public function factura()
    {
        return $this->belongsToMany(
            Factura::class,
            'pagos_facturas',
            'pago_id',
            'factura_id',
            'id',
            'id'
        );
    }
}
