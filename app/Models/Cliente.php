<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'clientes';

    protected $fillable = [
        'nombre',
        'apellidos',
        'email',
        'telefono',
        'direccion',
        'cp',
        'poblacion',
        'provincia',
        'pais',
        'nif',
        'activo'
    ];

    public function scopeNombreApellidos($query, $nombre)
    {
        if ($nombre) {
            return $query->where('nombre', 'LIKE', "%$nombre%")
                ->orWhere('apellidos', 'LIKE', "%$nombre%");
        }
    }

    public function scopeEmail($query, $email)
    {
        if ($email) {
            return $query->where('email', 'LIKE', "%$email%");
        }
    }

    public function scopeTelefono($query, $telefono)
    {
        if ($telefono) {
            return $query->where('telefono', 'LIKE', "%$telefono%");
        }
    }

    public function scopeDireccion($query, $direccion)
    {
        if ($direccion) {
            return $query->where('direccion', 'LIKE', "%$direccion%");
        }
    }


    public function scopeCp($query, $cp)
    {
        if ($cp) {
            return $query->where('cp', 'LIKE', "%$cp%");
        }
    }
}
