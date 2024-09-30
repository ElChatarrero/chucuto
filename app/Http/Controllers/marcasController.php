<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\marcas;

class marcasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marcas = marcas::query()->paginate(15);
        //$marcas=marcas::orderBy('id', 'Desc')->paginate(15);
        return view('marcas.index')->with('marcas', $marcas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        return view('marcas.crear');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        $marcas = new marcas();
        $marcas->nombredelfabricante= $request->input('nombredelfabricante');
        $marcas->denominacion = $request->input('denominacion');
        $marcas->status = 1;

        $marcas->save();

        return redirect('/marcas')->with('guardar', 'ok');
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
        $marcas=marcas::find($id);

        return view('marcas.editar')->with(compact( 'marcas'));
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
        $marcas =  marcas::find($id);

        $marcas->nombredelfabricante= $request->input('nombredelfabricante');
        $marcas->denominacion = $request->input('denominacion');
        $marcas->status = true;
        $marcas->Update();
        return redirect('/marcas')->with('actualizar', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deshabilitar($id)
    {
        $marcas = marcas::find($id);
        $marcas->status = 0;

        $marcas->update();
        return redirect('/marcas')->with('deshabilitar', 'ok');
    }

    public function habilitar($id)
    {
        $marcas = marcas::find($id);
        $marcas->status = 1;

        $marcas->update();
        return redirect('/marcas')->with('habilitar', 'ok');
    }
}
