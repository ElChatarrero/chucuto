<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\bienes;

class BienesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        bienes::insert([
            ['id' => '112', 'nombre' => 'laptop VIT', 'N_bien' => '124', 'observacion' => 'usado', 'condiciones_id' => '3', 'categoria_id'=>'9', 'modelos_id'=>'5', 'marca_id'=>'3', 'estatus'=>true, 'disponible'=>'1'],
            ['id' => '1224', 'nombre' => 'impresa laser', 'N_bien' => '12412', 'observacion' => 'usado', 'condiciones_id' => '3', 'categoria_id'=>'1', 'modelos_id'=>'6', 'marca_id'=>'5', 'estatus'=>true, 'disponible'=>'1'],
            ['id' => '3463', 'nombre' => 'impresora de carnet', 'N_bien' => '311', 'observacion' => 'usado', 'condiciones_id' => '3', 'categoria_id'=>'1', 'modelos_id'=>'2', 'marca_id'=>'8', 'estatus'=>true, 'disponible'=>'1'],
            ['id' => '2352', 'nombre' => 'telefono lenovo', 'N_bien' => '4124', 'observacion' => 'usado', 'condiciones_id' => '3', 'categoria_id'=>'7', 'modelos_id'=>'7', 'marca_id'=>'13', 'estatus'=>true, 'disponible'=>'0'],
            ['id' => '658', 'nombre' => 'disco duro 2tb', 'N_bien' => '357', 'observacion' => 'usado', 'condiciones_id' => '3', 'categoria_id'=>'13', 'modelos_id'=>'12', 'marca_id'=>'27', 'estatus'=>true, 'disponible'=>'1'],
            ['id' => '351', 'nombre' => 'laptop HP', 'N_bien' => '6236', 'observacion' => 'usado', 'condiciones_id' => '3', 'categoria_id'=>'9', 'modelos_id'=>'27', 'marca_id'=>'22', 'estatus'=>true, 'disponible'=>'0'],
            ['id' => '751', 'nombre' => 'pendrive kingtons 64 gb', 'N_bien' => '685', 'observacion' => 'usado', 'condiciones_id' => '3', 'categoria_id'=>'8', 'modelos_id'=>'25', 'marca_id'=>'21', 'estatus'=>true, 'disponible'=>'0'],
            ['id' => '8153', 'nombre' => 'monitor benq', 'N_bien' => '163', 'observacion' => 'usado', 'condiciones_id' => '3', 'categoria_id'=>'2', 'modelos_id'=>'20', 'marca_id'=>'18', 'estatus'=>true, 'disponible'=>'1'],
            ['id' => '124', 'nombre' => 'teclado mecanico', 'N_bien' => '132', 'observacion' => 'usado', 'condiciones_id' => '3', 'categoria_id'=>'6', 'modelos_id'=>'15', 'marca_id'=>'24', 'estatus'=>true, 'disponible'=>'1'],
            ['id' => '10', 'nombre' => 'impresora epson', 'N_bien' => '94046', 'observacion' => 'usado', 'condiciones_id' => '3', 'categoria_id'=>'1', 'modelos_id'=>'13', 'marca_id'=>'6', 'estatus'=>true, 'disponible'=>'0'],
            ['id' => '098', 'nombre' => 'table ipad', 'N_bien' => '13756', 'observacion' => 'usado', 'condiciones_id' => '3', 'categoria_id'=>'10', 'modelos_id'=>'8', 'marca_id'=>'7', 'estatus'=>true, 'disponible'=>'1'],
            ['id' => '5765', 'nombre' => 'CPU gamer', 'N_bien' => '12415,', 'observacion' => 'usado', 'condiciones_id' => '3', 'categoria_id'=>'3', 'modelos_id'=>'12', 'marca_id'=>'15', 'estatus'=>true, 'disponible'=>'1']
        ]);
    }
}
