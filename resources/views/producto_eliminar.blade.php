@extends('plantilla')

@section('contenido')

<h2>Eliminar Producto</h2>

<p>¿Estás seguro de que deseas eliminar el producto <strong>{{ $producto->nombre }}</strong> con código <strong>{{ $producto->codigo }}</strong>?</p>

<form action="{{ route('eliminarProd', $producto->id) }}" method="POST">
    @csrf
    <button type="submit">Sí, eliminar</button>
    <a href="{{ route('producto') }}">Cancelar</a>
</form>

@endsection
