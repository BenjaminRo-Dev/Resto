<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RegistrarBitacora
{
    public function __construct()
    {
        //
    }

    public function handle(object $event): void
    {
        $bitacora = $event->bitacora;
        $bitacora->ruta = request()->fullUrl();
        $bitacora->usuario = auth()->user()->name;
        $bitacora->sesion_id = request()->session()->get('sesion_id');
        $bitacora->direccion_ip = request()->ip();
        $bitacora->dispositivo = request()->header('User-Agent');

        $bitacora->save();
    }
}
