<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Tipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Tipo sesion:
        Categoria::create([
            'nombre' => 'Punto de venta',
            'tipo_id' => Tipo::where('nombre', 'Sesion')->first()->id,
        ]);
        Categoria::create([
            'nombre' => 'Administracion',
            'tipo_id' => Tipo::where('nombre', 'Sesion')->first()->id,
        ]);

        //Tipo menu:
        Categoria::create([
            'nombre' => 'Bebidas',
            'tipo_id' => Tipo::where('nombre', 'Menu')->first()->id,
        ]);
        Categoria::create([
            'nombre' => 'Comida',
            'tipo_id' => Tipo::where('nombre', 'Menu')->first()->id,
        ]);
        Categoria::create([
            'nombre' => 'Postres',
            'tipo_id' => Tipo::where('nombre', 'Menu')->first()->id,
        ]);

        //Tipo egreso:
        Categoria::create([
            'nombre' => 'Insumos',
            'tipo_id' => Tipo::where('nombre', 'Egreso')->first()->id,
        ]);
    }
}
