<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            [
                'dni' => '70218795',
                'nombre' => 'Maricielo',
                'apellido' => 'Otazu',
                'nombre_usuario' => 'hadeotz',
                'correo' => 'hadeotz@gmail.com',
                'numero_telefono' => '910457898',
                'codigo_empleado' => 'ADM001',
                'fecha_inicio_laboral' => '2024-01-01',
                'fecha_fin_contrato' => null, 
                'password' => Hash::make('hadeotz'), 
                'rol_id' => 1, 
                'cargo_laboral_id' => 1, 
                'regimen_laboral_id' => 1, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dni' => '70344595',
                'nombre' => 'Manu',
                'apellido' => 'Elito',
                'nombre_usuario' => 'manu',
                'correo' => 'manu@gmail.com',
                'numero_telefono' => '998745898',
                'codigo_empleado' => 'EMP001',
                'fecha_inicio_laboral' => '2024-01-02',
                'fecha_fin_contrato' => null, 
                'password' => Hash::make('manu'), 
                'rol_id' => 2, 
                'cargo_laboral_id' => 1, 
                'regimen_laboral_id' => 1, 
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
