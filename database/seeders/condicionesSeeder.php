<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\condiciones;

class condicionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        condiciones::insert([
            ['descripcion'=> 'En reparacion', 'disponibilidad'=> false],
            ['descripcion'=> 'Averiado', 'disponibilidad'=> false],
            ['descripcion'=> 'Buen estado', 'disponibilidad'=> true],
            ['descripcion'=> 'Extraviado', 'disponibilidad'=> false],
            ['descripcion'=> 'Nuevo','disponibilidad'=> true]
        ]);
    }
}
