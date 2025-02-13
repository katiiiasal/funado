<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class ControlEmpleados extends Controller
{
    // Mostrar lista de empleados
    public function vistaEmpleado()
    {
        $empleados = Empleado::all();
        return view('listar_empleados', compact('empleados'));
    }

    // Mostrar formulario para crear un nuevo empleado
    public function vistaEmpleadoGuardar()
    {
        return view('crear_empleados');
    }

    // Guardar un nuevo empleado
    public function empleadoGuardar(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'puesto' => 'required',
            'sueldo' => 'required|numeric'
        ]);

        Empleado::create($request->all());
        return redirect()->route('empleado')->with('success', 'Empleado creado correctamente.');
    }

    // Mostrar formulario para editar un empleado
    public function vistaEmpleadoModificar($id)
    {
        $empleado = Empleado::findOrFail($id);
        return view('editar_empleado', compact('empleado'));
    }

    // Actualizar un empleado
    public function empleadoModificar(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'puesto' => 'required',
            'sueldo' => 'required|numeric'
        ]);

        $empleado = Empleado::findOrFail($id);
        $empleado->update($request->all());
        return redirect()->route('empleado')->with('success', 'Empleado actualizado correctamente.');
    }

    // Eliminar un empleado
    public function empleadoEliminar($id)
    {
        $empleado = Empleado::findOrFail($id);
        $empleado->delete();
        return redirect()->route('empleado')->with('success', 'Empleado eliminado correctamente.');
    }
}