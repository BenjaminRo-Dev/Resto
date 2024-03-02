<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ExistenciaFactory extends Factory
{
    
    public function definition(): array
    {
        
        $producto_id = $this->faker->unique()->numberBetween(1, 7);

        return [
            'cantidad_actual' => random_int(1, 100),
            'cantidad_min' => random_int(1, 20),
            'cantidad_max' => random_int(80, 100),
            'producto_id' => $producto_id,
        ];
    }
}
