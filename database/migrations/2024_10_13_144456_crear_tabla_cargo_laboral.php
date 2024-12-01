<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        //ESTA ES LA MIGRACION PARA CREAR LA TABLA CARGO_LABORAL EN LA DB
        
        Schema::create('cargo_laboral', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100); 
            $table->text('descripcion')->nullable(); 
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cargo_laboral');
    }
};
