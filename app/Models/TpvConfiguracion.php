<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TpvConfiguracion extends Model
{
    use HasFactory;

    protected $table = 'tpv_configuraciones';

    protected $fillable = [
        'caja_id',
        'zona_id',
    ];

    public function caja()
    {
        return $this->belongsTo(Caja::class);
    }

    public function zona()
    {
        return $this->belongsTo(Zona::class);
    }
}
