<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\responsables;
use App\Models\cargos;
use App\Models\organismos;
use App\Models\codigo_uniadmin;
use App\Models\solicitante;


class responsablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cedula  = $request->get('cedula');
        $responsables =responsables::query()->cedula($cedula)->paginate(15);
        $cargos = cargos::pluck('descripcion', 'id');
        $organismos = organismos::pluck('siglas', 'id');
        $codigo_uniadmin = codigo_uniadmin::pluck('descripcion', 'id');
        //$responsables =responsables::orderBy('id', 'Desc')->paginate(15);
        return view('responsables.index')->with(compact('responsables', 'cargos','organismos', 'codigo_uniadmin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()

    {
        $organismos = organismos::pluck('siglas', 'id');
        $codigo_uniadmin = codigo_uniadmin::pluck('descripcion', 'id');
        $cargos = cargos::pluck('descripcion', 'id');
        return view('responsables.crear')->with(compact('organismos', 'cargos', 'codigo_uniadmin'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        $responsables = new responsables();

        $responsables->cedula = $request->input('cedula');
        $responsables->primernombre = $request->input('primernombre');
        $responsables->segundonombre = $request->input('segundonombre');
        $responsables->primerapellido = $request->input('primerapellido');
        $responsables->segundoapellido = $request->input('segundoapellido');
        $responsables->telefono = $request->input('telefono');
        $responsables->correoelectronico = $request->input('correoelectronico');
        $responsables->cargo_id = $request->input('cargo_id');
        $responsables->organismo_id = $request->input('organismo_id');
        $responsables->codigo_uniadmin_id = $request->input('codigo_uniadmin_id');
        $responsables->tipo = $request->input('tipo');
        $responsables->status = 1;

        $responsables->save();
        return redirect('/responsables')->with('guardar', 'ok');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $organismos = organismos::pluck('siglas', 'id');
        $codigo_uniadmin = codigo_uniadmin::pluck('descripcion', 'id');
        $cargos = cargos::pluck('descripcion', 'id');
        $responsables=responsables::find($id);

        return view('responsables.editar')->with(compact('organismos', 'cargos', 'responsables', 'codigo_uniadmin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar(Request $request, $id)
    {
        $responsables =  responsables::find($id);

        $responsables->cedula = $request->input('cedula');
        $responsables->primernombre = $request->input('primernombre');
        $responsables->segundonombre = $request->input('segundonombre');
        $responsables->primerapellido = $request->input('primerapellido');
        $responsables->segundoapellido = $request->input('segundoapellido');
        $responsables->telefono = $request->input('telefono');
        $responsables->correoelectronico = $request->input('correoelectronico');
        $responsables->cargo_id = $request->input('cargo_id');
        $responsables->organismo_id = $request->input('organismo_id');
        $responsables->codigo_uniadmin_id = $request->input('codigo_uniadmin_id');
        $responsables->tipo = $request->input('tipo');
        $responsables->status = true;

        $responsables->Update();
        return redirect('/responsables')->with('actualizar', 'ok');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deshabilitar($id)
    {
        $responsables = responsables::find($id);
        $responsables->status = 0;

        $responsables->update();
        return redirect('/responsables')->with('deshabilitar', 'ok');
    }

    public function habilitar($id)
    {
        $responsables = responsables::find($id);
        $responsables->status = 1;

        $responsables->update();
        return redirect('/responsables')->with('habilitar', 'ok');
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
}
