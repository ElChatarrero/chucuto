<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\modelos;

class modelosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        modelos::insert([
        ['id'=>'1', 'denominacion'=>'MacBook Pro', 'marca_id'=>'1', 'categoria_id'=>'7'],
        ['id'=>'2', 'denominacion'=>'MacBook Air', 'marca_id'=>'1', 'categoria_id'=>'2'],
        ['id'=>'3', 'denominacion'=>'XPS', 'marca_id'=>'2', 'categoria_id'=>'6'],
        ['id'=>'5', 'denominacion'=>'Inspiron', 'marca_id'=>'2', 'categoria_id'=>'6'],
        ['id'=>'6', 'denominacion'=>'Latitude', 'marca_id'=>'2', 'categoria_id'=>'6'],
        ['id'=>'7', 'denominacion'=>'Spectre', 'marca_id'=>'3', 'categoria_id'=>'6'],
        ['id'=>'8', 'denominacion'=>'Envy', 'marca_id'=>'3', 'categoria_id'=>'3'],
        ['id'=>'9', 'denominacion'=>'Pavilion', 'marca_id'=>'3', 'categoria_id'=>'6'],
        ['id'=>'10', 'denominacion'=>'ThinkPad', 'marca_id'=>'4', 'categoria_id'=>'6'],
        ['id'=>'12', 'denominacion'=>'IdeaPad ', 'marca_id'=>'4', 'categoria_id'=>'6'],
        ['id'=>'13', 'denominacion'=>'Yoga', 'marca_id'=>'4', 'categoria_id'=>'6'],
        ['id'=>'14', 'denominacion'=>'ZenBook', 'marca_id'=>'5', 'categoria_id'=>'6'],
        ['id'=>'15', 'denominacion'=>'VivoBook', 'marca_id'=>'5', 'categoria_id'=>'6'],
        ['id'=>'16', 'denominacion'=>'ROG', 'marca_id'=>'5', 'categoria_id'=>'6'],
        ['id'=>'17', 'denominacion'=>'Aspire', 'marca_id'=>'6', 'categoria_id'=>'6'],
        ['id'=>'18', 'denominacion'=>'Swift', 'marca_id'=>'6', 'categoria_id'=>'6'],
        ['id'=>'19', 'denominacion'=>'Predator', 'marca_id'=>'6', 'categoria_id'=>'6'],
        ['id'=>'20', 'denominacion'=>'Surface Laptop', 'marca_id'=>'7', 'categoria_id'=>'6'],
        ['id'=>'21', 'denominacion'=>'Surface Book', 'marca_id'=>'7', 'categoria_id'=>'6'],
        ['id'=>'22', 'denominacion'=>'Back-UPS', 'marca_id'=>'8', 'categoria_id'=>'6'],
        ['id'=>'23', 'denominacion'=>'Smart-UPS', 'marca_id'=>'8', 'categoria_id'=>'6'],
        ['id'=>'24', 'denominacion'=>'Intelligent LCD', 'marca_id'=>'9', 'categoria_id'=>'6'],
        ['id'=>'25', 'denominacion'=>'PFC Sinewave', 'marca_id'=>'9', 'categoria_id'=>'3'],
        ['id'=>'26', 'denominacion'=>'5P', 'marca_id'=>'10', 'categoria_id'=>'6'],
        ['id'=>'27', 'denominacion'=>'9PX', 'marca_id'=>'10', 'categoria_id'=>'6'],
        ['id'=>'28', 'denominacion'=>'SmartPro', 'marca_id'=>'11', 'categoria_id'=>'6'],
        ['id'=>'29', 'denominacion'=>'OmniSmart', 'marca_id'=>'11', 'categoria_id'=>'3'],
        ['id'=>'32', 'denominacion'=>'PIXMA', 'marca_id'=>'12', 'categoria_id'=>'6'],
        ['id'=>'33', 'denominacion'=>'imageCLASS', 'marca_id'=>'12', 'categoria_id'=>'6'],
        ['id'=>'34', 'denominacion'=>'EcoTank', 'marca_id'=>'13', 'categoria_id'=>'6'],
        ['id'=>'36', 'denominacion'=>'WorkForce', 'marca_id'=>'13', 'categoria_id'=>'6'],
        ['id'=>'37', 'denominacion'=>'Odyssey', 'marca_id'=>'14', 'categoria_id'=>'6'],
        ['id'=>'38', 'denominacion'=>'Smart Monitor', 'marca_id'=>'14', 'categoria_id'=>'6'],
        ['id'=>'39', 'denominacion'=>'UltraGear', 'marca_id'=>'15', 'categoria_id'=>'6'],
        ['id'=>'40', 'denominacion'=>'UltraWide', 'marca_id'=>'15', 'categoria_id'=>'6'],
        ['id'=>'41', 'denominacion'=>'Nighthawk', 'marca_id'=>'16', 'categoria_id'=>'6'],
        ['id'=>'42', 'denominacion'=>'Orbi', 'marca_id'=>'16', 'categoria_id'=>'6'],
        ['id'=>'43', 'denominacion'=>'Archer', 'marca_id'=>'17', 'categoria_id'=>'6'],
        ['id'=>'46', 'denominacion'=>'Deco', 'marca_id'=>'17', 'categoria_id'=>'6'],
        ['id'=>'49', 'denominacion'=>'MX Keys', 'marca_id'=>'18', 'categoria_id'=>'6'],
        ['id'=>'50', 'denominacion'=>'G Pro', 'marca_id'=>'18', 'categoria_id'=>'6'],
        ['id'=>'51', 'denominacion'=>'K380', 'marca_id'=>'18', 'categoria_id'=>'3'],
        ['id'=>'56', 'denominacion'=>'K95 RGB Platinum', 'marca_id'=>'19', 'categoria_id'=>'6'],
        ['id'=>'58', 'denominacion'=>'K70 RGB MK.2', 'marca_id'=>'19', 'categoria_id'=>'6'],
        ['id'=>'59', 'denominacion'=>'BlackWidow', 'marca_id'=>'20', 'categoria_id'=>'6'],
        ['id'=>'60', 'denominacion'=>'Huntsman', 'marca_id'=>'20', 'categoria_id'=>'6'],
        ['id'=>'62', 'denominacion'=>'Cynosa', 'marca_id'=>'20', 'categoria_id'=>'6'],
        ['id'=>'73', 'denominacion'=>'Apex Pro', 'marca_id'=>'21', 'categoria_id'=>'6'],
        ['id'=>'75', 'denominacion'=>'Apex 7', 'marca_id'=>'21', 'categoria_id'=>'6'],
        ['id'=>'79', 'denominacion'=>'124 Spider', 'marca_id'=>'22', 'categoria_id'=>'6'],
        ['id'=>'87', 'denominacion'=>'500', 'marca_id'=>'22', 'categoria_id'=>'6'],
        ['id'=>'89', 'denominacion'=>'595', 'marca_id'=>'22', 'categoria_id'=>'3'],
        ['id'=>'90', 'denominacion'=>'695', 'marca_id'=>'22', 'categoria_id'=>'3'],
        ['id'=>'91', 'denominacion'=>'Giulia', 'marca_id'=>'23', 'categoria_id'=>'6'],
        ['id'=>'92', 'denominacion'=>'Giulietta', 'marca_id'=>'23', 'categoria_id'=>'6'],
        ['id'=>'94', 'denominacion'=>'MiTo', 'marca_id'=>'23', 'categoria_id'=>'6'],
        ['id'=>'95', 'denominacion'=>'Stelvio', 'marca_id'=>'23', 'categoria_id'=>'6'],
        ['id'=>'96', 'denominacion'=>'Tonale', 'marca_id'=>'23', 'categoria_id'=>'3'],
        ['id'=>'98', 'denominacion'=>'A3', 'marca_id'=>'24', 'categoria_id'=>'3'],
        ['id'=>'102', 'denominacion'=>'A4', 'marca_id'=>'24', 'categoria_id'=>'6'],
        ['id'=>'103', 'denominacion'=>'Q2', 'marca_id'=>'24', 'categoria_id'=>'6'],
        ['id'=>'104', 'denominacion'=>'Q3', 'marca_id'=>'24', 'categoria_id'=>'6'],
        ['id'=>'105', 'denominacion'=>'Q5', 'marca_id'=>'24', 'categoria_id'=>'6'],
        ['id'=>'106', 'denominacion'=>'Serie 1', 'marca_id'=>'25', 'categoria_id'=>'6'],
        ['id'=>'107', 'denominacion'=>'Serie 3', 'marca_id'=>'25', 'categoria_id'=>'3'],
        ['id'=>'108', 'denominacion'=>'X1', 'marca_id'=>'25', 'categoria_id'=>'6'],
        ['id'=>'109', 'denominacion'=>'X3', 'marca_id'=>'25', 'categoria_id'=>'3'],
        ['id'=>'110', 'denominacion'=>'X5', 'marca_id'=>'25', 'categoria_id'=>'6'],
        ['id'=>'112', 'denominacion'=>'Camaro', 'marca_id'=>'26', 'categoria_id'=>'6'],
        ['id'=>'113', 'denominacion'=>'Captiva', 'marca_id'=>'26', 'categoria_id'=>'5'],
        ['id'=>'114', 'denominacion'=>'Corvette', 'marca_id'=>'26', 'categoria_id'=>'2'],
        ['id'=>'115', 'denominacion'=>'Cruze', 'marca_id'=>'26', 'categoria_id'=>'6'],
        ['id'=>'116', 'denominacion'=>'Orlando', 'marca_id'=>'26', 'categoria_id'=>'5'],
        ['id'=>'117', 'denominacion'=>'C3', 'marca_id'=>'27', 'categoria_id'=>'5'],
        ['id'=>'118', 'denominacion'=>'C3 Aircross', 'marca_id'=>'27', 'categoria_id'=>'6'],
        ['id'=>'123', 'denominacion'=>'C4', 'marca_id'=>'27', 'categoria_id'=>'5'],
        ['id'=>'124', 'denominacion'=>'C5', 'marca_id'=>'27', 'categoria_id'=>'6'],
        ['id'=>'125', 'denominacion'=>'C5 Aircross', 'marca_id'=>'27', 'categoria_id'=>'6'],
        ['id'=>'132', 'denominacion'=>'500', 'marca_id'=>'28', 'categoria_id'=>'6'],
        ['id'=>'133', 'denominacion'=>'600e', 'marca_id'=>'28', 'categoria_id'=>'6'],
        ['id'=>'134', 'denominacion'=>'E-Ulysse', 'marca_id'=>'28', 'categoria_id'=>'6'],
        ['id'=>'135', 'denominacion'=>'Panda', 'marca_id'=>'28', 'categoria_id'=>'6'],
        ['id'=>'136', 'denominacion'=>'Tipo', 'marca_id'=>'28', 'categoria_id'=>'6'],
        ['id'=>'137', 'denominacion'=>'Bronco', 'marca_id'=>'29', 'categoria_id'=>'6'],
        ['id'=>'138', 'denominacion'=>'Explorer', 'marca_id'=>'29', 'categoria_id'=>'6'],
        ['id'=>'140', 'denominacion'=>'Fiesta', 'marca_id'=>'29', 'categoria_id'=>'6'],
        ['id'=>'141', 'denominacion'=>'Focus', 'marca_id'=>'29', 'categoria_id'=>'3'],
        ['id'=>'144', 'denominacion'=>'Kuga', 'marca_id'=>'29', 'categoria_id'=>'6'],
        ['id'=>'146', 'denominacion'=>'Civic', 'marca_id'=>'30', 'categoria_id'=>'6'],
        ['id'=>'150', 'denominacion'=>'HR-V', 'marca_id'=>'30', 'categoria_id'=>'6'],
        ['id'=>'151', 'denominacion'=>'NSX', 'marca_id'=>'30', 'categoria_id'=>'6'],
        ['id'=>'152', 'denominacion'=>'ZR-V', 'marca_id'=>'30', 'categoria_id'=>'5'],
        ['id'=>'155', 'denominacion'=>'Bayon', 'marca_id'=>'31', 'categoria_id'=>'6'],
        ['id'=>'156', 'denominacion'=>'Grand Santa Fe', 'marca_id'=>'31', 'categoria_id'=>'6'],
        ['id'=>'157', 'denominacion'=>'i10', 'marca_id'=>'31', 'categoria_id'=>'1'],
        ['id'=>'158', 'denominacion'=>'Kona', 'marca_id'=>'31', 'categoria_id'=>'6'],
        ['id'=>'161', 'denominacion'=>'Tucson', 'marca_id'=>'31', 'categoria_id'=>'5'],
        ['id'=>'162', 'denominacion'=>'Avenger', 'marca_id'=>'32', 'categoria_id'=>'6'],
        ['id'=>'163', 'denominacion'=>'Compass', 'marca_id'=>'32', 'categoria_id'=>'6'],
        ['id'=>'164', 'denominacion'=>'Grand Cherokee', 'marca_id'=>'32', 'categoria_id'=>'6'],
        ['id'=>'165', 'denominacion'=>'Renegade', 'marca_id'=>'32', 'categoria_id'=>'5'],
        ['id'=>'166', 'denominacion'=>'Wrangler', 'marca_id'=>'32', 'categoria_id'=>'5'],
        ['id'=>'168', 'denominacion'=>'Ceed', 'marca_id'=>'33', 'categoria_id'=>'6'],
        ['id'=>'169', 'denominacion'=>'Niro', 'marca_id'=>'33', 'categoria_id'=>'3'],
        ['id'=>'171', 'denominacion'=>'Sorento', 'marca_id'=>'33', 'categoria_id'=>'6'],
        ['id'=>'178', 'denominacion'=>'Sportage', 'marca_id'=>'33', 'categoria_id'=>'6'],
        ['id'=>'180', 'denominacion'=>'XCeed', 'marca_id'=>'33', 'categoria_id'=>'6'],
        ['id'=>'181', 'denominacion'=>'Aventador', 'marca_id'=>'34', 'categoria_id'=>'6'],
        ['id'=>'182', 'denominacion'=>'Huracán', 'marca_id'=>'34', 'categoria_id'=>'6'],
        ['id'=>'183', 'denominacion'=>'Revuelto', 'marca_id'=>'34', 'categoria_id'=>'6'],
        ['id'=>'185', 'denominacion'=>'Sián', 'marca_id'=>'34', 'categoria_id'=>'6'],
        ['id'=>'186', 'denominacion'=>'Urus', 'marca_id'=>'34', 'categoria_id'=>'6'],
        ['id'=>'188', 'denominacion'=>'Defender', 'marca_id'=>'35', 'categoria_id'=>'6'],
        ['id'=>'189', 'denominacion'=>'Discovery', 'marca_id'=>'35', 'categoria_id'=>'6'],
        ['id'=>'190', 'denominacion'=>'Range Rover', 'marca_id'=>'35', 'categoria_id'=>'3'],
        ['id'=>'191', 'denominacion'=>'Range Rover Sport', 'marca_id'=>'35', 'categoria_id'=>'5'],
        ['id'=>'193', 'denominacion'=>'Range Rover Velar', 'marca_id'=>'35', 'categoria_id'=>'6'],
        ['id'=>'194', 'denominacion'=>'2', 'marca_id'=>'36', 'categoria_id'=>'6'],
        ['id'=>'195', 'denominacion'=>'3', 'marca_id'=>'36', 'categoria_id'=>'6'],
        ['id'=>'196', 'denominacion'=>'6', 'marca_id'=>'36', 'categoria_id'=>'5'],
        ['id'=>'197', 'denominacion'=>'CX-5', 'marca_id'=>'36', 'categoria_id'=>'6'],
        ['id'=>'198', 'denominacion'=>'MX-5', 'marca_id'=>'36', 'categoria_id'=>'6'],
        ['id'=>'199', 'denominacion'=>'Clase A', 'marca_id'=>'37', 'categoria_id'=>'6'],
        ['id'=>'200', 'denominacion'=>'Clase C', 'marca_id'=>'37', 'categoria_id'=>'6'],
        ['id'=>'201', 'denominacion'=>'Clase E', 'marca_id'=>'37', 'categoria_id'=>'6'],
        ['id'=>'202', 'denominacion'=>'EQA', 'marca_id'=>'37', 'categoria_id'=>'6'],
        ['id'=>'204', 'denominacion'=>'GLC', 'marca_id'=>'37', 'categoria_id'=>'6'],
        ['id'=>'205', 'denominacion'=>'Ariya ', 'marca_id'=>'38', 'categoria_id'=>'3'],
        ['id'=>'206', 'denominacion'=>'Juke', 'marca_id'=>'38', 'categoria_id'=>'5'],
        ['id'=>'207', 'denominacion'=>'Micra', 'marca_id'=>'38', 'categoria_id'=>'5'],
        ['id'=>'208', 'denominacion'=>'Qashqai', 'marca_id'=>'38', 'categoria_id'=>'1'],
        ['id'=>'210', 'denominacion'=>'X-Trail', 'marca_id'=>'38', 'categoria_id'=>'6'],
        ['id'=>'211', 'denominacion'=>'2008', 'marca_id'=>'39', 'categoria_id'=>'5'],
        ['id'=>'212', 'denominacion'=>'208', 'marca_id'=>'39', 'categoria_id'=>'6'],
        ['id'=>'213', 'denominacion'=>'3008', 'marca_id'=>'39', 'categoria_id'=>'2'],
        ['id'=>'214', 'denominacion'=>'308', 'marca_id'=>'39', 'categoria_id'=>'6'],
        ['id'=>'215', 'denominacion'=>'5008', 'marca_id'=>'39', 'categoria_id'=>'6'],
        ['id'=>'216', 'denominacion'=>'Arkana', 'marca_id'=>'40', 'categoria_id'=>'6'],
        ['id'=>'217', 'denominacion'=>'Austral', 'marca_id'=>'40', 'categoria_id'=>'6'],
        ['id'=>'218', 'denominacion'=>'Clio', 'marca_id'=>'40', 'categoria_id'=>'6'],
        ['id'=>'219', 'denominacion'=>'Espace', 'marca_id'=>'40', 'categoria_id'=>'6'],
        ['id'=>'220', 'denominacion'=>'Mégane', 'marca_id'=>'40', 'categoria_id'=>'6'],
        ['id'=>'221', 'denominacion'=>'Corolla', 'marca_id'=>'41', 'categoria_id'=>'5'],
        ['id'=>'222', 'denominacion'=>'Hilux', 'marca_id'=>'41', 'categoria_id'=>'5'],
        ['id'=>'223', 'denominacion'=>'Prius', 'marca_id'=>'41', 'categoria_id'=>'6'],
        ['id'=>'224', 'denominacion'=>'RAV4', 'marca_id'=>'41', 'categoria_id'=>'6'],
        ['id'=>'226', 'denominacion'=>'ELEGANCE SILLAS', 'marca_id'=>'41', 'categoria_id'=>'6'],
        ['id'=>'227', 'denominacion'=>'Yaris', 'marca_id'=>'41', 'categoria_id'=>'6'],
        ['id'=>'228', 'denominacion'=>'Golf', 'marca_id'=>'42', 'categoria_id'=>'1'],
        ['id'=>'229', 'denominacion'=>'Passat', 'marca_id'=>'42', 'categoria_id'=>'1'],
        ['id'=>'230', 'denominacion'=>'Polo', 'marca_id'=>'42', 'categoria_id'=>'6'],
        ['id'=>'231', 'denominacion'=>'Tiguan', 'marca_id'=>'42', 'categoria_id'=>'6'],
        ['id'=>'232', 'denominacion'=>'Touareg', 'marca_id'=>'42', 'categoria_id'=>'6'],
        ['id'=>'233', 'denominacion'=>'Keeway RKS 150', 'marca_id'=>'43', 'categoria_id'=>'3'],
        ['id'=>'234', 'denominacion'=>'Keeway TX 200', 'marca_id'=>'43', 'categoria_id'=>'6'],
        ['id'=>'235', 'denominacion'=>'Keeway Superlight 200', 'marca_id'=>'43', 'categoria_id'=>'6'],
        ['id'=>'236', 'denominacion'=>'Keeway RK V125', 'marca_id'=>'43', 'categoria_id'=>'6'],
        ['id'=>'237', 'denominacion'=>'Keeway Hurricane 50', 'marca_id'=>'43', 'categoria_id'=>'6'],
        ['id'=>'238', 'denominacion'=>'Bera BRZ 200', 'marca_id'=>'44', 'categoria_id'=>'6'],
        ['id'=>'239', 'denominacion'=>'Bera Socialista 150', 'marca_id'=>'44', 'categoria_id'=>'6'],
        ['id'=>'240', 'denominacion'=>'Bera Cobra 150', 'marca_id'=>'44', 'categoria_id'=>'5'],
        ['id'=>'241', 'denominacion'=>'Bera DT 200', 'marca_id'=>'44', 'categoria_id'=>'6'],
        ['id'=>'242', 'denominacion'=>'Bera New Jaguar 150', 'marca_id'=>'44', 'categoria_id'=>'5'],
        ['id'=>'243', 'denominacion'=>'Bera BRF 150', 'marca_id'=>'44', 'categoria_id'=>'5'],
        ['id'=>'244', 'denominacion'=>'MT-09', 'marca_id'=>'45', 'categoria_id'=>'5'],
        ['id'=>'245', 'denominacion'=>'R1', 'marca_id'=>'45', 'categoria_id'=>'5'],
        ['id'=>'246', 'denominacion'=>'XSR700', 'marca_id'=>'45', 'categoria_id'=>'6'],
        ['id'=>'247', 'denominacion'=>'CBR1000RR', 'marca_id'=>'46', 'categoria_id'=>'5'],
        ['id'=>'249', 'denominacion'=>'Africa Twin', 'marca_id'=>'46', 'categoria_id'=>'6'],
        ['id'=>'250', 'denominacion'=>'Rebel 500', 'marca_id'=>'46', 'categoria_id'=>'5'],
        ['id'=>'252', 'denominacion'=>'Ninja ZX-10R', 'marca_id'=>'47', 'categoria_id'=>'6'],
        ['id'=>'253', 'denominacion'=>'Z900', 'marca_id'=>'47', 'categoria_id'=>'6'],
        ['id'=>'254', 'denominacion'=>'Versys 650', 'marca_id'=>'47', 'categoria_id'=>'3'],
        ['id'=>'255', 'denominacion'=>'Panigale V4', 'marca_id'=>'48', 'categoria_id'=>'6'],
        ['id'=>'256', 'denominacion'=>'Monster 821', 'marca_id'=>'48', 'categoria_id'=>'6'],
        ['id'=>'257', 'denominacion'=>'Multistrada V4', 'marca_id'=>'48', 'categoria_id'=>'6'],
        ['id'=>'259', 'denominacion'=>'S1000RR', 'marca_id'=>'49', 'categoria_id'=>'5'],
        ['id'=>'260', 'denominacion'=>'R1250GS', 'marca_id'=>'49', 'categoria_id'=>'5'],
        ['id'=>'261', 'denominacion'=>'F900R', 'marca_id'=>'49', 'categoria_id'=>'6'],
        ['id'=>'262', 'denominacion'=>'GSX-R1000', 'marca_id'=>'50', 'categoria_id'=>'5'],
        ['id'=>'263', 'denominacion'=>'V-Strom 650', 'marca_id'=>'50', 'categoria_id'=>'6'],
        ['id'=>'264', 'denominacion'=>'SV650', 'marca_id'=>'50', 'categoria_id'=>'6'],
        ['id'=>'265', 'denominacion'=>'Sportster S', 'marca_id'=>'51', 'categoria_id'=>'5'],
        ['id'=>'266', 'denominacion'=>'Fat Boy', 'marca_id'=>'51', 'categoria_id'=>'6'],
        ['id'=>'267', 'denominacion'=>'Street Glide', 'marca_id'=>'51', 'categoria_id'=>'5'],
        ['id'=>'268', 'denominacion'=>'Bonneville T120', 'marca_id'=>'52', 'categoria_id'=>'6'],
        ['id'=>'269', 'denominacion'=>'Street Triple RS', 'marca_id'=>'52', 'categoria_id'=>'5'],
        ['id'=>'270', 'denominacion'=>'Tiger 900', 'marca_id'=>'52', 'categoria_id'=>'3'],
        ['id'=>'271', 'denominacion'=>'Duke 390', 'marca_id'=>'53', 'categoria_id'=>'6'],
        ['id'=>'272', 'denominacion'=>'1290 Super Adventure', 'marca_id'=>'53', 'categoria_id'=>'6'],
        ['id'=>'273', 'denominacion'=>'RC 390', 'marca_id'=>'53', 'categoria_id'=>'6'],
        ['id'=>'274', 'denominacion'=>'RSV4', 'marca_id'=>'54', 'categoria_id'=>'6'],
        ['id'=>'275', 'denominacion'=>'Tuono V4', 'marca_id'=>'54', 'categoria_id'=>'6'],
        ['id'=>'276', 'denominacion'=>'Shiver 900', 'marca_id'=>'54', 'categoria_id'=>'6'],
        ['id'=>'277', 'denominacion'=>'Talent (mesa de trabajo)', 'marca_id'=>'55', 'categoria_id'=>'5'],
        ['id'=>'278', 'denominacion'=>'OWWI (silla ergonómica)', 'marca_id'=>'55', 'categoria_id'=>'5'],
        ['id'=>'279', 'denominacion'=>'A+S Work (silla todo en uno)', 'marca_id'=>'55', 'categoria_id'=>'6'],
        ['id'=>'280', 'denominacion'=>'Glob (soluciones modulares)', 'marca_id'=>'55', 'categoria_id'=>'6'],
        ['id'=>'281', 'denominacion'=>'Serie 500 (escritorios)', 'marca_id'=>'56', 'categoria_id'=>'6'],
        ['id'=>'282', 'denominacion'=>'Serie 700 (sillas de oficina)', 'marca_id'=>'56', 'categoria_id'=>'6'],
        ['id'=>'283', 'denominacion'=>'Serie 900 (archivadores)', 'marca_id'=>'56', 'categoria_id'=>'6'],
        ['id'=>'284', 'denominacion'=>'Forma5 Bench (mesas de trabajo modulares)', 'marca_id'=>'57', 'categoria_id'=>'6'],
        ['id'=>'286', 'denominacion'=>'Forma5 Flexa (sillas ergonómicas)', 'marca_id'=>'57', 'categoria_id'=>'6'],
        ['id'=>'287', 'denominacion'=>'Forma5 Block (almacenamiento modular)', 'marca_id'=>'57', 'categoria_id'=>'4'],
        ['id'=>'288', 'denominacion'=>'Executive Board (mesas ejecutivas)', 'marca_id'=>'58', 'categoria_id'=>'4'],
        ['id'=>'289', 'denominacion'=>'President Dattilo (escritorios)', 'marca_id'=>'58', 'categoria_id'=>'4'],
        ['id'=>'290', 'denominacion'=>'President Señor (sillas de oficina)', 'marca_id'=>'58', 'categoria_id'=>'6'],
        ['id'=>'291', 'denominacion'=>'Staples Copy Paper (papel para impresora)', 'marca_id'=>'59', 'categoria_id'=>'6'],
        ['id'=>'292', 'denominacion'=>'Staples Desk Organizer (organizador de escritorio)', 'marca_id'=>'59', 'categoria_id'=>'6'],
        ['id'=>'293', 'denominacion'=>'Staples Highlighters (resaltadores)', 'marca_id'=>'59', 'categoria_id'=>'6'],
        ['id'=>'294', 'denominacion'=>'Grip 2001 (lápices)', 'marca_id'=>'60', 'categoria_id'=>'5'],
        ['id'=>'295', 'denominacion'=>'Textliner 48 (marcadores)', 'marca_id'=>'60', 'categoria_id'=>'6'],
        ['id'=>'296', 'denominacion'=>'Polychromos (lápices de colores)', 'marca_id'=>'60', 'categoria_id'=>'6'],
        ['id'=>'297', 'denominacion'=>'Pilot G2 (bolígrafos)', 'marca_id'=>'61', 'categoria_id'=>'5'],
        ['id'=>'298', 'denominacion'=>'Pilot V5 (plumas de gel)', 'marca_id'=>'61', 'categoria_id'=>'5'],
        ['id'=>'299', 'denominacion'=>'Pilot Frixion (bolígrafos borrables)', 'marca_id'=>'61', 'categoria_id'=>'6'],
        ['id'=>'300', 'denominacion'=>'Post-it Notes (notas adhesivas)', 'marca_id'=>'62', 'categoria_id'=>'6'],
        ['id'=>'301', 'denominacion'=>'Scotch Tape (cinta adhesiva)', 'marca_id'=>'62', 'categoria_id'=>'6'],
        ['id'=>'302', 'denominacion'=>'Command Hooks (ganchos adhesivos)', 'marca_id'=>'62', 'categoria_id'=>'6'],
    ]);
}
}
