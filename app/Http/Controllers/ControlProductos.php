<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ControlProductos extends Controller
{
    public function vistaProducto()
    {
        $productos = Producto::all();
        return view('producto', compact('productos'));
    }

    public function vistaProductoGuardar()
    {
        return view('producto_guardar');
    }

    public function productoGuardar(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'codigo' => 'required|string|max:50|unique:productos,codigo',
            'existencia' => 'required|integer|min:0',
            'precio' => 'required|numeric|min:0',
        ]);

        Producto::create($request->all());

        return redirect()->route('producto')->with('success', 'Producto creado correctamente.');
    }

    public function vistaProductoModificar($id)
    {
        $producto = Producto::findOrFail($id);
        return view('producto_modificar', compact('producto'));
    }

    public function productoModificar(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);

        $request->validate([
            'nombre' => 'required|string|max:255',
            'codigo' => 'required|string|max:50|unique:productos,codigo,' . $id,
            'existencia' => 'required|integer|min:0',
            'precio' => 'required|numeric|min:0',
        ]);

        $producto->update($request->all());

        return redirect()->route('producto')->with('success', 'Producto actualizado correctamente.');
    }

    public function vistaProductoEliminar($id)
    {
        $producto = Producto::findOrFail($id);
        return view('producto_eliminar', compact('producto'));
    }

    public function productoEliminar($id)
    {
        Producto::findOrFail($id)->delete();

        return redirect()->route('producto')->with('success', 'Producto eliminado correctamente.');
    }
}
