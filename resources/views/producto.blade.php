@extends('plantilla')

@section('contenido')

<h2>Productos</h2>
<a href="{{ route('prodformGuardar') }}">Nuevo Registro</a>
<br><br>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Código</th>
        <th>Existencia</th>
        <th>Precio</th>
        <th>Acciones</th>
    </tr>

    @foreach($productos as $prod)
    <tr>
        <td>{{ $prod->id }}</td>
        <td>{{ $prod->nombre }}</td>
        <td>{{ $prod->codigo }}</td>
        <td>{{ $prod->existencia }}</td>
        <td>${{ $prod->precio }}</td>
        <td>
            <a href="{{ route('prodformModificar', $prod->id) }}">Modificar</a>
            <a href="{{ route('prodformEliminar', $prod->id) }}">Eliminar</a>
        </td>
    </tr>
    @endforeach
</table>

@endsection
