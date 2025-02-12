@extends('plantilla')

@section('contenido')

<h2>Modificar Producto</h2>

<form action="{{ route('modificarProd', $producto->id) }}" method="POST">
    @csrf
    Nombre: <input type="text" name="nombre" value="{{ $producto->nombre }}" required><br>
    Código: <input type="text" name="codigo" value="{{ $producto->codigo }}" required><br>
    Existencia: <input type="number" name="existencia" value="{{ $producto->existencia }}" required><br>
    Precio: <input type="number" step="0.01" name="precio" value="{{ $producto->precio }}" required><br>
    <button type="submit">Actualizar</button>
</form>

@endsection
