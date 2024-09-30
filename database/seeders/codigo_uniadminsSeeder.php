<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\codigo_uniadmin;

class codigo_uniadminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        codigo_uniadmin::insert([
            ['descripcion'=> 'Despacho del Presidente'],
            ['descripcion'=> 'Despacho del Vicepresidente'],
            ['descripcion'=> 'Despacho del Ministro'],
            ['descripcion'=> 'Despacho Viceministro'],
            ['descripcion'=> 'Dirección General'],
            ['descripcion'=> 'Dirección de Línea'],
            ['descripcion'=> 'Coordinación'],
            ['descripcion'=> 'División'],
            ['descripcion'=> 'Departamento'],
            ['descripcion'=> 'Presidencia'],
            ['descripcion'=> 'Gerencia General'],
            ['descripcion'=> 'Gerencia '],
            ['descripcion'=> 'Sub-Gerencia'],
            ['descripcion'=> 'Despacho del Superintendente'],
            ['descripcion'=> 'Dirección General Adjunta'],
            ['descripcion'=> 'Intendencia'],
            ['descripcion'=> 'Unidad Ad- Hoc'],
            ['descripcion'=> 'Área Organizacional'],
            ['descripcion'=> 'Área de Trabajo'],
            ['descripcion'=> 'Otra Categoría de Unidad']

        ]);
    }
}
