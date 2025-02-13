@extends('plantilla_productos')

@section('contenido')

<h2>Modificar Producto</h2>

<form action="{{ route('modificarProd', $producto->id) }}" method="POST">
    @csrf
    Nombre: <input type="text" name="nombre" value="{{ $producto->nombre }}"><br>
    Código: <input type="text" name="codigo" value="{{ $producto->codigo }}"><br>
    Existencia: <input type="number" name="existencia" value="{{ $producto->existencia }}"><br>
    Precio: <input type="number" step="0.01" name="precio" value="{{ $producto->precio }}"><br>
    <input type="submit" value="Modificar">
</form>

@endsection