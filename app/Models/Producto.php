<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'precio_venta',
        'url_imagen',
        'existencia_id',
    ];

    //Relación con existencias: Un producto tiene una ficha de existencias:
    public function existencia()
    {
        return $this->belongsTo(Existencia::class);
    }

    //Relación con estado: A un producto le corresponde un estado
    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    //Relacion de muchos a muchos con categorias
    public function categorias()
    {
        return $this->belongsToMany(Categoria::class);
    }

    //Relacion de muchos a muchos con egresos
    public function egresos()
    {
        return $this->belongsToMany(Egreso::class)
            ->withPivot('cantidad', 'precio_unitario')
            ->withTimestamps();
    }

    //Relacion de muchos a muchos con tickets
    public function tickets()
    {
        return $this->belongsToMany(Ticket::class)
            ->withPivot('cantidad', 'precio_unitario')
            ->withTimestamps();
    }

}
