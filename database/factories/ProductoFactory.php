<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Familia;

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
    public function definition()
    {
        $familias = Familia::all();
        foreach($familias as $familia){
            if($familia->tipo == 'producto'){
                count($familia->subfamilias) > 0 ?:
                $familia->subfamilias()->saveMany(SubfamiliaFactory::new()->times(3)->make());
            }
        }

        $familia = Familia::all()->where('tipo','producto')->random();
        return [
            'nombre' => fake()->word(),
            'descripcion' => fake()->text(),
            'precio' => fake()->randomFloat(2, 0, 1000),
            'stock' => fake()->randomNumber(2),
            'imagen' => fake()->imageUrl(640, 480, 'cats', true),
            'familia_id' => $familia->id,
            'subfamilia_id' =>$familia->subfamilias->random()->id,
            'activo' => fake()->boolean,
        ];
    }
}
