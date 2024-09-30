<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cargos;
use App\Models\solicitante;

class SolicitanteController extends Controller
{
    public function index()
    {
        $cargo=cargos::pluck('descripcion', 'id');
        $solicitante =solicitante::query()->paginate(15);
        //$solicitante=solicitante::where('estatus','=', true)->get();
        return view('solicitante.index')->with(compact('solicitante', 'cargo'));

    }
    public function crear()
    {
        $cargo=cargos::pluck('descripcion', 'id');
        return view('solicitante.crear')->with(compact('cargo'));
    }

    public function guardar(Request $request)
    {
        $solicitante = new Solicitante();

        $solicitante->nombres = $request->input('nombres');
        $solicitante->apellidos = $request->input('apellidos');
        $solicitante->cedula = $request->input('cedula');
        $solicitante->dependencia = $request->input('dependencia');
        $solicitante->extension = $request->input('extension');
        $solicitante->correo_electronico = $request->input('correo_electronico');
        $solicitante->cargo_id = $request->input('cargo_id');
        $solicitante->estatus = true;

        $solicitante->save();

        return redirect('/solicitantes')->with('guardar', 'ok');
    }

    public function show($id)
    {
        //
    }

    public function editar($id)
    {
        $solicitante = solicitante::find($id);
        $cargo=cargos::pluck('descripcion', 'id');
        return view('solicitante.editar')->with(compact('cargo', 'solicitante'));
    }

    public function actualizar(Request $request, $id)
    {

        $solicitante =  solicitante::find($id);

        $solicitante->nombres = $request->input('nombres');
        $solicitante->apellidos = $request->input('apellidos');
        $solicitante->cedula = $request->input('cedula');
        $solicitante->dependencia = $request->input('dependencia');
        $solicitante->extension = $request->input('extension');
        $solicitante->correo_electronico = $request->input('correo_electronico');
        $solicitante->cargo_id = $request->input('cargo_id');
        $solicitante->estatus = true;

        $solicitante->Update();
        return redirect('/solicitantes')->with('actualizar', 'ok');

    }

    public function deshabilitar($id)
    {
        $solicitante=solicitante::find($id);

        $solicitante->estatus = 0;

        $solicitante->update();
        return redirect('/solicitantes')->with('deshabilitar', 'ok');
    }

    public function habilitar($id)
    {
        $solicitante=solicitante::find($id);

        $solicitante->estatus = 1;

        $solicitante->update();
        return redirect('/solicitantes')->with('habilitar', 'ok');
    }
}


