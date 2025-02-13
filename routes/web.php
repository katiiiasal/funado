<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControlUsuarios;
use App\Http\Controllers\ProductoController;

Route::get('/usuario', [ControlUsuarios::class, "vistaUsuario"])->name("usuario");
Route::get('/usuarioformGuardar', [ControlUsuarios::class, "vistaUsuarioGuardar"])->name("usuformGuardar");
Route::post('/usuarioguardar', [ControlUsuarios::class, "UsuarioGuardar"])->name("guardarUsu");
Route::get("/usuarioeliminar/{id}", [ControlUsuarios::class, "usuarioEliminar"])->name("eliminarUsu");
Route::get('/usuarioformModificar/{id}', [ControlUsuarios::class, "vistaUsuarioModificar"])->name("usuformModificar");
Route::post("/usuariomodificar/{id}", [ControlUsuarios::class, "usuarioModificar"])->name("modificarUsu");

//Rutas Producto
Route::get('/producto', [ProductoController::class, "vistaProducto"])->name("producto");
Route::get('/productoformGuardar', [ProductoController::class, "vistaProductoGuardar"])->name("prodformGuardar");
Route::post('/productoguardar', [ProductoController::class, "ProductoGuardar"])->name("guardarProd");
Route::get("/productoeliminar/{id}", [ProductoController::class, "productoEliminar"])->name("eliminarProd");
Route::get('/productoformModificar/{id}', [ProductoController::class, "vistaProductoModificar"])->name("prodformModificar");
Route::post("/productomodificar/{id}", [ProductoController::class, "productoModificar"])->name("modificarProd");
