<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sesion extends Model
{
    use HasFactory;

    protected $table = 'sesiones';
    protected $fillable = [
        'monto_inicial',
        'monto_final',
        'fecha_apertura',
        'fecha_cierre',
        'numero_caja',
        'user_id',
        'categoria_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function egresos()
    {
        return $this->hasMany(Egreso::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
    

}
