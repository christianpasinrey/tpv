<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Familia;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Servicio>
 */
class ServicioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $familias = Familia::all();
        foreach($familias as $familia){
            if($familia->tipo == 'servicio'){
                count($familia->subfamilias) > 0 ?:
                $familia->subfamilias()->saveMany(SubfamiliaFactory::new()->times(3)->make());
            }
        }

        $familia = Familia::all()->where('tipo','servicio')->random();
        return [
            'nombre' => $this->faker->word,
            'descripcion' => $this->faker->text,
            'precio' => $this->faker->randomFloat(2, 0, 1000),
            'imagen' => $this->faker->imageUrl(640, 480, 'cats', true),
            'familia_id' => $familia->id,
            'subfamilia_id' => $familia->subfamilias->random()->id,
            'activo' => $this->faker->boolean,
        ];
    }
}
