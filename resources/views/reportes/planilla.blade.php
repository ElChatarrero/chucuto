<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table style="width: 100%; border: 0px;">
        <tr>
            <td style="text-align: left;    width: 33%"><img src="img/logo.png" width="100"></td>
            <td style="text-align: right;    width: 64%"><?php echo date('d/m/Y'); ?></td>
        </tr>
    </table>
    <table style="width: 100%; border: 0px;" align="center">
        <tr>
            <td align="center"><h3>ACTA DE PRÉSTAMO DE EQUIPO</h3></td>
        </tr>
    </table>
    <table style="text-align: center; width: 100%">
        <tbody>
			<tr>
				<td style="text-align:justify">
                "Entre la República Bolivariana de Venezuela, actuando por Órgano del Ministerio del Poder Popular para el Turismo, Institución creada mediante Decreto N° 3.416, de fecha 11 de enero de 2005, publicado en Gaceta Oficial de la República Bolivariana de Venezuela N° 38.109, de fecha 18 de enero de 2005, Oficina de Tecnología de la Información y Comunicación, y por la otra parte el ciudadano(a),<b>{{$prestamos->solicitantes->nombres}} {{$prestamos->solicitantes->apellidos}}</b>, asignado por {{auth()->user()->name}}
                , quien recibe en este acto en Calidad de Préstamo, en fecha <?php echo date('d/m/Y'); ?>, el siguiente(s)
                equipo(s), que será utilizado para Presentación. Piso 3, Torre Sur.  ;  <br><br>
				</td>
			</tr>
    </table>
    <table border="1" solid style="width: 100%">
        <thead style="background-color:firebrick; color:white">
            <td>Categoria</td><td>Marca</td><td>Modelo</td> <td>Bien</td>
        </thead>
        <tbody>
            @foreach($PrestamosBienes as $valor)
                <tr>
                    <td>{{$valor->categoria->descripcion}}</td>
                    <td>{{$valor->marca->denominacion}}</td>
                    <td>{{$valor->modelos->denominacion}}</td>
                    <td>{{$valor->nombre}}</td>
                </tr>
            @endforeach
        </tbody>
    </table><br><br>
     <table>
			<tr>
				<td style="text-align:justify;">
                <b>Observaciones: </b>{{$prestamos->observacion}}<br>
                    <b>1.-</b> El equipo en perfecto estado, entregado de manera temporal será para el uso exclusivo en actividades
                    relacionadas con las actividades laborales de acuerdo a su cargo.<br>
                    <b>2.-</b> El trabajador está en conocimiento que tanto el equipo, como los accesorios que recibe son propiedad
                    exclusiva de MINTUR e INATUR en consecuencia si por alguna razón la relación laboral culmina, deberá
                    devolver tanto el equipo como los accesorios a la Oficina de Sistema y Tecnología de Información.<br>
                    <b>3.-</b> El trabajador se obliga a cuidar el equipo entregado como un buen pater familiae. El trabajador será
                    responsable por los daños causados al equipo o el extravío de este.<br>
                    <b>4.-</b> En caso de robo o extravío del equipo, el trabajador deberá inmediatamente interponer la debida
                    denuncia por ante la delegación del CICPC correspondiente y consignar copia de la misma conjuntamente
                    con un informe en la Oficina de Sistema y Tecnología de Información.<br>
                    <b>5.-</b> En caso que se demuestre la responsabilidad del trabajador en el extravío, hurto, robo o negligencia
                    manifiesta en los daños sufridos por el equipo aquí entregado, queda entendido que este documento
                    constituye una expresa autorización para proceder a su descuento por nómina o de las prestaciones sociales
                    si fuere el caso.
				</td>
			</tr>
            </table>
            <table style="width: 100%">
			<tr>
				<td style="text-align: center; font-size:12pt"><br><br><br>
					_________________________________<br>
							<br>
							<i>Nombre y firma del Solicitante</i>

				</td>

                <td style="text-align: center; font-size:12pt"><br><br><br>
					_________________________________<br>
							<br>
							<i>Nombre y firma del Tecnico</i>

				</td>
            </tr>
            <tr>

                <td style="text-align: center; font-size:12pt"><br><br><br>
					_________________________________<br>
							<br>
							<i>Nombre y firma del Responsable</i>

				</td>

                <td style="text-align: center; font-size:12pt"><br><br><br>
                _________________________________<br>
							Camilo Estrada<br>
							<i>Director </i>

				</td>

			</tr>

		</tbody>
	</table>
</body>
</html>
