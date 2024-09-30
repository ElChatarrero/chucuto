<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\condiciones;

class condicionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $condiciones = condiciones::query()->paginate(15);
        //$condiciones=condiciones::orderBy('id', 'Desc')->paginate(15);
        return view('condiciones.index')->with('condiciones', $condiciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        return view('condiciones.crear');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        $condiciones = new condiciones();

        $condiciones->descripcion = $request->input('descripcion');
        $condiciones->disponibilidad= $request->input('disponibilidad');
        $condiciones->status = 1;
        $condiciones->save();

        return redirect('/condiciones')->with('guardar', 'ok');
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
        $condiciones=condiciones::find($id);

        return view('condiciones.editar')->with(compact( 'condiciones'));
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
        $condiciones =  condiciones::find($id);


        $condiciones->descripcion = $request->input('descripcion');
        $condiciones->status = true;
        $condiciones->Update();
        return redirect('/condiciones')->with('actualizar', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deshabilitar($id)
    {
        $condiciones = condiciones::find($id);

        $condiciones->disponibilidad = 0;

        $condiciones->update();
        return redirect('/condiciones')->with('deshabilitar', 'ok');
    }

    public function habilitar($id)
    {
        $condiciones = condiciones::find($id);
        $condiciones->disponibilidad = 1;



        $condiciones->update();
        //dd($condiciones);
        return redirect('/condiciones')->with('habilitar', 'ok');
    }
}
