<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    public function definition(): array
    {   
        $nombre = $this->faker->unique()->city();
        return [
            'nombre' => $nombre,
            'precio_venta' => $this->faker->randomFloat(2, 1, 100),
            'url_imagen' => 'productos/' . $this->faker->image('public/storage/productos', 640, 480, null, false),
            
        ];
    }
}
