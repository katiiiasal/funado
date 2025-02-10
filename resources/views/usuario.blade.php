@extends('plantilla')

@section('contenido')

<h2>Usuario</h2>

Usuario: <input type="text"> <input type="submit" value="Buscar"> <a href="{{route('usuformGuardar')}}">Nuevo Registro</a><br>

Codigo: <input type="number"><br>
usuario: <input type="text"><br>
password: <input type="password"><br>
tipo: <input type="number"><br>

<br><br>
<table border="4">
    <tr>
        <th>CODIGO</th>
        <th>USUARIO</th>
        <th>PASSWORD</th>
        <th>TIPO</th>
    </tr>

    @foreach($datos as $dat)
    <tr>
        <td align="center">{{ $dat->id_usuario }}</td>
        <td>{{ $dat->usuario }}</td>
        <td>{{ $dat->password }}</td>
        <td>{{ $dat->tipo }}</td>
        <td><a href="{{ route('usuformModificar', $dat->id_usuario) }}">Modificar</a></td>
        <td><a href="{{ route('eliminarUsu', $dat->id_usuario) }}">Eliminar</a></td>
    </tr>
    @endforeach

</table>
@endsection