<?php

namespace Database\Seeders;

use App\Models\Tipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tipo::create([
            'nombre' => 'Sesion',
        ]);

        Tipo::create([
            'nombre' => 'Menu',
        ]);
        Tipo::create([
            'nombre' => 'Egreso',
        ]);
    }
}
