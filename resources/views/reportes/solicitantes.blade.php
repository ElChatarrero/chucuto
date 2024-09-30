<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table style="width: 100%; border: 0px;">

        <tr>
            <td colspan="2"><img src="img/cintilloblanco.png" style="width: 100%"></td>
        </tr>

        <tr>
             <td style="text-align: left;    width: 33%"><img src="img/logo.png" width="100"></td>
            <td style="text-align: right;    width: 64%"><?php echo date('d/m/Y'); ?></td>
        </tr>
    </table>
    <table style="width: 100%; border: 0px;" aling="center">
        <tr>
            <td aling="center"><h3>Listado de Solicitantes</h3></td>
        </tr>
    </table>
    <table style="width: 100%;border: solid 1px #000000; border-collapse: collapse" aling="center">
        <thead>
            <tr>
				<th style="width: 8%; text-align: center; border: solid 2px #000000; background-color:firebrick;  color:white">#</th>
                <th style="width: 50%; text-align: center; border: solid 2px #000000; background-color:firebrick;  color:white">Nombre y Apellido</th>
                <th style="width: 10%; text-align: center; border: solid 2px #000000; background-color:firebrick;  color:white">Cédula</th>
				<th style="width: 40%; text-align: center; border: solid 2px #000000; background-color:firebrick;  color:white">Dependencia</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $indice = 0;
            foreach ($solicitantes as $solicitante)
                {
                $indice = $indice +1;
                    ?>
                        <tr>
                            <td style="width: 8%; text-align: center; border: solid 2px #000000"><?php echo $indice ?></td>
                            <td style="width: 50%; text-align: center; border: solid 2px #000000">{{$solicitante->nombres}}-{{$solicitante->apellidos}}</td>
                            <td style="width: 10%; text-align: center; border: solid 2px #000000">{{ $solicitante->cedula}}</td>
                            <td style="width: 40%; text-align: center; border: solid 2px #000000">{{ $solicitante->dependencia}}</td>
                        </tr>
                    <?php
                }

            ?>
        </tbody>
    </table><<br><br><br><br><table style="width:100%">
        <tr class="text-center">
            <td style="text-align: center">
                _______________________________________<br>
                    Pedro Toro<br>
                <i>Director Departamento Bienes Nacionales</i>
            </td>
        </tr>
    </table>
</body>
</html>
