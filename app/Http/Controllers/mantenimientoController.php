<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mantenimiento;

class mantenimientoController extends Controller
{
    public function index()
    {
        $mantenimiento = mantenimiento::all();



        return view('mantenimiento.index')->with(compact('mantenimiento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {

    }
}
