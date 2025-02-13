@extends('plantilla')

@section('contenido')

<h2>Nuevo Producto</h2>

<form action="{{ route('guardarProd') }}" method="POST">
    @csrf
    Nombre: <input type="text" name="nombre" required><br>
    Código: <input type="text" name="codigo" required><br>
    Existencia: <input type="number" name="existencia" required><br>
    Precio: <input type="number" step="0.01" name="precio" required><br>
    <button type="submit">Guardar</button>
</form>

@endsection
