<?php

namespace App\Http\Controllers;

use App\Events\BdModificada;
use App\Http\Requests\SaveSesionRequest;
use App\Models\Bitacora;
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
        
        $dato_registrado = Sesion::create($sesion);
        $request->session()->put('sesion_id', $dato_registrado->id);
        
        $bitacora = new Bitacora();
        $bitacora->accion_realizada = 'Inicio punto de venta';
        $bitacora->tabla_afectada = 'sesiones';
        $bitacora->id_registro_afectado = $dato_registrado->id;
        
        BdModificada::dispatch($bitacora);

        // return redirect()->route('sesiones.index');
        return to_route('dashboard')->with('status', 'Sesion iniciada correctamente');
    }
}
