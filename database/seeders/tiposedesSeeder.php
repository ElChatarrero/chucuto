<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tiposede;

class tiposedesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tiposede::insert([
            ['descripcion'=> 'Sede Principal'],
            ['descripcion'=> 'Puerto'],
            ['descripcion'=> 'Aeropuerto'],
            ['descripcion'=> 'Campamento'],
            ['descripcion'=> 'Taller'],
            ['descripcion'=> 'Almacen'],
            ['descripcion'=> 'Galpon'],
            ['descripcion'=> 'Otro tipo de Sede o Lugar'],
        ]);
    }
}
