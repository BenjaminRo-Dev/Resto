<?php

namespace App\Livewire\Sesiones;

use App\Models\Sesion;
use Livewire\Component;
use Livewire\WithPagination;

class ListaSesiones extends Component
{
    use WithPagination;

    public $buscar;
    // public $sesiones

    public function mount()
    {
        // $this->sesiones = Sesion::all();
    }

    public function render()
    {
        if($this->buscar){
            $sesiones = Sesion::where('id', 'like', '%' . trim($this->buscar) . '%')
                ->orderBy('id', 'desc')
                ->take(10)
                ->get();
        }else{
            $sesiones = Sesion::orderBy('id', 'desc')->paginate(10);
        }
        return view('livewire.sesiones.lista-sesiones', compact('sesiones'));
    }

    public function buscarSesion(){
        $this->validate([
            'buscar' => 'required'
        ]);
        
        $sesiones = Sesion::where('id', 'like', '%' . trim($this->buscar) . '%')
            ->orderBy('id', 'desc')
            ->take(10)
            ->get();
        
        // return view('livewire.sesiones.lista-sesiones', ['sesiones' => $sesiones]);
        return view('livewire.sesiones.lista-sesiones', compact('sesiones'));

    }

}
