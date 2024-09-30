<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\categorias;
class categoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        categorias::insert([
            ['id' => '1', 'descripcion'=> 'Disco Duro', 'tipo'=>'1'],
            ['id' => '2', 'descripcion'=> 'UPS', 'tipo'=>'1'],
            ['id' => '3', 'descripcion'=> 'Impresoras', 'tipo'=>'1'],
            ['id' => '4', 'descripcion'=> 'Laptop', 'tipo'=>'1'],
            ['id' => '5', 'descripcion'=> 'Modems', 'tipo'=>'1'],
            ['id' => '6', 'descripcion'=> 'Monitor', 'tipo'=>'1'],
            ['id' => '7', 'descripcion'=> 'PC', 'tipo'=>'1'],
            ['id' => '8', 'descripcion'=> 'Pendrive', 'tipo'=>'1'],
            ['id' => '9', 'descripcion'=> 'Procesador', 'tipo'=>'1'],
            ['id' => '10', 'descripcion'=> 'Reguladores', 'tipo'=>'1'],
            ['id' => '11', 'descripcion'=> 'Routers', 'tipo'=>'1'],
            ['id' => '12', 'descripcion'=> 'Switches', 'tipo'=>'1'],
            ['id' => '13', 'descripcion'=> 'Tablets', 'tipo'=>'1'],
            ['id' => '14', 'descripcion'=> 'Tarjeta de Video', 'tipo'=>'1'],
            ['id' => '15', 'descripcion'=> 'Tarjeta Madre', 'tipo'=>'1'],
            ['id' => '16', 'descripcion'=> 'Teclados', 'tipo'=>'1'],
            ['id' => '17', 'descripcion'=> 'Telefono', 'tipo'=>'1'],
            ['id' => '18', 'descripcion'=> 'Carro', 'tipo'=>'2'],
            ['id' => '19', 'descripcion'=> 'Camioneta', 'tipo'=>'2'],
            ['id' => '20', 'descripcion'=> 'Autobus', 'tipo'=>'2'],
            ['id' => '21', 'descripcion'=> 'Moto', 'tipo'=>'2'],
            ['id' => '22', 'descripcion'=> 'Mesa de oficina', 'tipo'=>'3'],
            ['id' => '23', 'descripcion'=> 'Silla de oficina', 'tipo'=>'3'],
            ['id' => '24', 'descripcion'=> 'Sofa de recepcion', 'tipo'=>'3'],
            ['id' => '25', 'descripcion'=> 'Mueble de recepcion', 'tipo'=>'3'],
            ['id' => '26', 'descripcion'=> 'Archivadores', 'tipo'=>'3'],
            ['id' => '27', 'descripcion'=> 'Cajoneras', 'tipo'=>'3'],
            ['id' => '28', 'descripcion'=> 'Estanterias', 'tipo'=>'3'],
            ['id' => '29', 'descripcion'=> 'Armarios', 'tipo'=>'3'],
            ['id' => '30', 'descripcion'=> 'Accesorios y material de oficina', 'tipo'=>'3'],

        ]);
    }
}
