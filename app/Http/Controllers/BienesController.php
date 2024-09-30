<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorias;
use App\Models\condiciones;
use App\Models\bienes;
use App\Models\marcas;
use App\Models\vehiculos;
use App\Models\modelos;

class BienesController extends Controller
{
    public function index(Request $request)
    {
        $categoriaId  = $request->get('categoriaId');
        $marcaId  = $request->get('marcaId');
        $modeloId  = $request->get('modeloId');
        $N_bien  = $request->get('N_bien');
        $condicionId = $request->get('condicionId');
        $disponibilidadId = $request->get('disponibilidadId');

        // dd($categoriaId);

        $condiciones = condiciones::pluck('descripcion', 'id');
        $modelos = modelos::pluck('denominacion', 'id');
        $marcas = marcas::pluck('denominacion', 'id');
        $categoria  = $request->get('categoria');
        $tecnologicos = categorias::where('tipo', '1')->get();
        $categorias = categorias::pluck('descripcion', 'id');
        $muebles = categorias::where('tipo', '3')->get();
        $vehiculos = categorias::where('tipo', '2')->get();

        $bienes = bienes::query()
            ->categorias($categoriaId)
            ->marca($marcaId)
            ->modelo($modeloId)
            ->N_bien($N_bien)
            ->condicionId($condicionId)
            ->disponibilidadId($disponibilidadId)
            ->paginate(5);

        return view('bienes.index')->with(compact('bienes', 'categorias', 'marcas', 'condiciones', 'modelos','vehiculos', 'muebles', 'tecnologicos'));
    }
    public function crear()
    {
        $marcas = marcas::pluck('denominacion', 'id');
        $categorias = categorias::pluck('descripcion', 'id');
        $condiciones = condiciones::pluck('descripcion', 'id');
        $modelos = modelos::pluck('denominacion', 'id');

        return view('bienes.crear')->with(compact('categorias', 'condiciones', 'marcas', 'modelos'));
    }

    public function guardar(Request $request)
    {
        $bienes = new bienes();

        $bienes->categoria_id = $request->input('campoCategoriaId');
        $bienes->marca_id = $request->input('campoMarcaId');
        $bienes->modelos_id = $request->input('campoModeloId');
        $bienes->N_bien = $request->input('N_bien');
        $bienes->condiciones_id = $request->input('condiciones');
        $bienes->nombre = $request->input('nombre');
        if ($request->condiciones == '1' || $request->condiciones == '2' || $request->condiciones == '4')
        {
            $bienes->disponible = 2;
        } else {
            $bienes->disponible = 1;
        }

        $bienes->observacion = $request->input('observacion');

        $bienes->save();

        return redirect('/bienes')->with('guardar', 'ok');
    }

    public function show($id)
    {
        //
    }

    public function editar($id)
    {
        $bienes=bienes::find($id);
        $categoria = categorias::find($bienes->categoria_id);
        $marca = marcas::find($bienes->marca_id);
        $modelo = modelos::find($bienes->modelos_id);

        $modelos = modelos::where('marca_id', $modelo->marca_id)->get();
        $marcas = marcas::where('categoria_id', $marca->categoria_id)->get();
        $categorias = categorias::where('tipo', $categoria->tipo)->get();
        // dd($categorias);
        $condiciones = condiciones::pluck('descripcion', 'id');

        return view('bienes.editar')->with(compact('bienes', 'categorias', 'marcas', 'condiciones', 'modelos'));

    }

    public function actualizar(Request $request, $id)
    {
        $bienes = bienes::find($id);

        $bienes->categoria_id = $request->input('categoria_id');
        $bienes->marca_id = $request->input('marca_id');
        $bienes->modelos_id = $request->input('modelo_id');
        $bienes->N_bien = $request->input('N_bien');
        $bienes->condiciones_id = $request->input('condiciones');
        $bienes->nombre = $request->input('nombre');
        $bienes->observacion = $request->input('observacion');
        if ($request->condiciones == '1' || $request->condiciones == '2' || $request->condiciones == '4')
        {
            $bienes->disponible = 2;
        } else {
            $bienes->disponible = 1;
        }

        $bienes->update();

        return redirect('/bienes')->with('actualizar', 'ok');
    }

    public function deshabilitar($id)
    {
        $bienes = bienes::find($id);
        $bienes->estatus = 0;

        $bienes->update();
        return redirect('/bienes')->with('deshabilitar', 'ok');
    }



        public function habilitar($id)
    {
        $bienes = bienes::find($id);
        $bienes->estatus = 1;

        $bienes->update();
        return redirect('/bienes')->with('habilitar', 'ok');
    }
}
