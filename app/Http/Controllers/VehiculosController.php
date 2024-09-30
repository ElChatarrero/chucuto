<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vehiculos;

class VehiculosController extends Controller
{
    public function index()
    {
        $vehiculos = vehiculos::all();


        // $vehiculos = vehiculos::pluck('siglas', 'id');
        //$autoridades=autoridadr::orderBy('id', 'Desc')->paginate(15);
        return view('vehiculos.index')->with(compact('vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

}
