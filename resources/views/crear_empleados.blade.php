@extends('plantilla_empleados')

@section('contenido')
    <h1>Crear Nuevo Empleado</h1>
    <form action="{{ route('guardarEmp') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="puesto">Puesto:</label>
            <input type="text" name="puesto" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="sueldo">Sueldo:</label>
            <input type="number" step="0.01" name="sueldo" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection