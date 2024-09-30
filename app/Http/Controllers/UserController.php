<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\estados;
use App\Models\roles;

class UserController extends Controller
{
    public function index()
    {
        $users = user::where('rol_id', '<>', '1')
            ->paginate(10);
        return view('usuario.index')->with(compact('users'));
    }
    public function create()
    {
        $estados = estados::pluck('nombre', 'id');
        $rols = rols::pluck('nombre','id');
        return view('usuario.create')->with(compact('estados','rols'));
    }
    public function save(Request $request)
    {
        $user = new user();

        $user->estado_id = $request->estado;
        $user->rol_id    = $request->rol;
        $user->name      = $request->nombre;
        $user->email     = $request->email;
        $user->estatus = true;
        $user->password = bcrypt($request->password);

        $user->save();
        return redirect('usuario')->with('guardar', 'ok');
    }
    public function edit($id)
    {
        $user = user::find($id);
        $estados = estados::pluck('nombre', 'id');
        $rols = rols::pluck('nombre','id');

        return view('usuario.edit')->with(compact('user', 'estados', 'rols'));
    }
    public function update(Request $request, $id)
    {
        $user = user::find($id);

        $user->estado_id = $request->estado;
        $user->rol_id    = $request->rol;
        $user->name      = $request->nombre;
        $user->email     = $request->email;
        $user->password = bcrypt($request->password);

        $user->save();
        return redirect('usuario')->with('actualizar', 'ok');
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
        return redirect('usuario')->with('habilitar', 'ok');
    }
}
