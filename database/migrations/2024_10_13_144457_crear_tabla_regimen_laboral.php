<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        //MIGRACION PARA REGIMEN_LABORAL
        //AQUI ENTRARIA LO DE LA LEY QUE NOS DIJO EL PROFE? MIENTRAS TANTO BUSCA SANDRO XD
        //IGUAL QUE CON CARGO -  SE HACE UN NUEVO FORMULARIO 
        //PORQUE ESTO ES LLAVE DE USERS SORRY XD MALA LOGICA O TAL VEZ NO(?)
        //AQUI ESTAMOS PARA COMPLICARNOS JAJAJAJ
        
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
