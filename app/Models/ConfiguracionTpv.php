<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfiguracionTpv extends Model
{
    use HasFactory;

    protected $table = 'configuraciones_tpv';

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
