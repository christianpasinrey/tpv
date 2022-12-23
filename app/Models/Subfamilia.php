<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Subfamilia extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'subfamilias';

    protected $fillable = [
        'nombre',
        'descripcion',
        'imagen',
        'familia_id',
        'activo'
    ];

    public function familia()
    {
        return $this->belongsTo(Familia::class);
    }

    public function productos()
    {
        return $this->hasMany(Producto::class);
    }

    public function servicios()
    {
        return $this->hasMany(Servicio::class);
    }

    public function scopeFamilia($query, $familia)
    {
        if ($familia) {
            return $query->where('familia_id', $familia);
        }
    }

    public function scopeActivo($query, $activo)
    {
        if ($activo) {
            return $query->where('activo', $activo);
        }
    }
}
