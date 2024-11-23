<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {

        //UN DETALLITO 
        //NO SE COMO FUNCIONARA LA LOGICA DE ESTA TABLA XD
        //NO SE COMO MENEJA LA GESTION DE ARCHIVOS LARAVEL 
        //CREO QUE ESTO TE TOCA SANDRO, ASI QUE NOS EXPLICAS JAJA
        
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('users'); // Relación con usuarios
            $table->string('ruta_archivo', 255); // Ruta del archivo PDF
            $table->string('nombre_archivo', 255); // Nombre del archivo
            $table->string('tipo_archivo', 50)->default('pdf'); // Tipo de archivo (siempre será pdf)
            $table->string('numero_expediente', 50)->unique(); // Número de expediente
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('documentos');
    }
};
