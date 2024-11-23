<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class CargosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cargo_laboral')->insert([
            ['nombre' => 'Ingeniero de sistemas', 'descripcion' => 'Experto en hardware y software'],
            ['nombre' => 'Abogado', 'descripcion' => 'Experto en salvarnos de las demandas'],
            ['nombre' => 'Administrador', 'descripcion' => 'Especialista en administrar el presupuesto'],
            ['nombre' => 'Ingeniero estadistico', 'descripcion' => 'Experto en analisis'],
            ['nombre' => 'RR.HH', 'descripcion' => 'Expertos en llenarse de docuemtnacion'],

        ]);
    
    }
}
