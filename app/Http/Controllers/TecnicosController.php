<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\roles;

class TecnicosController extends Controller
{
    public function index(Request $request)
    {
        $usuario = $request->get('usuario');

        $rols = roles::pluck('nombre','id');
        $users = user::where('rol_id', '<>', '1')
            ->usuario($usuario)
            ->paginate(10);
        return view('tecnicos.index')->with(compact('users', 'rols'));
    }
    public function crear()
    {
        $rols = roles::pluck('nombre','id');
        return view('tecnicos.create')->with(compact('rols'));
    }
    public function guardar(Request $request)
    {
        $correo = user::where('email', $request->email);

        if ($correo->count() > 0) {
            return redirect('tecnicos')->with('duplicado', 'ok');
        } else {


        $user = new user();

        $user->rol_id    = $request->rol;
        $user->name      = $request->nombre;
        $user->username      = $request->username;
        $user->estatus = true;
        $user->email     = $request->email;

        $user->password = bcrypt($request->password);

        $user->save();
        return redirect('tecnicos')->with('guardar', 'ok');
        }
    }
    public function editar($id)
    {
        $user = user::find($id);

        $rols = roles::pluck('nombre','id');

        return view('tecnicos.edit')->with(compact('user',  'rols'));
    }
    public function actualizar(Request $request, $id)
    {
        $user = user::find($id);

        $user->rol_id    = $request->rol;
        $user->name      = $request->nombre;
        $user->email     = $request->email;
        $user->password = bcrypt($request->password);

        $user->update();
        return redirect('tecnicos')->with('actualizar', 'ok');
    }
    public function deshabilitar($id)
    {
        $user = user::find($id);
        $user->estatus = false;

        $user->update();

        return redirect('tecnicos')->with('eliminar', 'ok');
    }

    public function habilitar($id)
    {
        $user= user::find($id);

        $user->estatus = true;

        $user->update();
        return redirect('tecnicos')->with('habilitar', 'ok');
    }
}
