<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        //MIGRACION DE USUARIOS IZI
        //ASI COMO ESTA FUNCIONA BIEN CON ESAS LLAVES XD
        //PUEDES CAMBIARLA A UNA LOGICA MEJOR PERO CREO QUE FUNCIONA BIEN SOLO QUE MAS CHAMBA

        //------------------------------------------
        //------------------------------------------
        //LARAVEL USA ELOQUENCE OJITO OJITIIOOOOOOO

        

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('dni', 20)->unique();
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->string('nombre_usuario')->unique();
            $table->string('correo', 150)->unique();
            $table->string('numero_telefono', 20);
            $table->string('codigo_empleado', 50)->unique();
            $table->date('fecha_inicio_laboral');
            $table->date('fecha_fin_contrato')->nullable();
            $table->string('password'); 
            //aca van las llaves foraneas :D 
            $table->foreignId('rol_id')->constrained('roles'); 
            $table->foreignId('cargo_laboral_id')->constrained('cargo_laboral'); 
            $table->foreignId('regimen_laboral_id')->constrained('regimen_laboral'); 

            //para ver cuando se creo el usaurio
            $table->timestamps();
        }); 
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
