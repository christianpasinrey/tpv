<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfiguracionTicket extends Model
{
    use HasFactory;

    protected $table = 'configuraciones_ticket';

    protected $fillable = [
        'cabecera',
        'pie',
        'logo',
        'predeterminado'
    ];

}
