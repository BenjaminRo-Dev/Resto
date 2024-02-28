<?php

namespace Database\Seeders;

use App\Models\Estado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estado0 = new Estado();
        $estado0->nombre = 'Activo';
        $estado0->save();

        $estado1 = new Estado();
        $estado1->nombre = 'Inactivo';
        $estado1->save();
    }
}
