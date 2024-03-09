<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    use HasFactory;

    protected $fillable = [
        'accion_realizada',
        'tabla_afectada',
        'id_registro_afectado',
        'ruta',
        'usuario',
        'sesion_id',
        'direccion_ip',
        'navegador',
        'dispositivo',
    ];

}
