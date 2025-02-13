@extends('plantilla_productos')

@section('contenido')

<h2>Crear Nuevo Producto</h2>

<form action="{{ route('guardarProd') }}" method="POST">
    @csrf
    Nombre: <input type="text" name="nombre"><br>
    Código: <input type="text" name="codigo"><br>
    Existencia: <input type="number" name="existencia"><br>
    Precio: <input type="number" step="0.01" name="precio"><br>
    <input type="submit" value="Guardar">
</form>

@endsection