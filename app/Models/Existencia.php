<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Existencia extends Model
{
    use HasFactory;

    protected $fillable = [
        'cantidad_actual',
        'cantidad_min',
        'cantidad_max'
    ];

    //Relación con productos: Una ficha de existencias pertenece a un producto:
    public function producto()
    {
        return $this->hasOne(Producto::class);
    }

}
