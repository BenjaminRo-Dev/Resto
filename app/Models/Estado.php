<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;
    protected $fillable = ['nombre'];

    //Relación con productos: Un estado esta en uno a muchos productos
    public function productos(){
        return $this->hasMany(Producto::class);
    }

    //Relación con usuarios: Un estado esta en uno a muchos usuarios
    public function usuarios(){
        return $this->hasMany(User::class);
    }

}
