<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Zona;

class ZonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $zona = new Zona();
        $zona->nombre = 'Peluquería';
        $zona->descripcion = 'Peluquería';
        $zona->activo = true;
        $zona->save();

        $zona = new Zona();
        $zona->nombre = 'Estética';
        $zona->descripcion = 'Estética';
        $zona->activo = true;
        $zona->save();
    }
}
