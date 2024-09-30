<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\marcas;
use App\Models\modelos;

class FiltroController extends Controller
{
    public function categoria(Request $request, $id)
    {
    	if ($request->ajax()){
    		$marcas = marcas::marcas($id);
    		return response()->json($marcas);
    	}
    }
    public function marca(Request $request, $id)
    {
    	if ($request->ajax()){
    		$modelos = modelos::modelos($id);
    		return response()->json($modelos);
    	}
    }
}
