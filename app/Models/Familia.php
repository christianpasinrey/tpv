<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Familia extends Model
{
    use HasFactory, SoftDeletes;

    const TIPO_PRODUCTO = 'producto';
    const TIPO_SERVICIO = 'servicio';

    protected $table = 'familias';

    protected $fillable = [
        'nombre',
        'descripcion',
        'imagen',
        'zona_id',
        'activo',
        'tipo'
    ];

    protected $appends =['subfamilia_nombre'];

    public function zona()
    {
        return $this->belongsTo(Zona::class);
    }

    public function productos()
    {
        return $this->hasMany(Producto::class);
    }

    public function subfamilias()
    {
        return $this->hasMany(Subfamilia::class);
    }

    public function getSubfamiliaNombreAttribute()
    {
        return $this->subfamilias->pluck('nombre');
    }

    public function scopeZona($query, $zona)
    {
        if ($zona) {
            return $query->where('zona_id', $zona);
        }
    }

    public function scopeActivo($query, $activo)
    {
        if ($activo) {
            return $query->where('activo', $activo);
        }
    }
}
