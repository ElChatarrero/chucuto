<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\organismos;

class organismosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        organismos::insert([
        ['id' => '1', 'siglas'=>'MINTUR', 'codigosigecof' =>'44', 'rif'=>'G-20004495-0', 'razonsocial'=>'MINISTERIO DEL PODER POPULAR PARA EL TURISMO', 'telefono'=>'0212-2084651', 'direccionweb'=>'www.mintur.gob.ve', 'correoelectronico'=>'correomintur@mintur.gob.ve', 'fechagaceta'=>'11/2/18', 'numerogaceta'=>'123456', 'status'=>'Activo', 'codigo_sudebip'=>'10000000000000000000', 'ciudad_actas'=>'Caracas', 'sede_principal_id'=>'2'],
        ['id' => '2', 'siglas'=>'INATUR', 'codigosigecof' =>'falta', 'rif'=>'G-20007861-8', 'razonsocial'=>'INSTITUTO NACIONAL DE TURISMO', 'telefono'=>'0212-2087905', 'direccionweb'=>'http://www.mintur.gob.ve/mintur/inatur/', 'correoelectronico'=>'drojas@inatur.gob.ve', 'fechagaceta'=>'11/2/18', 'numerogaceta'=>'37332', 'status'=>'Activo', 'codigo_sudebip'=>'NAC-EJE-INS-00180', 'ciudad_actas'=>'Caracas', 'sede_principal_id'=>'2'],
        ['id' => '3', 'siglas'=>'VENETUR', 'codigosigecof' =>'0', 'rif'=>'G-20005487-5', 'razonsocial'=>'Venezolana de Turismo', 'telefono'=>'0212-5034359', 'direccionweb'=>'http://www.venetur.gob.ve', 'correoelectronico'=>'oficinaalbacaracas@venetur.gob.ve', 'fechagaceta'=>'11/2/18', 'numerogaceta'=>'1', 'status'=>'Activo', 'codigo_sudebip'=>'0', 'ciudad_actas'=>'Caracas', 'sede_principal_id'=>'1'],
        ['id' => '4', 'siglas'=>'VENTEL', 'codigosigecof' =>'0', 'rif'=>'G-20008550-9', 'razonsocial'=>'CompaÃ±Ã­a AnÃ³nima Venezolana de TelefÃ©ricos, VENTEL, C.A.', 'telefono'=>'0212-7935960', 'direccionweb'=>'http://www.mintur.gob.ve/mintur/ventel/', 'correoelectronico'=>'presidencia@ventel.gob.ve', 'fechagaceta'=>'11/2/18', 'numerogaceta'=>'38915', 'status'=>'Activo', 'codigo_sudebib'=>'NAC-EJE-ENP-00192', 'ciudad_actas'=>'Caracas', 'sede_principal_id'=>'31'],
        ['id' => '5', 'siglas'=>'SOGATUR', 'codigosigecof' =>'0', 'rif'=>'G-20010609-3', 'razonsocial'=>'Sociedad de GarantÃ­as RecÃ­procas para la PequeÃ±a y Mediana Empresa del Sector TurÃ­smo', 'telefono'=>'0424-2082234', 'direccionweb'=>'http://www.sogatur.gob.ve/', 'correoelectronico'=>'c', 'fechagaceta'=>'11/1/18', 'numerogaceta'=>'36687', 'status'=>'Activo', 'codigo_sudebip'=>'0', 'ciudad_actas'=>'Caracas', 'sede_principal_id'=>'1']
        ]);
    }
}
