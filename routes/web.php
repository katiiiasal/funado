<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControlUsuarios;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ControlEmpleados;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return redirect()->route('usuario');
})->name('inicio');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function () {

    Route::get('/usuario', [ControlUsuarios::class, "vistaUsuario"])->name("usuario");
    Route::get('/usuarioformGuardar', [ControlUsuarios::class, "vistaUsuarioGuardar"])->name("usuformGuardar");
    Route::post('/usuarioguardar', [ControlUsuarios::class, "UsuarioGuardar"])->name("guardarUsu");
    Route::get("/usuarioeliminar/{id}", [ControlUsuarios::class, "usuarioEliminar"])->name("eliminarUsu");
    Route::get('/usuarioformModificar/{id}', [ControlUsuarios::class, "vistaUsuarioModificar"])->name("usuformModificar");
    Route::post("/usuariomodificar/{id}", [ControlUsuarios::class, "usuarioModificar"])->name("modificarUsu");

    Route::get('/producto', [ProductoController::class, "vistaProducto"])->name("producto");
    Route::get('/productoformGuardar', [ProductoController::class, "vistaProductoGuardar"])->name("prodformGuardar");
    Route::post('/productoguardar', [ProductoController::class, "ProductoGuardar"])->name("guardarProd");
    Route::get("/productoeliminar/{id}", [ProductoController::class, "productoEliminar"])->name("eliminarProd");
    Route::get('/productoformModificar/{id}', [ProductoController::class, "vistaProductoModificar"])->name("prodformModificar");
    Route::post("/productomodificar/{id}", [ProductoController::class, "productoModificar"])->name("modificarProd");

    Route::get('/empleado', [ControlEmpleados::class, "vistaEmpleado"])->name("empleado");
    Route::get('/empleadoformGuardar', [ControlEmpleados::class, "vistaEmpleadoGuardar"])->name("empformGuardar");
    Route::post('/empleadoguardar', [ControlEmpleados::class, "empleadoGuardar"])->name("guardarEmp");
    Route::delete("/empleadoeliminar/{id}", [ControlEmpleados::class, "empleadoEliminar"])->name("eliminarEmp");
    Route::get('/empleadoformModificar/{id}', [ControlEmpleados::class, "vistaEmpleadoModificar"])->name("empformModificar");
    Route::put("/empleadomodificar/{id}", [ControlEmpleados::class, "empleadoModificar"])->name("modificarEmp");
});