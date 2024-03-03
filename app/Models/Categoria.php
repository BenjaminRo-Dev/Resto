<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'tipo_id'];

    //Relacion con tipos: Una categoria pertenece a un tipo
    public function tipo(){
        return $this->belongsTo(Tipo::class);
    }

    //Relacion de muchos a muchos con productos
    public function productos()
    {
        return $this->belongsToMany(Producto::class);
    }

    //Relacion de uno a muchos con sesiones
    public function sesiones()
    {
        return $this->hasMany(Sesion::class);
    }

    //Relacion de uno a muchos con egresos
    public function egresos()
    {
        return $this->hasMany(Egreso::class);
    }

    //Relacion de uno a muchos con usuarios
    public function usuarios()
    {
        return $this->hasMany(User::class);
    }

}
