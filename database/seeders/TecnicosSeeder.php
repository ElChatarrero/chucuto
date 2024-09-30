<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tecnicos;

class TecnicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tecnicos::insert([
            ['nombres'=> 'Alejandro', 'apellidos'=> 'Escalante', 'correo_electronico'=> 'aljoes50@gmail.com', 'extension'=> 'no aplica', 'cargo_id'=> '3','users_id'=> '1'],
             ['nombres'=> 'Joel', 'apellidos'=> 'Zerpa', 'correo_electronico'=> 'fede50@gmail.com', 'extension'=> 'no aplica', 'cargo_id_'=> '2', 'users_id'=> '1'],

     ]);
    }
}
