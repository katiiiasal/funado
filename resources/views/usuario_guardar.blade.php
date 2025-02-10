@extends('plantilla')

@section('contenido')

<h2>Guardar Usuario</h2>

<form action="{{ route('guardarUsu') }}" method="POST">
    @csrf
    Usuario: <input type="text" name="usuario"><br>
    Password: <input type="password" name="password"><br>
    Tipo: <input type="number" name="tipo"><br>
    <input type="submit" value="Guardar">
</form>

@endsection