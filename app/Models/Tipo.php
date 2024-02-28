<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    //Relacion con categorias: Un tipo tiene de una a muchas categorias
    public function categorias(){
        return $this->hasMany(Categoria::class);
    }
}
