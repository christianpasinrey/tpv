<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Zona;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Familia>
 */
class FamiliaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $zona = Zona::all()->random();
        return [
            'nombre' => $this->faker->name,
            'descripcion' => $this->faker->text,
            'imagen' => $this->faker->imageUrl(),
            'tipo' => $this->faker->randomElement(['producto', 'servicio']),
            'activo' => $this->faker->boolean,
            'zona_id' => $zona->id,
        ];
    }
}
