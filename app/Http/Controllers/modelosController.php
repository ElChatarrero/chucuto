<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelos;
use App\Models\marcas;
use App\Models\categorias;

class modelosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modelos = modelos::query()->paginate(15);
        $marcas = marcas::pluck('denominacion', 'id');
        $categorias = categorias::pluck('descripcion', 'id');
        //$modelos=modelos::orderBy('id', 'Desc')->paginate(15);
        return view('modelos.index')->with(compact('modelos','marcas','categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
         $marcas = marcas::pluck('denominacion', 'id');
        $categorias = categorias::pluck('descripcion', 'id');

        return view('modelos.crear')->with(compact('categorias', 'marcas'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        $modelos = new modelos();

        $modelos->denominacion = $request->input('denominacion');
        $modelos->marca_id = $request->input('marca_id');
        $modelos->categorias_id = $request->input('categorias_id');
        $modelos->status = 1;
        $modelos->save();
        return redirect('/modelos')->with('guardar', 'ok');
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
        $marcas = marcas::pluck('denominacion', 'id');
        $categorias = categorias::pluck('descripcion', 'id');
        $modelos= modelos::find($id);

        return view('modelos.editar')->with(compact('marcas', 'categorias', 'modelos'));
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

      $modelos = modelos::find($id);

        $modelos->denominacion = $request->input('denominacion');
        $modelos->marca_id = $request->input('marca_id');
        $modelos->categorias_id = $request->input('categorias_id');
        $modelos->status = true;
        $modelos->update();

        return redirect('/modelos')->with('actualizar', 'ok');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deshabilitar($id)
    {
        $modelos = modelos::find($id);
        $modelos->status = 0;

        $modelos->update();
        return redirect('/modelos')->with('deshabilitar', 'ok');
    }

    public function habilitar($id)
    {
        $modelos = modelos::find($id);
        $modelos->status = 1;

        $modelos->update();
        return redirect('/modelos')->with('habilitar', 'ok');
    }
}
