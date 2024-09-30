<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            estadoSeeder::class,
            municipioSeeder::class,
            parroquiaSeeder::class,
            rolSeeder::class,
            UsertypesTableSeeder::class,
            UsersTableSeeder::class,
            organismosSeeder::class,
            cargosSeeder::class,
            categoriasSeeder::class,
            codigo_uniadminsSeeder::class,
            condicionesSeeder::class,
            tiposedesSeeder::class,
            marcasSeeder::class,
            modelosSeeder::class,
            BienesSeeder::class,
            TecnicosSeeder::class,
    	]);
    }
}
