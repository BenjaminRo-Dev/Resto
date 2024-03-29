<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Existencia;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {   
        Storage::deleteDirectory('productos');
        Storage::makeDirectory('productos');


        

        $this->call([
            EstadoSeeder::class,
            TipoSeeder::class,
            CategoriaSeeder::class,
            ProductoSeeder::class,
            UserSeeder::class,
        ]);
        Existencia::factory(7)->create();


    }
}
