<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class ControlUsuarios extends Controller
{
    public function vistaUsuario()
    {
        $datos = Usuario::all();
        return view('usuario', compact('datos'));
    }

    public function vistaUsuarioGuardar()
    {
        return view('usuario_guardar');
    }

    public function UsuarioGuardar(Request $request)
    {
        $usuario = new Usuario();
        $usuario->usuario = $request->input('usuario');
        $usuario->password = bcrypt($request->input('password'));
        $usuario->tipo = $request->input('tipo');
        $usuario->save();

        return redirect()->route('usuario');
    }

    public function usuarioEliminar($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();

        return redirect()->route('usuario');
    }

    public function vistaUsuarioModificar($id)
    {
        $usuario = Usuario::find($id);
        return view('usuario_modificar', compact('usuario'));
    }

    public function usuarioModificar(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        $usuario->usuario = $request->input('usuario');
        $usuario->password = bcrypt($request->input('password'));
        $usuario->tipo = $request->input('tipo');
        $usuario->save();

        return redirect()->route('usuario');
    }
}