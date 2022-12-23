<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    use HasFactory;

    protected $table = 'zonas';

    protected $fillable = [
        'nombre',
        'descripcion',
        'imagen',
    ];

    public function familias()
    {
        return $this->hasMany(Familia::class);
    }

    public function productos()
    {
        return $this->hasManyThrough(Producto::class, Familia::class);
    }

    public function servicios()
    {
        return $this->hasManyThrough(Servicio::class, Familia::class);
    }

    public function scopeActivo($query, $activo)
    {
        if ($activo) {
            return $query->where('activo', $activo);
        }
    }

    public function scopeNombre($query, $nombre)
    {
        if ($nombre) {
            return $query->where('nombre', 'LIKE', "%$nombre%");
        }
    }
}
