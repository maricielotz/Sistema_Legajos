<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //LA MIGRACION PARA CREAR LA TABLA ROLES 
        //MI RECOMENDACION 2 ROLES
        //ADMINISTRADOR - 1
        //PERSONAL - 2
        Schema::create('roles', function (Blueprint $table) {
            $table->id(); 
            $table->string('nombre', 50)->unique(); 
            $table->text('descripcion')->nullable(); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
