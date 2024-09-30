<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bienes;
use App\Models\prestamo;
use App\Models\solicitante;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;

class reportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reportes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function prestamos()
    {
        $prestamos = prestamo::orderBy('solicitantes_id', 'asc')->get();


        $pdf = Pdf::loadView('reportes.prestamos', ['prestamos'=>$prestamos])->setPaper('letter','landscape');
        set_time_limit(0);
        ini_set("memory_limit",-1);
        ini_set('max_execution_time',0);
        return $pdf->stream();
        //return view('reportes.prestamos')->with(compact( 'prestamos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function bienes(Request $request)
    {
        $bienes = bienes::orderBy('categoria_id', 'asc')->get();

        $pdf = Pdf::loadView('reportes.bienes', ['bienes'=>$bienes])->setPaper('letter','landscape');
        set_time_limit(0);
        ini_set("memory_limit",-1);
        ini_set('max_execution_time',0);
        return $pdf->stream();
        //return view('reportes.bienes')->with(compact( 'bienes'));
    }

    public function solicitantes(Request $request)
    {
        $solicitantes = solicitante::orderBy('nombres', 'asc')->get();

        $pdf = Pdf::loadView('reportes.solicitantes', ['solicitantes'=>$solicitantes])->setPaper('letter','landscape');
        set_time_limit(0);
        ini_set("memory_limit",-1);
        ini_set('max_execution_time',0);
        return $pdf->stream();
        //return view('reportes.bienes')->with(compact( 'bienes'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function planilla($id)
    {

        //return view('reportes.planilla');
        //$bienes = bienes::all($id);
        $prestamos = prestamo::find($id);
        $PrestamosBienes = prestamo::find($id)->bienes()->get();

        $pdf = Pdf::loadView('reportes.planilla', ['prestamos'=>$prestamos, 'PrestamosBienes'=>$PrestamosBienes])->setPaper('letter','portrait');
        set_time_limit(0);
        ini_set("memory_limit",-1);
        ini_set('max_execution_time',0);
        return $pdf->stream();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
