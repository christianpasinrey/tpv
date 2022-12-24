<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'apellidos' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'telefono' => $this->faker->phoneNumber,
            'dni' => $this->faker->randomNumber(8),
            'direccion' => $this->faker->address,
            'fecha_nacimiento' => $this->faker->date('Y-m-d', 'now'),
            'cp' => $this->faker->postcode,
            'poblacion' => $this->faker->city,
            'provincia' => $this->faker->state,
            'pais' => $this->faker->country,
            'activo' => $this->faker->boolean,
        ];
    }
}
