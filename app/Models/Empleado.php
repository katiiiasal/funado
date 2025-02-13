<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'empleados'; // Nombre de la tabla
    protected $primaryKey = 'codigo'; // Clave primaria
    public $timestamps = true; // Si usas timestamps

    protected $fillable = [
        'nombre',
        'apellido',
        'puesto',
        'sueldo'
    ];
}