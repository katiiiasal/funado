<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id('codigo'); // Si prefieres que el código sea autoincremental
            $table->string('nombre');
            $table->string('apellido');
            $table->string('puesto');
            $table->decimal('sueldo', 8, 2); // sueldo con 8 dígitos en total y 2 decimales
            $table->timestamps(); // Opcional: created_at y updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
