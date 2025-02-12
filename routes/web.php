<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControlUsuarios;
use App\Http\Controllers\ControlProductos;


Route::get('/usuario', [ControlUsuarios::class, "vistaUsuario"])->name("usuario");
Route::get('/usuarioformGuardar', [ControlUsuarios::class, "vistaUsuarioGuardar"])->name("usuformGuardar");
Route::post('/usuarioguardar', [ControlUsuarios::class, "UsuarioGuardar"])->name("guardarUsu");
Route::get("/usuarioeliminar/{id}", [ControlUsuarios::class, "usuarioEliminar"])->name("eliminarUsu");
Route::get('/usuarioformModificar/{id}', [ControlUsuarios::class, "vistaUsuarioModificar"])->name("usuformModificar");
Route::post("/usuariomodificar/{id}", [ControlUsuarios::class, "usuarioModificar"])->name("modificarUsu");
Route::get('/producto', [ControlProductos::class, "vistaProducto"])->name("producto");
Route::get('/productoformGuardar', [ControlProductos::class, "vistaProductoGuardar"])->name("prodformGuardar");
Route::post('/productoguardar', [ControlProductos::class, "productoGuardar"])->name("guardarProd");
Route::get('/productoformModificar/{id}', [ControlProductos::class, "vistaProductoModificar"])->name("prodformModificar");
Route::post("/productomodificar/{id}", [ControlProductos::class, "productoModificar"])->name("modificarProd");
Route::get('/productoformEliminar/{id}', [ControlProductos::class, "vistaProductoEliminar"])->name("prodformEliminar");
Route::post("/productoeliminar/{id}", [ControlProductos::class, "productoEliminar"])->name("eliminarProd");
