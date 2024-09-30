<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\cargos;

class cargosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        cargos::insert([
            ['descripcion'=> 'Tecnico'],
            ['descripcion'=> 'Ministro'],
            ['descripcion'=> 'Director de Linea'],
            ['descripcion'=> 'ViceMinistro'],
            ['descripcion'=> 'Desarrollador de Sistemas'],
            ['descripcion'=> 'ViceRector'],
            ['descripcion'=> 'Supervisor'],
            ['descripcion'=> 'Administrador'],
            ['descripcion'=> 'Analista de Desarrollo']

        ]);
    }
}
