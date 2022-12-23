<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Servicio extends Model
{
    use HasFactory;

    protected $table = 'servicios';

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'imagen',
        'activo'
    ];

    public function familia()
    {
        return $this->belongsTo(Familia::class);
    }

    public function subfamilia()
    {
        return $this->belongsTo(Subfamilia::class);
    }

    public function scopeNombre($query, $nombre)
    {
        if ($nombre) {
            return $query->where('nombre', 'LIKE', "%$nombre%");
        }
    }

    public function scopeDescripcion($query, $descripcion)
    {
        if ($descripcion) {
            return $query->where('descripcion', 'LIKE', "%$descripcion%");
        }
    }

    public function scopePrecio($query, $precio)
    {
        if ($precio) {
            return $query->where('precio', 'LIKE', "%$precio%");
        }
    }

    public function scopeFamilia($query, $familia)
    {
        if ($familia) {
            return $query->where('familia_id', $familia);
        }
    }

    public function scopeSubfamilia($query, $subfamilia)
    {
        if ($subfamilia) {
            return $query->where('subfamilia_id', $subfamilia);
        }
    }

    public function scopeZona($query, $zona)
    {
        if ($zona) {
            return $query->where($this->familia->zona->id, $zona);
        }
    }

    public function scopeActivo($query, $activo)
    {
        if ($activo) {
            return $query->where('activo', $activo);
        }
    }
}
