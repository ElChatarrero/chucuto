<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\municipios;

class municipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        municipios::insert([
            ['id' => '101', 'nombre' => 'ALTO ORINOCO', 'municipio_id' => '101', 'estado_id' => '1'],
            ['id' => '102', 'nombre' => 'ATABAPO', 'municipio_id' => '102', 'estado_id' => '1'],
            ['id' => '103', 'nombre' => 'ATURES', 'municipio_id' => '103', 'estado_id' => '1'],
            ['id' => '104', 'nombre' => 'AUTANA', 'municipio_id' => '104', 'estado_id' => '1'],
            ['id' => '105', 'nombre' => 'MANAPIARE', 'municipio_id' => '105', 'estado_id' => '1'],
            ['id' => '106', 'nombre' => 'MAROA', 'municipio_id' => '106', 'estado_id' => '1'],
            ['id' => '107', 'nombre' => 'RIO NEGRO', 'municipio_id' => '107', 'estado_id' => '1'],
            ['id' => '202', 'nombre' => 'ARAGUA', 'municipio_id' => '202', 'estado_id' => '2'],
            ['id' => '203', 'nombre' => 'DIEGO BAUTISTA URBANEJA', 'municipio_id' => '203', 'estado_id' => '2'],
            ['id' => '204', 'nombre' => 'FERNANDO PEÑALVER', 'municipio_id' => '204', 'estado_id' => '2'],
            ['id' => '205', 'nombre' => 'CARVAJAL', 'municipio_id' => '205', 'estado_id' => '2'],
            ['id' => '206', 'nombre' => 'FRANCISCO DE MIRANDA', 'municipio_id' => '206', 'estado_id' => '2'],
            ['id' => '207', 'nombre' => 'GUANTA', 'municipio_id' => '207', 'estado_id' => '2'],
            ['id' => '208', 'nombre' => 'INDEPENDENCIA', 'municipio_id' => '208', 'estado_id' => '2'],
            ['id' => '209', 'nombre' => 'JOSE GREGORIO MONAGAS', 'municipio_id' => '209', 'estado_id' => '2'],
            ['id' => '210', 'nombre' => 'JUAN ANTONIO SOTILLO', 'municipio_id' => '210', 'estado_id' => '2'],
            ['id' => '211', 'nombre' => 'JUAN MANUEL CAJIGAL', 'municipio_id' => '211', 'estado_id' => '2'],
            ['id' => '212', 'nombre' => 'LIBERTAD', 'municipio_id' => '212', 'estado_id' => '2'],
            ['id' => '213', 'nombre' => 'MANUEL EZEQUIEL BRUZUAL', 'municipio_id' => '213', 'estado_id' => '2'],
            ['id' => '214', 'nombre' => 'PEDRO MARIA FREITES', 'municipio_id' => '214', 'estado_id' => '2'],
            ['id' => '215', 'nombre' => 'PIRITU', 'municipio_id' => '215', 'estado_id' => '2'],
            ['id' => '216', 'nombre' => 'SAN JOSE DE GUANIPA', 'municipio_id' => '216', 'estado_id' => '2'],
            ['id' => '217', 'nombre' => 'SAN JUAN DE CAPISTRANO', 'municipio_id' => '217', 'estado_id' => '2'],
            ['id' => '218', 'nombre' => 'SANTA ANA', 'municipio_id' => '218', 'estado_id' => '2'],
            ['id' => '219', 'nombre' => 'SIMON BOLIVAR', 'municipio_id' => '219', 'estado_id' => '2'],
            ['id' => '220', 'nombre' => 'SIMON RODRIGUEZ', 'municipio_id' => '220', 'estado_id' => '2'],
            ['id' => '221', 'nombre' => 'MC GREGOR', 'municipio_id' => '221', 'estado_id' => '2'],
            ['id' => '201', 'nombre' => 'ANACO', 'municipio_id' => '201', 'estado_id' => '2'],
            ['id' => '302', 'nombre' => 'BIRUACA', 'municipio_id' => '302', 'estado_id' => '3'],
            ['id' => '303', 'nombre' => 'MUÑOZ', 'municipio_id' => '303', 'estado_id' => '3'],
            ['id' => '304', 'nombre' => 'PEDRO CAMEJO', 'municipio_id' => '304', 'estado_id' => '3'],
            ['id' => '305', 'nombre' => 'SAN FERNANDO', 'municipio_id' => '305', 'estado_id' => '3'],
            ['id' => '306', 'nombre' => 'PAEZ', 'municipio_id' => '306', 'estado_id' => '3'],
            ['id' => '307', 'nombre' => 'ROMULO GALLEGOS', 'municipio_id' => '307', 'estado_id' => '3'],
            ['id' => '301', 'nombre' => 'ACHAGUAS', 'municipio_id' => '301', 'estado_id' => '3'],
            ['id' => '402', 'nombre' => 'CAMATAGUA', 'municipio_id' => '402', 'estado_id' => '4'],
            ['id' => '403', 'nombre' => 'FRANCISCO LINARES ALCANTARA', 'municipio_id' => '403', 'estado_id' => '4'],
            ['id' => '404', 'nombre' => 'ATANASIO GIRARDOT', 'municipio_id' => '404', 'estado_id' => '4'],
            ['id' => '405', 'nombre' => 'JOSE ANGEL LAMAS', 'municipio_id' => '405', 'estado_id' => '4'],
            ['id' => '406', 'nombre' => 'JOSE FELIX RIBAS', 'municipio_id' => '406', 'estado_id' => '4'],
            ['id' => '407', 'nombre' => 'JOSE RAFAEL REVENGA', 'municipio_id' => '407', 'estado_id' => '4'],
            ['id' => '408', 'nombre' => 'LIBERTADOR', 'municipio_id' => '408', 'estado_id' => '4'],
            ['id' => '409', 'nombre' => 'MARIO BRICEÑO IRAGORRY', 'municipio_id' => '409', 'estado_id' => '4'],
            ['id' => '410', 'nombre' => 'OCUMARE DE LA COSTA DE ORO', 'municipio_id' => '410', 'estado_id' => '4'],
            ['id' => '411', 'nombre' => 'SAN CASIMIRO', 'municipio_id' => '411', 'estado_id' => '4'],
            ['id' => '412', 'nombre' => 'SAN SEBASTIAN', 'municipio_id' => '412', 'estado_id' => '4'],
            ['id' => '413', 'nombre' => 'SANTIAGO MARIÑO', 'municipio_id' => '413', 'estado_id' => '4'],
            ['id' => '414', 'nombre' => 'SANTOS MICHELENA', 'municipio_id' => '414', 'estado_id' => '4'],
            ['id' => '415', 'nombre' => 'SUCRE', 'municipio_id' => '415', 'estado_id' => '4'],
            ['id' => '416', 'nombre' => 'TOVAR', 'municipio_id' => '416', 'estado_id' => '4'],
            ['id' => '417', 'nombre' => 'URDANETA', 'municipio_id' => '417', 'estado_id' => '4'],
            ['id' => '418', 'nombre' => 'ZAMORA', 'municipio_id' => '418', 'estado_id' => '4'],
            ['id' => '401', 'nombre' => 'BOLIVAR', 'municipio_id' => '401', 'estado_id' => '4'],
            ['id' => '502', 'nombre' => 'ANDRES ELOY BLANCO', 'municipio_id' => '502', 'estado_id' => '5'],
            ['id' => '503', 'nombre' => 'ANTONIO JOSE DE SUCRE', 'municipio_id' => '503', 'estado_id' => '5'],
            ['id' => '504', 'nombre' => 'ARISMENDI', 'municipio_id' => '504', 'estado_id' => '5'],
            ['id' => '505', 'nombre' => 'BARINAS', 'municipio_id' => '505', 'estado_id' => '5'],
            ['id' => '506', 'nombre' => 'BOLIVAR', 'municipio_id' => '506', 'estado_id' => '5'],
            ['id' => '507', 'nombre' => 'CRUZ PAREDES', 'municipio_id' => '507', 'estado_id' => '5'],
            ['id' => '508', 'nombre' => 'EZEQUIEL ZAMORA', 'municipio_id' => '508', 'estado_id' => '5'],
            ['id' => '509', 'nombre' => 'OBISPOS', 'municipio_id' => '509', 'estado_id' => '5'],
            ['id' => '510', 'nombre' => 'PEDRAZA', 'municipio_id' => '510', 'estado_id' => '5'],
            ['id' => '511', 'nombre' => 'ROJAS', 'municipio_id' => '511', 'estado_id' => '5'],
            ['id' => '512', 'nombre' => 'SOSA', 'municipio_id' => '512', 'estado_id' => '5'],
            ['id' => '501', 'nombre' => 'ALBERTO ARVELO TORREALBA', 'municipio_id' => '501', 'estado_id' => '5'],
            ['id' => '602', 'nombre' => 'CEDEÑO', 'municipio_id' => '602', 'estado_id' => '6'],
            ['id' => '603', 'nombre' => 'EL CALLAO', 'municipio_id' => '603', 'estado_id' => '6'],
            ['id' => '604', 'nombre' => 'GRAN SABANA', 'municipio_id' => '604', 'estado_id' => '6'],
            ['id' => '605', 'nombre' => 'HERES', 'municipio_id' => '605', 'estado_id' => '6'],
            ['id' => '606', 'nombre' => 'PADRE PEDRO CHIEN', 'municipio_id' => '606', 'estado_id' => '6'],
            ['id' => '607', 'nombre' => 'PIAR', 'municipio_id' => '607', 'estado_id' => '6'],
            ['id' => '608', 'nombre' => 'BOLIVARIANO ANGOSTURA', 'municipio_id' => '608', 'estado_id' => '6'],
            ['id' => '609', 'nombre' => 'ROSCIO', 'municipio_id' => '609', 'estado_id' => '6'],
            ['id' => '610', 'nombre' => 'SIFONTES', 'municipio_id' => '610', 'estado_id' => '6'],
            ['id' => '611', 'nombre' => 'SUCRE', 'municipio_id' => '611', 'estado_id' => '6'],
            ['id' => '601', 'nombre' => 'CARONI', 'municipio_id' => '601', 'estado_id' => '6'],
            ['id' => '702', 'nombre' => 'CARLOS ARVELO', 'municipio_id' => '702', 'estado_id' => '7'],
            ['id' => '703', 'nombre' => 'DIEGO IBARRA', 'municipio_id' => '703', 'estado_id' => '7'],
            ['id' => '704', 'nombre' => 'GUACARA', 'municipio_id' => '704', 'estado_id' => '7'],
            ['id' => '705', 'nombre' => 'JUAN JOSE MORA', 'municipio_id' => '705', 'estado_id' => '7'],
            ['id' => '706', 'nombre' => 'LIBERTADOR', 'municipio_id' => '706', 'estado_id' => '7'],
            ['id' => '707', 'nombre' => 'LOS GUAYOS', 'municipio_id' => '707', 'estado_id' => '7'],
            ['id' => '708', 'nombre' => 'MIRANDA', 'municipio_id' => '708', 'estado_id' => '7'],
            ['id' => '709', 'nombre' => 'MONTALBAN', 'municipio_id' => '709', 'estado_id' => '7'],
            ['id' => '710', 'nombre' => 'NAGUANAGUA', 'municipio_id' => '710', 'estado_id' => '7'],
            ['id' => '711', 'nombre' => 'PUERTO CABELLO', 'municipio_id' => '711', 'estado_id' => '7'],
            ['id' => '712', 'nombre' => 'SAN DIEGO', 'municipio_id' => '712', 'estado_id' => '7'],
            ['id' => '713', 'nombre' => 'SAN JOAQUIN', 'municipio_id' => '713', 'estado_id' => '7'],
            ['id' => '714', 'nombre' => 'VALENCIA', 'municipio_id' => '714', 'estado_id' => '7'],
            ['id' => '701', 'nombre' => 'BEJUMA', 'municipio_id' => '701', 'estado_id' => '7'],
            ['id' => '802', 'nombre' => 'PAO DE SAN JUAN BAUTISTA', 'municipio_id' => '802', 'estado_id' => '8'],
            ['id' => '803', 'nombre' => 'TINAQUILLO', 'municipio_id' => '803', 'estado_id' => '8'],
            ['id' => '804', 'nombre' => 'GIRARDOT', 'municipio_id' => '804', 'estado_id' => '8'],
            ['id' => '805', 'nombre' => 'LIMA BLANCO', 'municipio_id' => '805', 'estado_id' => '8'],
            ['id' => '806', 'nombre' => 'RICAURTE', 'municipio_id' => '806', 'estado_id' => '8'],
            ['id' => '807', 'nombre' => 'ROMULO GALLEGOS', 'municipio_id' => '807', 'estado_id' => '8'],
            ['id' => '808', 'nombre' => 'EZEQUIEL ZAMORA', 'municipio_id' => '808', 'estado_id' => '8'],
            ['id' => '809', 'nombre' => 'TINACO', 'municipio_id' => '809', 'estado_id' => '8'],
            ['id' => '801', 'nombre' => 'ANZOATEGUI', 'municipio_id' => '801', 'estado_id' => '8'],
            ['id' => '902', 'nombre' => 'CASACOIMA', 'municipio_id' => '902', 'estado_id' => '9'],
            ['id' => '903', 'nombre' => 'PEDERNALES', 'municipio_id' => '903', 'estado_id' => '9'],
            ['id' => '904', 'nombre' => 'TUCUPITA', 'municipio_id' => '904', 'estado_id' => '9'],
            ['id' => '901', 'nombre' => 'ANTONIO DIAZ', 'municipio_id' => '901', 'estado_id' => '9'],
            ['id' => '1001', 'nombre' => 'LIBERTADOR', 'municipio_id' => '1001', 'estado_id' => '10'],
            ['id' => '1102', 'nombre' => 'BOLIVAR', 'municipio_id' => '1102', 'estado_id' => '11'],
            ['id' => '1103', 'nombre' => 'BUCHIVACOA', 'municipio_id' => '1103', 'estado_id' => '11'],
            ['id' => '1104', 'nombre' => 'CACIQUE MANAURE', 'municipio_id' => '1104', 'estado_id' => '11'],
            ['id' => '1105', 'nombre' => 'CARIRUBANA', 'municipio_id' => '1105', 'estado_id' => '11'],
            ['id' => '1106', 'nombre' => 'COLINA', 'municipio_id' => '1106', 'estado_id' => '11'],
            ['id' => '1107', 'nombre' => 'DABAJURO', 'municipio_id' => '1107', 'estado_id' => '11'],
            ['id' => '1108', 'nombre' => 'DEMOCRACIA', 'municipio_id' => '1108', 'estado_id' => '11'],
            ['id' => '1109', 'nombre' => 'FALCON', 'municipio_id' => '1109', 'estado_id' => '11'],
            ['id' => '1110', 'nombre' => 'FEDERACION', 'municipio_id' => '1110', 'estado_id' => '11'],
            ['id' => '1111', 'nombre' => 'JACURA', 'municipio_id' => '1111', 'estado_id' => '11'],
            ['id' => '1112', 'nombre' => 'LOS TAQUES', 'municipio_id' => '1112', 'estado_id' => '11'],
            ['id' => '1113', 'nombre' => 'MAUROA', 'municipio_id' => '1113', 'estado_id' => '11'],
            ['id' => '1114', 'nombre' => 'MIRANDA', 'municipio_id' => '1114', 'estado_id' => '11'],
            ['id' => '1115', 'nombre' => 'MONSEÑOR ITURRIZA', 'municipio_id' => '1115', 'estado_id' => '11'],
            ['id' => '1116', 'nombre' => 'PALMA SOLA', 'municipio_id' => '1116', 'estado_id' => '11'],
            ['id' => '1117', 'nombre' => 'PETIT', 'municipio_id' => '1117', 'estado_id' => '11'],
            ['id' => '1118', 'nombre' => 'PIRITU', 'municipio_id' => '1118', 'estado_id' => '11'],
            ['id' => '1119', 'nombre' => 'SAN FRANCISCO', 'municipio_id' => '1119', 'estado_id' => '11'],
            ['id' => '1120', 'nombre' => 'JOSE LAURENCIO SILVA', 'municipio_id' => '1120', 'estado_id' => '11'],
            ['id' => '1121', 'nombre' => 'SUCRE', 'municipio_id' => '1121', 'estado_id' => '11'],
            ['id' => '1122', 'nombre' => 'TOCOPERO', 'municipio_id' => '1122', 'estado_id' => '11'],
            ['id' => '1123', 'nombre' => 'UNION', 'municipio_id' => '1123', 'estado_id' => '11'],
            ['id' => '1124', 'nombre' => 'URUMACO', 'municipio_id' => '1124', 'estado_id' => '11'],
            ['id' => '1125', 'nombre' => 'ZAMORA', 'municipio_id' => '1125', 'estado_id' => '11'],
            ['id' => '1101', 'nombre' => 'ACOSTA', 'municipio_id' => '1101', 'estado_id' => '11'],
            ['id' => '1202', 'nombre' => 'CHAGUARAMAS', 'municipio_id' => '1202', 'estado_id' => '12'],
            ['id' => '1203', 'nombre' => 'EL SOCORRO', 'municipio_id' => '1203', 'estado_id' => '12'],
            ['id' => '1204', 'nombre' => 'SEBASTIAN FRANCISCO DE MIRANDA', 'municipio_id' => '1204', 'estado_id' => '12'],
            ['id' => '1205', 'nombre' => 'RIBAS', 'municipio_id' => '1205', 'estado_id' => '12'],
            ['id' => '1206', 'nombre' => 'JOSE TADEO MONAGAS', 'municipio_id' => '1206', 'estado_id' => '12'],
            ['id' => '1207', 'nombre' => 'JUAN GERMAN ROSCIO', 'municipio_id' => '1207', 'estado_id' => '12'],
            ['id' => '1208', 'nombre' => 'JULIAN MELLADO', 'municipio_id' => '1208', 'estado_id' => '12'],
            ['id' => '1209', 'nombre' => 'LAS MERCEDES', 'municipio_id' => '1209', 'estado_id' => '12'],
            ['id' => '1210', 'nombre' => 'INFANTE', 'municipio_id' => '1210', 'estado_id' => '12'],
            ['id' => '1211', 'nombre' => 'ORTIZ', 'municipio_id' => '1211', 'estado_id' => '12'],
            ['id' => '1212', 'nombre' => 'PEDRO ZARAZA', 'municipio_id' => '1212', 'estado_id' => '12'],
            ['id' => '1213', 'nombre' => 'SAN GERONIMO DE GUAYABAL', 'municipio_id' => '1213', 'estado_id' => '12'],
            ['id' => '1214', 'nombre' => 'SAN JOSE DE GUARIBE', 'municipio_id' => '1214', 'estado_id' => '12'],
            ['id' => '1215', 'nombre' => 'SANTA MARIA DE IPIRE', 'municipio_id' => '1215', 'estado_id' => '12'],
            ['id' => '1201', 'nombre' => 'CAMAGUAN', 'municipio_id' => '1201', 'estado_id' => '12'],
            ['id' => '1301', 'nombre' => 'VARGAS', 'municipio_id' => '1301', 'estado_id' => '13'],
            ['id' => '1402', 'nombre' => 'CRESPO', 'municipio_id' => '1402', 'estado_id' => '14'],
            ['id' => '1403', 'nombre' => 'MORAN', 'municipio_id' => '1403', 'estado_id' => '14'],
            ['id' => '1404', 'nombre' => 'PALAVECINO', 'municipio_id' => '1404', 'estado_id' => '14'],
            ['id' => '1405', 'nombre' => 'SIMON PLANAS', 'municipio_id' => '1405', 'estado_id' => '14'],
            ['id' => '1406', 'nombre' => 'TORRES', 'municipio_id' => '1406', 'estado_id' => '14'],
            ['id' => '1407', 'nombre' => 'URDANETA', 'municipio_id' => '1407', 'estado_id' => '14'],
            ['id' => '1408', 'nombre' => 'IRIBARREN', 'municipio_id' => '1408', 'estado_id' => '14'],
            ['id' => '1409', 'nombre' => 'JIMENEZ', 'municipio_id' => '1409', 'estado_id' => '14'],
            ['id' => '1401', 'nombre' => 'ANDRES ELOY BLANCO', 'municipio_id' => '1401', 'estado_id' => '14'],
            ['id' => '1502', 'nombre' => 'ANTONIO PINTO SALINAS', 'municipio_id' => '1502', 'estado_id' => '15'],
            ['id' => '1503', 'nombre' => 'ANDRES BELLO', 'municipio_id' => '1503', 'estado_id' => '15'],
            ['id' => '1504', 'nombre' => 'ARICAGUA', 'municipio_id' => '1504', 'estado_id' => '15'],
            ['id' => '1505', 'nombre' => 'ARZOBISPO CHACON', 'municipio_id' => '1505', 'estado_id' => '15'],
            ['id' => '1506', 'nombre' => 'CAMPO ELIAS', 'municipio_id' => '1506', 'estado_id' => '15'],
            ['id' => '1507', 'nombre' => 'CARACCIOLO PARRA OLMEDO', 'municipio_id' => '1507', 'estado_id' => '15'],
            ['id' => '1508', 'nombre' => 'CARDENAL QUINTERO', 'municipio_id' => '1508', 'estado_id' => '15'],
            ['id' => '1509', 'nombre' => 'GUARAQUE', 'municipio_id' => '1509', 'estado_id' => '15'],
            ['id' => '1510', 'nombre' => 'JULIO CESAR SALAS', 'municipio_id' => '1510', 'estado_id' => '15'],
            ['id' => '1511', 'nombre' => 'JUSTO BRICEÑO', 'municipio_id' => '1511', 'estado_id' => '15'],
            ['id' => '1512', 'nombre' => 'LIBERTADOR', 'municipio_id' => '1512', 'estado_id' => '15'],
            ['id' => '1513', 'nombre' => 'MIRANDA', 'municipio_id' => '1513', 'estado_id' => '15'],
            ['id' => '1514', 'nombre' => 'OBISPO RAMOS DE LORA', 'municipio_id' => '1514', 'estado_id' => '15'],
            ['id' => '1515', 'nombre' => 'PADRE NOGUERA', 'municipio_id' => '1515', 'estado_id' => '15'],
            ['id' => '1516', 'nombre' => 'PUEBLO LLANO', 'municipio_id' => '1516', 'estado_id' => '15'],
            ['id' => '1517', 'nombre' => 'RANGEL', 'municipio_id' => '1517', 'estado_id' => '15'],
            ['id' => '1518', 'nombre' => 'RIVAS DAVILA', 'municipio_id' => '1518', 'estado_id' => '15'],
            ['id' => '1519', 'nombre' => 'SANTOS MARQUINA', 'municipio_id' => '1519', 'estado_id' => '15'],
            ['id' => '1520', 'nombre' => 'SUCRE', 'municipio_id' => '1520', 'estado_id' => '15'],
            ['id' => '1521', 'nombre' => 'TOVAR', 'municipio_id' => '1521', 'estado_id' => '15'],
            ['id' => '1522', 'nombre' => 'TULIO FEBRES CORDERO', 'municipio_id' => '1522', 'estado_id' => '15'],
            ['id' => '1523', 'nombre' => 'ZEA', 'municipio_id' => '1523', 'estado_id' => '15'],
            ['id' => '1501', 'nombre' => 'ALBERTO ADRIANI', 'municipio_id' => '1501', 'estado_id' => '15'],
            ['id' => '1602', 'nombre' => 'ANDRES BELLO', 'municipio_id' => '1602', 'estado_id' => '16'],
            ['id' => '1603', 'nombre' => 'BARUTA', 'municipio_id' => '1603', 'estado_id' => '16'],
            ['id' => '1604', 'nombre' => 'BRION', 'municipio_id' => '1604', 'estado_id' => '16'],
            ['id' => '1605', 'nombre' => 'BUROZ', 'municipio_id' => '1605', 'estado_id' => '16'],
            ['id' => '1606', 'nombre' => 'CARRIZAL', 'municipio_id' => '1606', 'estado_id' => '16'],
            ['id' => '1607', 'nombre' => 'CHACAO', 'municipio_id' => '1607', 'estado_id' => '16'],
            ['id' => '1608', 'nombre' => 'CRISTOBAL ROJAS', 'municipio_id' => '1608', 'estado_id' => '16'],
            ['id' => '1609', 'nombre' => 'EL HATILLO', 'municipio_id' => '1609', 'estado_id' => '16'],
            ['id' => '1610', 'nombre' => 'GUAICAIPURO', 'municipio_id' => '1610', 'estado_id' => '16'],
            ['id' => '1611', 'nombre' => 'INDEPENDENCIA', 'municipio_id' => '1611', 'estado_id' => '16'],
            ['id' => '1612', 'nombre' => 'LANDER', 'municipio_id' => '1612', 'estado_id' => '16'],
            ['id' => '1613', 'nombre' => 'LOS SALIAS', 'municipio_id' => '1613', 'estado_id' => '16'],
            ['id' => '1614', 'nombre' => 'PAEZ', 'municipio_id' => '1614', 'estado_id' => '16'],
            ['id' => '1615', 'nombre' => 'PAZ CASTILLO', 'municipio_id' => '1615', 'estado_id' => '16'],
            ['id' => '1616', 'nombre' => 'PEDRO GUAL', 'municipio_id' => '1616', 'estado_id' => '16'],
            ['id' => '1617', 'nombre' => 'PLAZA', 'municipio_id' => '1617', 'estado_id' => '16'],
            ['id' => '1618', 'nombre' => 'SIMON BOLIVAR', 'municipio_id' => '1618', 'estado_id' => '16'],
            ['id' => '1619', 'nombre' => 'URDANETA', 'municipio_id' => '1619', 'estado_id' => '16'],
            ['id' => '1620', 'nombre' => 'SUCRE', 'municipio_id' => '1620', 'estado_id' => '16'],
            ['id' => '1621', 'nombre' => 'ZAMORA', 'municipio_id' => '1621', 'estado_id' => '16'],
            ['id' => '1601', 'nombre' => 'ACEVEDO', 'municipio_id' => '1601', 'estado_id' => '16'],
            ['id' => '1702', 'nombre' => 'AGUASAY', 'municipio_id' => '1702', 'estado_id' => '17'],
            ['id' => '1703', 'nombre' => 'BOLIVAR', 'municipio_id' => '1703', 'estado_id' => '17'],
            ['id' => '1704', 'nombre' => 'CARIPE', 'municipio_id' => '1704', 'estado_id' => '17'],
            ['id' => '1705', 'nombre' => 'CEDEÑO', 'municipio_id' => '1705', 'estado_id' => '17'],
            ['id' => '1706', 'nombre' => 'EZEQUIEL ZAMORA', 'municipio_id' => '1706', 'estado_id' => '17'],
            ['id' => '1707', 'nombre' => 'LIBERTADOR', 'municipio_id' => '1707', 'estado_id' => '17'],
            ['id' => '1708', 'nombre' => 'MATURIN', 'municipio_id' => '1708', 'estado_id' => '17'],
            ['id' => '1709', 'nombre' => 'PIAR', 'municipio_id' => '1709', 'estado_id' => '17'],
            ['id' => '1710', 'nombre' => 'PUNCERES', 'municipio_id' => '1710', 'estado_id' => '17'],
            ['id' => '1711', 'nombre' => 'SANTA BARBARA', 'municipio_id' => '1711', 'estado_id' => '17'],
            ['id' => '1712', 'nombre' => 'SOTILLO', 'municipio_id' => '1712', 'estado_id' => '17'],
            ['id' => '1713', 'nombre' => 'URACOA', 'municipio_id' => '1713', 'estado_id' => '17'],
            ['id' => '1701', 'nombre' => 'ACOSTA', 'municipio_id' => '1701', 'estado_id' => '17'],
            ['id' => '1802', 'nombre' => 'ARISMENDI', 'municipio_id' => '1802', 'estado_id' => '18'],
            ['id' => '1803', 'nombre' => 'DIAZ', 'municipio_id' => '1803', 'estado_id' => '18'],
            ['id' => '1804', 'nombre' => 'GARCIA', 'municipio_id' => '1804', 'estado_id' => '18'],
            ['id' => '1805', 'nombre' => 'GOMEZ', 'municipio_id' => '1805', 'estado_id' => '18'],
            ['id' => '1806', 'nombre' => 'MANEIRO', 'municipio_id' => '1806', 'estado_id' => '18'],
            ['id' => '1807', 'nombre' => 'MARCANO', 'municipio_id' => '1807', 'estado_id' => '18'],
            ['id' => '1808', 'nombre' => 'MARIÑO', 'municipio_id' => '1808', 'estado_id' => '18'],
            ['id' => '1809', 'nombre' => 'PENINSULA DE MACANAO', 'municipio_id' => '1809', 'estado_id' => '18'],
            ['id' => '1810', 'nombre' => 'TUBORES', 'municipio_id' => '1810', 'estado_id' => '18'],
            ['id' => '1811', 'nombre' => 'VILLALBA', 'municipio_id' => '1811', 'estado_id' => '18'],
            ['id' => '1801', 'nombre' => 'ANTOLIN DEL CAMPO', 'municipio_id' => '1801', 'estado_id' => '18'],
            ['id' => '1902', 'nombre' => 'ARAURE', 'municipio_id' => '1902', 'estado_id' => '19'],
            ['id' => '1903', 'nombre' => 'ESTELLER', 'municipio_id' => '1903', 'estado_id' => '19'],
            ['id' => '1904', 'nombre' => 'GUANARE', 'municipio_id' => '1904', 'estado_id' => '19'],
            ['id' => '1905', 'nombre' => 'GUANARITO', 'municipio_id' => '1905', 'estado_id' => '19'],
            ['id' => '1906', 'nombre' => 'MONSEÑO JOSE VICENTE DE UNDA', 'municipio_id' => '1906', 'estado_id' => '19'],
            ['id' => '1907', 'nombre' => 'OSPINO', 'municipio_id' => '1907', 'estado_id' => '19'],
            ['id' => '1908', 'nombre' => 'PAEZ', 'municipio_id' => '1908', 'estado_id' => '19'],
            ['id' => '1909', 'nombre' => 'PAPELON', 'municipio_id' => '1909', 'estado_id' => '19'],
            ['id' => '1910', 'nombre' => 'SAN GENARO DE BOCONOITO', 'municipio_id' => '1910', 'estado_id' => '19'],
            ['id' => '1911', 'nombre' => 'SAN RAFAEL DE ONOTO', 'municipio_id' => '1911', 'estado_id' => '19'],
            ['id' => '1912', 'nombre' => 'SANTA ROSALIA', 'municipio_id' => '1912', 'estado_id' => '19'],
            ['id' => '1913', 'nombre' => 'SUCRE', 'municipio_id' => '1913', 'estado_id' => '19'],
            ['id' => '1914', 'nombre' => 'TUREN', 'municipio_id' => '1914', 'estado_id' => '19'],
            ['id' => '1901', 'nombre' => 'AGUA BLANCA', 'municipio_id' => '1901', 'estado_id' => '19'],
            ['id' => '2002', 'nombre' => 'ANDRES MATA', 'municipio_id' => '2002', 'estado_id' => '20'],
            ['id' => '2003', 'nombre' => 'ARISMENDI', 'municipio_id' => '2003', 'estado_id' => '20'],
            ['id' => '2004', 'nombre' => 'BENITEZ', 'municipio_id' => '2004', 'estado_id' => '20'],
            ['id' => '2005', 'nombre' => 'BERMUDEZ', 'municipio_id' => '2005', 'estado_id' => '20'],
            ['id' => '2006', 'nombre' => 'CAJIGAL', 'municipio_id' => '2006', 'estado_id' => '20'],
            ['id' => '2007', 'nombre' => 'CRUZ SALMERON ACOSTA', 'municipio_id' => '2007', 'estado_id' => '20'],
            ['id' => '2008', 'nombre' => 'LIBERTADOR', 'municipio_id' => '2008', 'estado_id' => '20'],
            ['id' => '2009', 'nombre' => 'MARIÑO', 'municipio_id' => '2009', 'estado_id' => '20'],
            ['id' => '2010', 'nombre' => 'MEJIA', 'municipio_id' => '2010', 'estado_id' => '20'],
            ['id' => '2011', 'nombre' => 'MONTES', 'municipio_id' => '2011', 'estado_id' => '20'],
            ['id' => '2012', 'nombre' => 'RIBERO', 'municipio_id' => '2012', 'estado_id' => '20'],
            ['id' => '2013', 'nombre' => 'SUCRE', 'municipio_id' => '2013', 'estado_id' => '20'],
            ['id' => '2014', 'nombre' => 'VALDEZ', 'municipio_id' => '2014', 'estado_id' => '20'],
            ['id' => '2015', 'nombre' => 'BOLIVAR', 'municipio_id' => '2015', 'estado_id' => '20'],
            ['id' => '2001', 'nombre' => 'ANDRES ELOY BLANCO', 'municipio_id' => '2001', 'estado_id' => '20'],
            ['id' => '2102', 'nombre' => 'ANTONIO ROMULO COSTA', 'municipio_id' => '2102', 'estado_id' => '21'],
            ['id' => '2103', 'nombre' => 'AYACUCHO', 'municipio_id' => '2103', 'estado_id' => '21'],
            ['id' => '2104', 'nombre' => 'BOLIVAR', 'municipio_id' => '2104', 'estado_id' => '21'],
            ['id' => '2105', 'nombre' => 'CARDENAS', 'municipio_id' => '2105', 'estado_id' => '21'],
            ['id' => '2106', 'nombre' => 'CORDOBA', 'municipio_id' => '2106', 'estado_id' => '21'],
            ['id' => '2107', 'nombre' => 'FERNANDEZ FEO', 'municipio_id' => '2107', 'estado_id' => '21'],
            ['id' => '2108', 'nombre' => 'FRANCISCO DE MIRANDA', 'municipio_id' => '2108', 'estado_id' => '21'],
            ['id' => '2109', 'nombre' => 'GARCIA DE HEVIA', 'municipio_id' => '2109', 'estado_id' => '21'],
            ['id' => '2110', 'nombre' => 'GUASIMOS', 'municipio_id' => '2110', 'estado_id' => '21'],
            ['id' => '2111', 'nombre' => 'CAPACHO NUEVO', 'municipio_id' => '2111', 'estado_id' => '21'],
            ['id' => '2112', 'nombre' => 'JAUREGUI', 'municipio_id' => '2112', 'estado_id' => '21'],
            ['id' => '2113', 'nombre' => 'JOSE MARIA VARGA', 'municipio_id' => '2113', 'estado_id' => '21'],
            ['id' => '2114', 'nombre' => 'JUNIN', 'municipio_id' => '2114', 'estado_id' => '21'],
            ['id' => '2115', 'nombre' => 'CAPACHO VIEJO', 'municipio_id' => '2115', 'estado_id' => '21'],
            ['id' => '2116', 'nombre' => 'LIBERTADOR', 'municipio_id' => '2116', 'estado_id' => '21'],
            ['id' => '2117', 'nombre' => 'LOBATERA', 'municipio_id' => '2117', 'estado_id' => '21'],
            ['id' => '2118', 'nombre' => 'MICHELENA', 'municipio_id' => '2118', 'estado_id' => '21'],
            ['id' => '2119', 'nombre' => 'PANAMERICANO', 'municipio_id' => '2119', 'estado_id' => '21'],
            ['id' => '2120', 'nombre' => 'PEDRO MARIA UREÑA', 'municipio_id' => '2120', 'estado_id' => '21'],
            ['id' => '2121', 'nombre' => 'RAFAEL MARIA URDANETA', 'municipio_id' => '2121', 'estado_id' => '21'],
            ['id' => '2122', 'nombre' => 'SAMUEL DARIO MALDONADO', 'municipio_id' => '2122', 'estado_id' => '21'],
            ['id' => '2123', 'nombre' => 'SAN CRISTOBAL', 'municipio_id' => '2123', 'estado_id' => '21'],
            ['id' => '2124', 'nombre' => 'SEBORUCO', 'municipio_id' => '2124', 'estado_id' => '21'],
            ['id' => '2125', 'nombre' => 'SIMON RODRIGUEZ', 'municipio_id' => '2125', 'estado_id' => '21'],
            ['id' => '2126', 'nombre' => 'SUCRE', 'municipio_id' => '2126', 'estado_id' => '21'],
            ['id' => '2127', 'nombre' => 'TORBES', 'municipio_id' => '2127', 'estado_id' => '21'],
            ['id' => '2128', 'nombre' => 'URIBANTE', 'municipio_id' => '2128', 'estado_id' => '21'],
            ['id' => '2129', 'nombre' => 'SAN JUDAS TADEO', 'municipio_id' => '2129', 'estado_id' => '21'],
            ['id' => '2101', 'nombre' => 'ANDRES BELLO', 'municipio_id' => '2101', 'estado_id' => '21'],
            ['id' => '2202', 'nombre' => 'BOCONO', 'municipio_id' => '2202', 'estado_id' => '22'],
            ['id' => '2203', 'nombre' => 'BOLIVAR', 'municipio_id' => '2203', 'estado_id' => '22'],
            ['id' => '2204', 'nombre' => 'CANDELARIA', 'municipio_id' => '2204', 'estado_id' => '22'],
            ['id' => '2205', 'nombre' => 'CARACHE', 'municipio_id' => '2205', 'estado_id' => '22'],
            ['id' => '2206', 'nombre' => 'ESCUQUE', 'municipio_id' => '2206', 'estado_id' => '22'],
            ['id' => '2207', 'nombre' => 'JOSE FELIPE MARQUEZ CAÑIZALEZ', 'municipio_id' => '2207', 'estado_id' => '22'],
            ['id' => '2208', 'nombre' => 'JUAN VICENTE CAMPOS ELIAS', 'municipio_id' => '2208', 'estado_id' => '22'],
            ['id' => '2209', 'nombre' => 'LA CEIBA', 'municipio_id' => '2209', 'estado_id' => '22'],
            ['id' => '2210', 'nombre' => 'MIRANDA', 'municipio_id' => '2210', 'estado_id' => '22'],
            ['id' => '2211', 'nombre' => 'MONTE CARMELO', 'municipio_id' => '2211', 'estado_id' => '22'],
            ['id' => '2212', 'nombre' => 'MOTATAN', 'municipio_id' => '2212', 'estado_id' => '22'],
            ['id' => '2213', 'nombre' => 'PAMPAN', 'municipio_id' => '2213', 'estado_id' => '22'],
            ['id' => '2214', 'nombre' => 'PAMPANITO', 'municipio_id' => '2214', 'estado_id' => '22'],
            ['id' => '2215', 'nombre' => 'RAFAEL RANGEL', 'municipio_id' => '2215', 'estado_id' => '22'],
            ['id' => '2216', 'nombre' => 'SAN RAFAEL DE CARVAJAL', 'municipio_id' => '2216', 'estado_id' => '22'],
            ['id' => '2217', 'nombre' => 'SUCRE', 'municipio_id' => '2217', 'estado_id' => '22'],
            ['id' => '2218', 'nombre' => 'TRUJILLO', 'municipio_id' => '2218', 'estado_id' => '22'],
            ['id' => '2219', 'nombre' => 'URDANETA', 'municipio_id' => '2219', 'estado_id' => '22'],
            ['id' => '2220', 'nombre' => 'VALERA', 'municipio_id' => '2220', 'estado_id' => '22'],
            ['id' => '2201', 'nombre' => 'ANDRES BELLO', 'municipio_id' => '2201', 'estado_id' => '22'],
            ['id' => '2302', 'nombre' => 'BOLIVAR', 'municipio_id' => '2302', 'estado_id' => '23'],
            ['id' => '2303', 'nombre' => 'BRUZUAL', 'municipio_id' => '2303', 'estado_id' => '23'],
            ['id' => '2304', 'nombre' => 'COCOROTE', 'municipio_id' => '2304', 'estado_id' => '23'],
            ['id' => '2305', 'nombre' => 'INDEPENDENCIA', 'municipio_id' => '2305', 'estado_id' => '23'],
            ['id' => '2306', 'nombre' => 'JOSE ANTONIO PAEZ', 'municipio_id' => '2306', 'estado_id' => '23'],
            ['id' => '2307', 'nombre' => 'LA TRINIDAD', 'municipio_id' => '2307', 'estado_id' => '23'],
            ['id' => '2308', 'nombre' => 'MANUEL MONGE', 'municipio_id' => '2308', 'estado_id' => '23'],
            ['id' => '2309', 'nombre' => 'NIRGUA', 'municipio_id' => '2309', 'estado_id' => '23'],
            ['id' => '2310', 'nombre' => 'PEÑA', 'municipio_id' => '2310', 'estado_id' => '23'],
            ['id' => '2311', 'nombre' => 'SAN FELIPE', 'municipio_id' => '2311', 'estado_id' => '23'],
            ['id' => '2312', 'nombre' => 'SUCRE', 'municipio_id' => '2312', 'estado_id' => '23'],
            ['id' => '2313', 'nombre' => 'URACHICHE', 'municipio_id' => '2313', 'estado_id' => '23'],
            ['id' => '2314', 'nombre' => 'VEROES', 'municipio_id' => '2314', 'estado_id' => '23'],
            ['id' => '2301', 'nombre' => 'ARISTIDES BASTIDAS', 'municipio_id' => '2301', 'estado_id' => '23'],
            ['id' => '2402', 'nombre' => 'BARALT', 'municipio_id' => '2402', 'estado_id' => '24'],
            ['id' => '2403', 'nombre' => 'CABIMAS', 'municipio_id' => '2403', 'estado_id' => '24'],
            ['id' => '2404', 'nombre' => 'CATATUMBO', 'municipio_id' => '2404', 'estado_id' => '24'],
            ['id' => '2405', 'nombre' => 'COLON', 'municipio_id' => '2405', 'estado_id' => '24'],
            ['id' => '2406', 'nombre' => 'FRANCISCO JAVIER PULGAR', 'municipio_id' => '2406', 'estado_id' => '24'],
            ['id' => '2407', 'nombre' => 'JESUS ENRIQUE LOSSADA', 'municipio_id' => '2407', 'estado_id' => '24'],
            ['id' => '2408', 'nombre' => 'JESUS MARIA SEMPRUN', 'municipio_id' => '2408', 'estado_id' => '24'],
            ['id' => '2409', 'nombre' => 'LA CAÑADA DE URDANETA', 'municipio_id' => '2409', 'estado_id' => '24'],
            ['id' => '2410', 'nombre' => 'LAGUNILLAS', 'municipio_id' => '2410', 'estado_id' => '24'],
            ['id' => '2411', 'nombre' => 'MACHIQUES DE PERIJA', 'municipio_id' => '2411', 'estado_id' => '24'],
            ['id' => '2412', 'nombre' => 'MARA', 'municipio_id' => '2412', 'estado_id' => '24'],
            ['id' => '2413', 'nombre' => 'MARACAIBO', 'municipio_id' => '2413', 'estado_id' => '24'],
            ['id' => '2414', 'nombre' => 'MIRANDA', 'municipio_id' => '2414', 'estado_id' => '24'],
            ['id' => '2415', 'nombre' => 'INDIGENA BOLIVARIANO GUAJIRA', 'municipio_id' => '2415', 'estado_id' => '24'],
            ['id' => '2416', 'nombre' => 'ROSARIO DE PERIJA', 'municipio_id' => '2416', 'estado_id' => '24'],
            ['id' => '2417', 'nombre' => 'SAN FRANCISCO', 'municipio_id' => '2417', 'estado_id' => '24'],
            ['id' => '2418', 'nombre' => 'SANTA RITA', 'municipio_id' => '2418', 'estado_id' => '24'],
            ['id' => '2419', 'nombre' => 'SIMON BOLIVAR', 'municipio_id' => '2419', 'estado_id' => '24'],
            ['id' => '2420', 'nombre' => 'SUCRE', 'municipio_id' => '2420', 'estado_id' => '24'],
            ['id' => '2421', 'nombre' => 'VALMORE RODRIGUEZ', 'municipio_id' => '2421', 'estado_id' => '24'],
            ['id' => '2401', 'nombre' => 'ALMIRANTE PADILLA', 'municipio_id' => '2401', 'estado_id' => '24']
        ]);
    }
}
