<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    // Mostrar lista de productos
    public function vistaProducto()
    {
        $productos = Producto::all();
        return view('listar_productos', compact('productos'));
    }

    // Mostrar formulario para crear producto
    public function vistaProductoGuardar()
    {
        return view('crear_productos');
    }

    // Guardar producto
    public function ProductoGuardar(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'codigo' => 'required|unique:productos',
            'existencia' => 'required|integer',
            'precio' => 'required|numeric',
        ]);
    
        Producto::create($request->all());
    
        return redirect()->route('producto')->with('success', 'Producto creado exitosamente.');
    }

    // Eliminar producto
    public function productoEliminar($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()->route('producto')->with('success', 'Producto eliminado exitosamente.');
    }

    // Mostrar formulario para modificar producto
    public function vistaProductoModificar($id)
    {
        $producto = Producto::findOrFail($id);
        return view('editar_producto', compact('producto'));
    }

    // Modificar producto
    public function productoModificar(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'codigo' => 'required|unique:productos,codigo,' . $id,
            'existencia' => 'required|integer',
            'precio' => 'required|numeric',
        ]);

        $producto = Producto::findOrFail($id);
        $producto->update($request->all());

        return redirect()->route('producto')->with('success', 'Producto actualizado exitosamente.');
    }
}