@extends('plantilla')

@section('contenido')

<h2>Modificar Usuario</h2>

<form action="{{ route('modificarUsu', $usuario->id_usuario) }}" method="POST">
    @csrf
    Usuario: <input type="text" name="usuario" value="{{ $usuario->usuario }}"><br>
    Password: <input type="password" name="password"><br>
    Tipo: <input type="number" name="tipo" value="{{ $usuario->tipo }}"><br>
    <input type="submit" value="Modificar">
</form>

@endsection