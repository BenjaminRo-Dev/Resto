<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveSesionRequest;
use App\Models\Sesion;
use Illuminate\Http\Request;

class SesionController extends Controller
{

    public function create()
    {
        return view('sesiones.create');
    }

    public function store(SaveSesionRequest $request)
    {
        $request->validated();
        $sesion = $request->all();
        $sesion['fecha_apertura'] = now();
        $sesion['numero_caja'] = 1;//TODO

        $sesion['user_id'] = auth()->id();
        $sesion['categoria_id'] = 1; //categoria 1 = punto de venta -> tipo sesion
        
        Sesion::create($sesion);
        return redirect()->route('sesiones.index');
    }
}
