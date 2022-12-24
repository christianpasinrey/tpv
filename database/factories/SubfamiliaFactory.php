<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Familia;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subfamilia>
 */
class SubfamiliaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $familia = Familia::all()->random();
        return [
            'nombre' => $this->faker->word,
            'descripcion' => $this->faker->text,
            'imagen' => $this->faker->imageUrl(),
            'tipo' => $this->faker->randomElement(['producto', 'servicio']),
            'activo' => $this->faker->boolean,
            'familia_id' => $familia->id,
        ];
    }
}
