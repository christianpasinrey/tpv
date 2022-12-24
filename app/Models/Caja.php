<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caja extends Model
{
    use HasFactory;

    protected $table = 'cajas';

    protected $fillable = [
        'nombre',
        'descripcion',
        'activo'
    ];

    public function scopeNombre($query, $nombre)
    {
        if ($nombre) {
            return $query->where('nombre', 'LIKE', "%$nombre%");
        }
    }

    public function scopeActivo($query, $activo)
    {
        if ($activo) {
            return $query->where('activo', $activo);
        }
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
