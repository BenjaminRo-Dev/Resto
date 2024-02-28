<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear registros en la tabla intermedia entre categoria y producto
        for ($i = 0; $i < 7; $i++) {

            $producto = Producto::factory()->create();
            // $producto = Producto::inRandomOrder()->first(); //Esta linea da error
            
            DB::table('categoria_producto')->insert([
                'categoria_id' => rand(1, 4),
                'producto_id' => $producto->id,
                // Otros campos específicos de la tabla intermedia, si los tienes
            ]);

        }
    }
}
