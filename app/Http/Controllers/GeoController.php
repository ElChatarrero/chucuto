<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\parroquias;
use App\Models\municipios;
use App\Models\estado;

class GeoController extends Controller
{
    public function municipio(Request $request, $id)
    {
    	if ($request->ajax()){
    		$municipios = municipios::municipios($id);
            //dd($parroquias);
    		return response()->json($municipios);
    	}
    }
    public function parroquia(Request $request, $id)
    {
    	if ($request->ajax()){
    		$parroquias = parroquias::parroquias($id);
            //dd($parroquias);
    		return response()->json($parroquias);
    	}
    }
}
