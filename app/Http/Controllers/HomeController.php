<?php

namespace App\Http\Controllers;

use App\Models\bienes;
use App\Models\condiciones;
use App\Models\prestamo;
use App\Models\responsables;
use App\Models\solicitante;
use App\Models\vehiculos;
use DB;
use App\Mail\VerificarEmailMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $condiciones = DB::select('SELECT COUNT(*) as bienes_count, condiciones.descripcion from bienes INNER JOIN condiciones on bienes.condiciones_id= condiciones.id GROUP BY condiciones.descripcion');
        $responsable = responsables::all();
        $solicitantes = solicitante::all();
        $vehiculos = vehiculos::all();
        $bien = bienes::all();
        $prestamos= prestamo::all();
        return view('home')->with(compact('bien', 'prestamos', 'solicitantes', 'responsable', 'condiciones', 'vehiculos'));
    }
    public function contacto()
    {
        return view('contacto');
    }
    public function VerificarEmail()
    {
        foreach (['taylor@example.com', 'dries@example.com'] as $recipient) {
            Mail::to($recipient)->send(new VerificarEmailMailable());
        }
    }
}
