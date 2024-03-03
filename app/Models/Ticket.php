<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'hora',
        'total',
        'sesion_id',
    ];

    //Relación con sesiones: Un ticket pertenece a una sesión
    public function sesion()
    {
        return $this->belongsTo(Sesion::class);
    }

    //Relacion con productos (muchos a muchos): Un ticket puede tener muchos productos
    public function productos()
    {
        return $this->belongsToMany(Producto::class)
            ->withPivot('cantidad', 'precio_unitario')
            ->withTimestamps();
    }


}
