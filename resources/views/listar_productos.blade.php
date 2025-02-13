@extends('plantilla_productos')

@section('contenido')

<h2>Lista de Productos</h2>

<a href="{{ route('prodformGuardar') }}">Nuevo Registro</a><br><br>

<!-- Tabla de productos -->
<table border="4">
    <tr>
        <th>CÓDIGO</th>
        <th>NOMBRE</th>
        <th>EXISTENCIA</th>
        <th>PRECIO</th>
        <th>ACCIONES</th>
    </tr>

    @foreach($productos as $prod)
    <tr>
        <td align="center">{{ $prod->id }}</td>
        <td>{{ $prod->nombre }}</td>
        <td>{{ $prod->codigo }}</td>
        <td>{{ $prod->existencia }}</td>
        <td>${{ number_format($prod->precio, 2) }}</td>
        <td>
            <a href="{{ route('prodformModificar', $prod->id) }}">Modificar</a>
        </td>
        <td>
            <a href="{{ route('eliminarProd', $prod->id) }}">Eliminar</a>
        </td>
    </tr>
    @endforeach
</table>

@endsection