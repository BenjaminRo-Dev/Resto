<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egreso extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha',
        'total',
        'descripcion',
        'sesion_id',
        'categoria_id'
    ];

    //Relación con sesiones: Un egreso pertenece a una sesión
    public function sesion()
    {
        return $this->belongsTo(Sesion::class);
    }

    //Relación con categorias: Un egreso pertenece a una categoría
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    //Relacion con productos (muchos a muchos): Un egreso puede tener muchos productos
    public function productos()
    {
        return $this->belongsToMany(Producto::class)
            ->withPivot('cantidad', 'precio_unitario')
            ->withTimestamps();
    }
    
}
