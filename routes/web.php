<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControlUsuarios;

Route::get('/usuario', [ControlUsuarios::class, "vistaUsuario"])->name("usuario");
Route::get('/usuarioformGuardar', [ControlUsuarios::class, "vistaUsuarioGuardar"])->name("usuformGuardar");
Route::post('/usuarioguardar', [ControlUsuarios::class, "UsuarioGuardar"])->name("guardarUsu");
Route::get("/usuarioeliminar/{id}", [ControlUsuarios::class, "usuarioEliminar"])->name("eliminarUsu");
Route::get('/usuarioformModificar/{id}', [ControlUsuarios::class, "vistaUsuarioModificar"])->name("usuformModificar");
Route::post("/usuariomodificar/{id}", [ControlUsuarios::class, "usuarioModificar"])->name("modificarUsu");
