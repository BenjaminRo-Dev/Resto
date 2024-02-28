<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        $nombre = $this->faker->unique()->city();
        $existencia_id = $this->faker->unique()->numberBetween(1, 7);
        return [
            'nombre' => $nombre,
            'precio_venta' => $this->faker->randomFloat(2, 1, 100),
            'url_imagen' => 'productos/' . $this->faker->image('public/storage/productos', 640, 480, null, false),
            'existencia_id' => $existencia_id
        ];
    }
}
