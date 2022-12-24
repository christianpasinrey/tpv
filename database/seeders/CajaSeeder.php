<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Caja;

class CajaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $caja = new Caja();
        $caja->nombre = 'Caja 1';
        $caja->descripcion = 'Caja 1';
        $caja->activo = true;

        $caja->save();

        $caja = new Caja();
        $caja->nombre = 'Caja 2';
        $caja->descripcion = 'Caja 2';
        $caja->activo = true;

        $caja->save();

        $caja = new Caja();
        $caja->nombre = 'Caja 3';
        $caja->descripcion = 'Caja 3';
        $caja->activo = true;

        $caja->save();
    }
}
