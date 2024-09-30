<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proveedores;


class proveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = proveedores::query()->paginate(15);
        //$proveedores=proveedores::orderBy('id', 'Desc')->paginate(15);
        return view('proveedores.index')->with('proveedores', $proveedores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        return view('proveedores.crear');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        $proveedores = new proveedores();

        $proveedores->descripcion = $request->input('descripcion');
        $proveedores->tipoproveedor = $request->input('tipoproveedor');
        $proveedores->rif = $request->input('rif');
        $proveedores->otradescripcion = $request->input('otradescripcion');
        $proveedores->status = 1;
        $proveedores->save();
        return redirect('/proveedores')->with('guardar', 'ok');
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
        $proveedores= proveedores::find($id);

        return view('proveedores.editar')->with(compact( 'proveedores'));
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
        $proveedores =  proveedores::find($id);

        $proveedores->descripcion = $request->input('descripcion');
        $proveedores->tipoproveedor = $request->input('tipoproveedor');
        $proveedores->rif = $request->input('rif');
        $proveedores->otradescripcion = $request->input('otradescripcion');
        $proveedores->status = true;
        $proveedores->Update();
        return redirect('/proveedores')->with('actualizar', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deshabilitar($id)
    {
        $proveedores = proveedores::find($id);
        $proveedores->status = 0;

        $proveedores->update();
        return redirect('/proveedores')->with('deshabilitar', 'ok');
    }

    public function habilitar($id)
    {
        $proveedores = proveedores::find($id);
        $proveedores->status = 1;

        $proveedores->update();
        return redirect('/proveedores')->with('habilitar', 'ok');
    }
}
