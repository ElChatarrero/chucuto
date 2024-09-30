<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\autoridadr;
use App\Models\organismos;
use App\Models\cargos;

class autoridadrsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organismos = organismos::pluck('siglas', 'id');
        $cargos = cargos::pluck('descripcion', 'id');
        $autoridades = autoridadr::query()->paginate(15);

        // $organismos = organismos::pluck('siglas', 'id');
        //$autoridades=autoridadr::orderBy('id', 'Desc')->paginate(15);
        return view('autoridadrs.index')->with(compact('autoridades', 'organismos','cargos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        $organismos = organismos::pluck('siglas', 'id');
        $cargos = cargos::pluck('descripcion', 'id');
        return view('autoridadrs.crear')->with(compact('organismos', 'cargos'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        $autoridadrs = new autoridadr();

        $autoridadrs->organismo_id = $request->input('organismo_id');
        $autoridadrs->cedula = $request->input('cedula');
        $autoridadrs->nombre = $request->input('nombre');
        $autoridadrs->apellido = $request->input('apellido');
        $autoridadrs->telefono = $request->input('telefono');
        $autoridadrs->cargo_id = $request->input('cargo_id');
        $autoridadrs->correoelectronico = $request->input('correoelectronico');
        $autoridadrs->numerogaceta = $request->input('numerogaceta');
        $autoridadrs->fechagaceta = $request->input('fechagaceta');
        $autoridadrs->fecharesolucion = $request->input('fecharesolucion');
        $autoridadrs->fecha_fin = $request->input('fecha_fin');
        $autoridadrs->numeroresolucion = $request->input('numeroresolucion');
        $autoridadrs->tipo = $request->input('tipo');
        $autoridadrs->status = 1;

        $autoridadrs->save();
        return redirect('/autoridadrs')->with('guardar', 'ok');
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
        $cargos = cargos::pluck('descripcion', 'id');
        $autoridadrs=autoridadr::find($id);

        return view('autoridadrs.editar')->with(compact('organismos', 'cargos', 'autoridadrs'));

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
        $autoridadrs =  autoridadr::find($id);

        $autoridadrs->organismo_id = $request->input('organismo_id');
        $autoridadrs->cedula = $request->input('cedula');
        $autoridadrs->nombre = $request->input('nombre');
        $autoridadrs->apellido = $request->input('apellido');
        $autoridadrs->telefono = $request->input('telefono');
        $autoridadrs->cargo_id = $request->input('cargo_id');
        $autoridadrs->correoelectronico = $request->input('correoelectronico');
        $autoridadrs->numerogaceta = $request->input('numerogaceta');
        $autoridadrs->fechagaceta = $request->input('fechagaceta');
        $autoridadrs->fecharesolucion = $request->input('fecharesolucion');
        $autoridadrs->fecha_fin = $request->input('fecha_fin');
        $autoridadrs->numeroresolucion = $request->input('numeroresolucion');
        $autoridadrs->tipo = $request->input('tipo');
        $autoridadrs->status = 1;

        $autoridadrs->Update();
        return redirect('/autoridadrs')->with('actualizar', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deshabilitar($id)
    {
        $autoridadrs = autoridadr::find($id);
        $autoridadrs->status = 0;

        $autoridadrs->update();
        return redirect('/autoridadrs')->with('deshabilitar', 'ok');
    }
    public function habilitar($id)
    {
        $autoridadrs = autoridadr::find($id);
        $autoridadrs->status = 1;

        $autoridadrs->update();
        return redirect('/autoridadrs')->with('habilitar', 'ok');
    }
}
