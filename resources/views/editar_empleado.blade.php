@extends('plantilla_empleados')

@section('contenido')
    <h1>Editar Empleado</h1>
    <form action="{{ route('modificarEmp', $empleado->codigo) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $empleado->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" class="form-control" value="{{ $empleado->apellido }}" required>
        </div>
        <div class="form-group">
            <label for="puesto">Puesto:</label>
            <input type="text" name="puesto" class="form-control" value="{{ $empleado->puesto }}" required>
        </div>
        <div class="form-group">
            <label for="sueldo">Sueldo:</label>
            <input type="number" step="0.01" name="sueldo" class="form-control" value="{{ $empleado->sueldo }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection