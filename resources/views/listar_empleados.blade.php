@extends('plantilla_empleados')

@section('contenido')
    <h1>Lista de Empleados</h1>
    <a href="{{ route('empformGuardar') }}">Nuevo Empleado</a>
    <br><br>
    <table border="4">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Puesto</th>
                <th>Sueldo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
                <tr>
                    <td align="center">{{ $empleado->codigo }}</td>
                    <td align="center">{{ $empleado->nombre }}</td>
                    <td align="center">{{ $empleado->apellido }}</td>
                    <td align="center">{{ $empleado->puesto }}</td>
                    <td align="center">{{ $empleado->sueldo }}</td>
                    <td align="center">
                        <a href="{{ route('empformModificar', $empleado->codigo) }}">Editar</a>
                        <form action="{{ route('eliminarEmp', $empleado->codigo) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection