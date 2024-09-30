<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\marcas;

class marcasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        marcas::insert([
        ['id'=>'1', 'denominacion'=>'Apple', 'nombredelfabricante'=>'Apple', 'categoria_id'=>'1'],
        ['id'=>'2', 'denominacion'=>'Dell', 'nombredelfabricante'=>'Dell de Venezuela C.A.','categoria_id'=>'1'],
        ['id'=>'3', 'denominacion'=>'HP', 'nombredelfabricante'=>'HP','categoria_id'=>'1'],
        ['id'=>'5', 'denominacion'=>'Lenovo', 'nombredelfabricante'=>'Lenovo','categoria_id'=>'1'],
        ['id'=>'6', 'denominacion'=>'Asus', 'nombredelfabricante'=>'Asus','categoria_id'=>'1'],
        ['id'=>'7', 'denominacion'=>'Acer', 'nombredelfabricante'=>'Acer','categoria_id'=>'1'],
        ['id'=>'8', 'denominacion'=>'CyberPower', 'nombredelfabricante'=>'CyberPower','categoria_id'=>'1'],
        ['id'=>'9', 'denominacion'=>'APC by Schneider Electric', 'nombredelfabricante'=>'APC by Schneider Electric','categoria_id'=>'1'],
        ['id'=>'10', 'denominacion'=>'MICROSOFT', 'nombredelfabricante'=>'MICROSOFT','categoria_id'=>'1'],
        ['id'=>'11', 'denominacion'=>'Eaton ', 'nombredelfabricante'=>'Eaton ','categoria_id'=>'1'],
        ['id'=>'12', 'denominacion'=>'Tripp Lite', 'nombredelfabricante'=>'Tripp Lite','categoria_id'=>'1'],
        ['id'=>'13', 'denominacion'=>'Canon', 'nombredelfabricante'=>'Canon','categoria_id'=>'1'],
        ['id'=>'14', 'denominacion'=>'Epson', 'nombredelfabricante'=>'Epson' ,'categoria_id'=>'1'],
        ['id'=>'15', 'denominacion'=>'Samsung', 'nombredelfabricante'=>'Samsung','categoria_id'=>'1'],
        ['id'=>'16', 'denominacion'=>'LG', 'nombredelfabricante'=>'LG','categoria_id'=>'1'],
        ['id'=>'17', 'denominacion'=>'Netgear', 'nombredelfabricante'=>'Netgear','categoria_id'=>'1'],
        ['id'=>'18', 'denominacion'=>'TP-Link', 'nombredelfabricante'=>'TP-Link','categoria_id'=>'1'],
        ['id'=>'20', 'denominacion'=>'Logitech', 'nombredelfabricante'=>'Logitech','categoria_id'=>'1'],
        ['id'=>'21', 'denominacion'=>'Corsair', 'nombredelfabricante'=>'Corsair','categoria_id'=>'1'],
        ['id'=>'22', 'denominacion'=>'Razer', 'nombredelfabricante'=>'Razer','categoria_id'=>'1'],
        ['id'=>'23', 'denominacion'=>'SteelSeries', 'nombredelfabricante'=>'SteelSeries','categoria_id'=>'1'],
        ['id'=>'24', 'denominacion'=>'Abarth', 'nombredelfabricante'=>'Abarth','categoria_id'=>'1'],
        ['id'=>'25', 'denominacion'=>'Alfa Romeo', 'nombredelfabricante'=>'Alfa Romeo','categoria_id'=>'1'],
        ['id'=>'26', 'denominacion'=>'Audi', 'nombredelfabricante'=>'Audi','categoria_id'=>'2'],
        ['id'=>'27', 'denominacion'=>'BMW', 'nombredelfabricante'=>'BMW','categoria_id'=>'2'],
        ['id'=>'28', 'denominacion'=>'Chevrolet', 'nombredelfabricante'=>'Chevrolet','categoria_id'=>'2'],
        ['id'=>'29', 'denominacion'=>'Citroën', 'nombredelfabricante'=>'Citroën','categoria_id'=>'2'],
        ['id'=>'30', 'denominacion'=>'Fiat', 'nombredelfabricante'=>'Fiat','categoria_id'=>'2'],
        ['id'=>'31', 'denominacion'=>'Ford', 'nombredelfabricante'=>'Ford','categoria_id'=>'2'],
        ['id'=>'32', 'denominacion'=>'Honda', 'nombredelfabricante'=>'Honda','categoria_id'=>'2'],
        ['id'=>'33', 'denominacion'=>'Hyundai', 'nombredelfabricante'=>'Hyundai','categoria_id'=>'2'],
        ['id'=>'36', 'denominacion'=>'Jeep', 'nombredelfabricante'=>'Jeep','categoria_id'=>'2'],
        ['id'=>'38', 'denominacion'=>'KIA', 'nombredelfabricante'=>'KIA','categoria_id'=>'2'],
        ['id'=>'40', 'denominacion'=>'Lamborghini', 'nombredelfabricante'=>'Lamborghini','categoria_id'=>'2'],
        ['id'=>'41', 'denominacion'=>'Land Rover', 'nombredelfabricante'=>'Land Rover','categoria_id'=>'2'],
        ['id'=>'43', 'denominacion'=>'Mazda', 'nombredelfabricante'=>'Mazda','categoria_id'=>'2'],
        ['id'=>'44', 'denominacion'=>'Mercedes-Benz', 'nombredelfabricante'=>'Mercedes-Benz','categoria_id'=>'2'],
        ['id'=>'45', 'denominacion'=>'Nissan', 'nombredelfabricante'=>'Nissan','categoria_id'=>'2'],
        ['id'=>'46', 'denominacion'=>'Peugeot', 'nombredelfabricante'=>'Peugeot','categoria_id'=>'2'],
        ['id'=>'47', 'denominacion'=>'Renault', 'nombredelfabricante'=>'Renault','categoria_id'=>'2'],
        ['id'=>'48', 'denominacion'=>'Toyota', 'nombredelfabricante'=>'Toyota','categoria_id'=>'2'],
        ['id'=>'49', 'denominacion'=>'TPELINK', 'nombredelfabricante'=>'TPELINK','categoria_id'=>'1'],
        ['id'=>'50', 'denominacion'=>'Volkswagen', 'nombredelfabricante'=>'Volkswagen','categoria_id'=>'2'],
        ['id'=>'51', 'denominacion'=>'Empire Keeway', 'nombredelfabricante'=>'Empire Keeway','categoria_id'=>'2'],
        ['id'=>'53', 'denominacion'=>'Bera', 'nombredelfabricante'=>'Bera','categoria_id'=>'2'],
        ['id'=>'57', 'denominacion'=>'Yamaha', 'nombredelfabricante'=>'Yamaha','categoria_id'=>'2'],
        ['id'=>'58', 'denominacion'=>'Honda', 'nombredelfabricante'=>'Honda','categoria_id'=>'2'],
        ['id'=>'59', 'denominacion'=>'Kawasaki', 'nombredelfabricante'=>'Kawasaki','categoria_id'=>'2'],
        ['id'=>'60', 'denominacion'=>'Ducati', 'nombredelfabricante'=>'Ducati','categoria_id'=>'2'],
        ['id'=>'61', 'denominacion'=>'BMW', 'nombredelfabricante'=>'BMW','categoria_id'=>'2'],
        ['id'=>'62', 'denominacion'=>'Suzuki', 'nombredelfabricante'=>'Suzuki','categoria_id'=>'2'],
        ['id'=>'64', 'denominacion'=>'Harley-Davidson', 'nombredelfabricante'=>'Harley-Davidson','categoria_id'=>'2'],
        ['id'=>'65', 'denominacion'=>'Triumph', 'nombredelfabricante'=>'Triumph','categoria_id'=>'2'],
        ['id'=>'69', 'denominacion'=>'KTM', 'nombredelfabricante'=>'KTM','categoria_id'=>'2'],
        ['id'=>'70', 'denominacion'=>'Aprilia', 'nombredelfabricante'=>'Aprilia','categoria_id'=>'2'],
        ['id'=>'71', 'denominacion'=>'Actiu', 'nombredelfabricante'=>'Actiu','categoria_id'=>'3'],
        ['id'=>'72', 'denominacion'=>'Limobel', 'nombredelfabricante'=>'Limobel','categoria_id'=>'3'],
        ['id'=>'73', 'denominacion'=>'Forma5', 'nombredelfabricante'=>'Forma5','categoria_id'=>'3'],
        ['id'=>'74', 'denominacion'=>'Ofifran', 'nombredelfabricante'=>'Ofifran','categoria_id'=>'3'],
        ['id'=>'75', 'denominacion'=>'Staples', 'nombredelfabricante'=>'Staples','categoria_id'=>'3'],
        ['id'=>'76', 'denominacion'=>'Faber-Castell', 'nombredelfabricante'=>'Faber-Castell','categoria_id'=>'3'],
        ['id'=>'77', 'denominacion'=>'Pilot', 'nombredelfabricante'=>'Pilot','categoria_id'=>'3'],
        ['id'=>'78', 'denominacion'=>'3M', 'nombredelfabricante'=>'3M','categoria_id'=>'3']
                ]);
    }
}
