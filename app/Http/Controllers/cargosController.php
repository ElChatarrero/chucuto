<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cargos;


class cargosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargos = cargos::query()->paginate(15);
        //$cargos=cargos::orderBy('id', 'Desc')->paginate(15);
        return view('cargos.index')->with('cargos',$cargos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        return view('cargos.crear');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        $cargos = new cargos();

        $cargos->descripcion = $request->input('descripcion');
        $cargos->status = 1;
        $cargos->save();

        return redirect('/cargos')->with('guardar', 'ok');
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

        $cargos=cargos::find($id);

        return view('cargos.editar')->with(compact( 'cargos'));
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
        $cargos =  cargos::find($id);


        $cargos->descripcion = $request->input('descripcion');
        $cargos->status = true;
        $cargos->Update();
        return redirect('/cargos')->with('actualizar', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deshabilitar($id)
    {
        $cargos = cargos::find($id);
        $cargos->status = 0;

        $cargos->update();
        return redirect('/cargos')->with('deshabilitar', 'ok');
    }

    public function habilitar($id)
    {
        $cargos = cargos::find($id);
        $cargos->status = 1;

        $cargos->update();
        return redirect('/cargos')->with('habilitar', 'ok');
    }
}
