<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\bienPrestamo;
use App\Models\prestamo;
use App\Models\solicitante;
use App\Models\bienes;
use App\Models\User;

//use App\Models\carg;
class PrestamosController extends Controller
{
    public function index()
    {
        //$prestamos = prestamo::query()->paginate(15);
        $prestamos = prestamo::query()->paginate(15);

        return view('prestamos.index')->with(compact('prestamos'));
    }
    public function listar()
    {
        $solicitante = solicitante::query()->get();
        return view('prestamos.listar')->with(compact('solicitante'));
    }
    public function crear()
    {
        $bienes = bienes::pluck('nombre', 'id');
        // $solicitante = solicitante::find($id);
        // $solicitantes = solicitante::find($id)->bienes()->get();
        //$tecnicos = tecnicos::pluck('nombres', 'id');
        return view('prestamos.crear')->with(compact('bienes'));
    }
    public function guardar(Request $request)
    {
        $prestamos = new prestamo();

        $prestamos->solicitantes_id = $request->input('solicitante_id');
        $prestamos->fecha_solicitud = $request->input('fecha_solicitud');
        $prestamos->fecha_salida = $request->input('fecha_salida');
        $prestamos->fecha_devolucion = $request->input('fecha_devolucion');
        $prestamos->ubicacion_prestamo = $request->input('ubicacion_prestamo');
        //$prestamos->tecnicos_id = $request->input('tecnicos_id');
        $prestamos->motivo = $request->input('motivo');
        $prestamos->observacion = $request->input('observacion');
        $prestamos->users_id = $request->input('users_id');
        $prestamos->estatus = 2;

        $prestamos->save();

        // return redirect('/prestamos')->with('guardar', 'ok');
        return redirect('prestamos/'.$prestamos->id.'/crear');
    }
    public function buscarcedula(Request $request)
    {
        if($request->isMethod('post')){   // preguntas si viene del post para dejar hacer cosas en ajax

            $cedula = $request->cedula; //el parametro que pasas en el ajax lo tomas aqui

            $solicitante = solicitante::where('cedula','=',$cedula)->get();

            if(count($solicitante))
            {
                $nombre = $solicitante[0]->nombres;
                $apellido = $solicitante[0]->apellidos;
                $solicitante_id = $solicitante[0]->id;

                return response()->json([
                'mensaje' => 'Exito',
                'id' => $solicitante_id,
                'nombre' => $nombre,
                'apellido' => $apellido,
                ]);
            }else
            {
                return response()->json([
                'mensaje' => 'Fallido',
                ]);
            }
        }
    }
    public function mostrar($id)
    {
        $bienes = bienes::where('disponible', true)->pluck('nombre', 'id');
        $prestamo = prestamo::find($id);
        $solicitante = $prestamo->solicitantes_id;
        //dd($solicitante);
        $PrestamosBienes = prestamo::find($id)->bienes()->get();
        //dd($PrestamosBienes);
        //$tecnicos = tecnicos::pluck('nombres', 'id');

        return view('prestamos.asignar')->with(compact('bienes', 'solicitante', 'prestamo', 'PrestamosBienes'));
    }
    public function editar($id)
    {
            //$tecnicos = tecnicos::pluck('nombres', 'id');
            $solicitante = solicitante::pluck('nombres', 'id');
            $prestamos = prestamo::find($id);
            return view('prestamos.editar')->with(compact('prestamos', 'solicitante' /*'tecnicos'*/));
    }
    public function actualizar(Request $request, $id)
    {
        $prestamos = prestamo::find($id);

        $prestamos->solicitantes_id = $request->input('solicitantes_id');
        $prestamos->fecha_solicitud = $request->input('fecha_solicitud');
        $prestamos->fecha_salida = $request->input('fecha_salida');
        $prestamos->fecha_devolucion = $request->input('fecha_devolucion');
        $prestamos->ubicacion_prestamo = $request->input('ubicacion_prestamo');
        //$prestamos->tecnicos_id = $request->input('tecnicos_id');
        $prestamos->motivo = $request->input('motivo');
        $prestamos->observacion = $request->input('observacion');

        $prestamos->update();

        return redirect('/prestamos')->with('actualizar', 'ok');
    }
    public function deshabilitar(Request $request,$id)
    {
        $prestamos = prestamo::find($id);
        $prestamos->estatus = 0;
        $prestamos->motivo_des = $request->input('motivo_des');
        $prestamos->fecha_dev = $request->input('fecha_dev');
        $prestamos->update();


        $bienPrestamos = bienPrestamo::where('prestamo_id', $id)->get();
        foreach($bienPrestamos as $valor)
        {
            $bien = bienes::find($valor->bienes_id);

            $bien->disponible = true;
            $bien->update();
        }
        return redirect('/prestamos')->with('deshabilitar', 'ok');
    }
    public function asignar(Request $request)
    {
        $BienPrestamo = new bienPrestamo();
        $BienPrestamo->prestamo_id = $request->prestamo_id;
        $BienPrestamo->bienes_id = $request->bien;
        $BienPrestamo->status = false;

        $BienPrestamo->save();

        $bien = bienes::find($request->bien);
        $bien->disponible = 3;
        $bien->update();

        return redirect('prestamos/'.$request->prestamo_id.'/crear')->with('asignar', 'ok');
    }
    public function desabilitarBien(Request $request, $id)
    {
        $Bien = bienPrestamo::where('bienes_id', $id)->where('status', false);
        $BienPrestamo = bienPrestamo::where('bienes_id', $id)->where('status', false)->get();

        $prestamo = $BienPrestamo[0]->prestamo_id;
        //dd($solicitante);
        $Bien->delete();

        $bien = bienes::find($id);
        $bien->disponible = 1;
        $bien->update();

        return redirect('prestamos/'.$prestamo.'/crear')->with('deshabilitarBien', 'ok');
    }
    public function confirmar(Request $request, $id)
    {
        $prestamo = prestamo::find($id);
        $prestamo->estatus = 1;
        $prestamo->update();

        $bienPrestamos = bienPrestamo::where('prestamo_id', $id)->get();
        foreach($bienPrestamos as $valor)
        {
            $valor->status = true;
            $valor->update();
        }

        return redirect('/prestamos')->with('confirmar', 'ok');

    }
    public function descartar($id)
    {
        //0 -> inactivo
        //1 -> activo
        //2 -> borrador

        $prestamo = prestamo::find($id);
        $prestamo->estatus = 0;
        $prestamo->update();


        $bienPrestamos = bienPrestamo::where('prestamo_id', $id)->get();
        foreach($bienPrestamos as $valor)
        {
            $bien = bienes::find($valor->bienes_id);

            $bien->disponible = 1;
            $bien->update();
        }

        return redirect('/prestamos')->with('descartar', 'ok');;
    }
}
