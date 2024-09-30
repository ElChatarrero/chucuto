<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sedes;
use App\Models\organismos;
use App\Models\tiposede;
use App\Models\estados;
use App\Models\OrganismoSede;


class sedesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sedes =sedes::query()->paginate(15);
        $organismos = organismos::pluck('siglas', 'id');
        $tiposede=tiposede::pluck('descripcion', 'id');
        $estados = estados::pluck('nombre', 'id');
        return view('sedes.index')->with(compact('sedes', 'tiposede','organismos', 'estados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        $tiposede=tiposede::pluck('descripcion', 'id');
        $organismos = organismos::pluck('siglas', 'id');
        $estados = estados::pluck('nombre', 'id');
        return view('sedes.crear')->with(compact('organismos', 'tiposede', 'estados'));
        ;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        $sedes = new sedes();

        //$sedes->organismo_id = $request->input('organismo_id');
        $sedes->tiposede_id = $request->input('tiposede_id');
        $sedes->descripcion = $request->input('descripcion');
        $sedes->localizacion = $request->input('localizacion');
        $sedes->pais = $request->input('pais');
        $sedes->estado_id = $request->input('estado');
        $sedes->municipio_id = $request->input('municipio');
        $sedes->parroquia_id = $request->input('parroquia');
        $sedes->ciudad = $request->input('ciudad');
        $sedes->otraciudad = $request->input('otraciudad');
        $sedes->urbanizacion = $request->input('urbanizacion');
        $sedes->calleavenida = $request->input('calleavenida');
        $sedes->sector_id = $request->input('sector_id');
        $sedes->otrasede = $request->input('sector_id');
        $sedes->status_sede = $request->input('status_sede');
        $sedes->otropais = $request->input('otropais');
        $sedes->casaedificio = $request->input('casaedificio');
        $sedes->piso = $request->input('piso');

        $sedes->save();

        $organismoSede = new OrganismoSede();

        $organismoSede->sedes_id = $sedes->id;
        $organismoSede->organismos_id = $request->organismo_id;
        $organismoSede->save();

        return redirect('/sedes')->with('guardar', 'ok');
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
        $tiposede = tiposede::pluck('descripcion', 'id');
        $estados = estados::pluck('nombre', 'id');
        $sedes=sedes::find($id);

        return view('sedes.editar')->with(compact('organismos', 'tiposede', 'estados', 'sedes'));
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
        $sedes =  sedes::find($id);

        $sedes->organismo_id = $request->input('organismo_id');
        $sedes->tiposede_id = $request->input('tiposede_id');
        $sedes->descripcion = $request->input('descripcion');
        $sedes->localizacion = $request->input('localizacion');
        $sedes->pais = $request->input('pais');
        $sedes->estado_id = $request->input('estado');
        $sedes->municipio_id = $request->input('municipio');
        $sedes->parroquia_id = $request->input('parroquia');
        $sedes->ciudad = $request->input('ciudad');
        $sedes->otraciudad = $request->input('otraciudad');
        $sedes->urbanizacion = $request->input('urbanizacion');
        $sedes->calleavenida = $request->input('calleavenida');
        $sedes->sector_id = $request->input('sector_id');
        $sedes->otrasede = $request->input('sector_id');
        $sedes->status_sede = $request->input('status_sede');
        $sedes->otropais = $request->input('otropais');
        $sedes->casaedificio = $request->input('casaedificio');
        $sedes->piso = $request->input('piso');

        $sedes->Update();
        return redirect('/sedes')->with('actualizar', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deshabilitar($id)
    {
        $sedes = sedes::find($id);
        $sedes->status_sede = 0;

        $sedes->update();
        return redirect('/sedes')->with('deshabilitar', 'ok');
    }

    public function habilitar($id)
    {
        $sedes = sedes::find($id);
        $sedes->status_sede =  1;

        $sedes->update();
        return redirect('/sedes')->with('habilitar', 'ok');
    }
}
