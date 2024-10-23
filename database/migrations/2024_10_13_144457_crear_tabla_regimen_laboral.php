<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        //MIGRACION PARA REGIMEN_LABORAL
        //EN PERU EXISTEN COMO 40000 REGIMENES LABORALES
        //IGUAL QUE CON CARGO -  SI LE VAS A AUMENTAR REGIMENES TIENES QUE HACER UN NUEVO FORMULARIO
        //PORQUE ESTO ES LLAVE DE USERS SORRY XD MALA LOGICA O TAL VEZ NO(?)
        
        Schema::create('regimen_laboral', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100)->unique(); 
            $table->text('descripcion')->nullable(); 
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('regimen_laboral');
    }
};
