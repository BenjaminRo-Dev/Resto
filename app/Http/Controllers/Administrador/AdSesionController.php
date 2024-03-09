<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Models\Sesion;
use Illuminate\Http\Request;

class AdSesionController extends Controller
{
    
    public function index()
    {
        return view('administrador.sesiones.index');
    }

    public function show(Sesion $sesione)
    {
        // dd($sesione->id);
        $tickets_vendidos = $sesione->tickets->count();
        // dd($tickets_vendidos);

        return view('administrador.sesiones.show', compact('sesione', 'tickets_vendidos'));
    }

}
