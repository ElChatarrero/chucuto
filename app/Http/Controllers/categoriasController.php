<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorias;

class categoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = categorias::query()->paginate(15);
        //$categorias=categorias::orderBy('id', 'Desc')->paginate(15);
        return view('categorias.index')->with('categorias', $categorias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        return view('categorias.crear');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        $categorias = new categorias();

        $categorias->descripcion = $request->input('descripcion');
        $categorias->status = 1;
        $categorias->save();

        return redirect('/categorias')->with('guardar', 'ok');


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
        $categorias=categorias::find($id);

        return view('categorias.editar')->with(compact( 'categorias'));
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
        $categorias =  categorias::find($id);


        $categorias->descripcion = $request->input('descripcion');
        $categorias->status = true;
        $categorias->Update();
        return redirect('/categorias')->with('actualizar', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deshabilitar($id)
    {
        $categorias = categorias::find($id);
        $categorias->status = 0;

        $categorias->update();
        return redirect('/categorias')->with('deshabilitar', 'ok');
    }

    public function habilitar($id)
    {
        $categorias = categorias::find($id);
        $categorias->estatus = 1;

        $categorias->update();
        return redirect('/categorias')->with('habilitar', 'ok');
    }
}
