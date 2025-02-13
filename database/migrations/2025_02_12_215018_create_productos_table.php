<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    if (!Schema::hasTable('productos')) {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('codigo')->unique();
            $table->integer('existencia');
            $table->decimal('precio', 8, 2);
            $table->timestamps();
        });
    }
}

    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
