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
        DB::table('users')->insert([
            [
                'dni' => '12345678',
                'nombre' => 'Admin',
                'apellido' => 'Admin',
                'nombre_usuario' => 'admin',
                'correo' => 'admin@gmail.com',
                'numero_telefono' => '123456789',
                'codigo_empleado' => 'ADM001',
                'fecha_inicio_laboral' => '2024-01-01',
                'fecha_fin_contrato' => null, 
                'password' => Hash::make('admin'), 
                'rol_id' => 1, 
                'cargo_laboral_id' => 1, 
                'regimen_laboral_id' => 1, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // SOLO LAS PRUEBITAS
            [
                'dni' => '71804220',
                'nombre' => 'Maricielo',
                'apellido' => 'Otazu',
                'nombre_usuario' => 'hadeotz',
                'correo' => 'hadeotz@gmail.com',
                'numero_telefono' => '910457898',
                'codigo_empleado' => 'ADM002',
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
                'nombre' => 'Sandro',
                'apellido' => 'Cruz',
                'nombre_usuario' => 'sandro',
                'correo' => 'sandro@gmail.com',
                'numero_telefono' => '998745898',
                'codigo_empleado' => 'EMP001',
                'fecha_inicio_laboral' => '2024-01-02',
                'fecha_fin_contrato' => null, 
                'password' => Hash::make('sandro'), 
                'rol_id' => 2, 
                'cargo_laboral_id' => 1, 
                'regimen_laboral_id' => 1, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dni' => '70344585',
                'nombre' => 'Gabriel',
                'apellido' => 'Mandujano',
                'nombre_usuario' => 'gabo',
                'correo' => 'gabo@gmail.com',
                'numero_telefono' => '998345898',
                'codigo_empleado' => 'EMP00',
                'fecha_inicio_laboral' => '2024-02-02',
                'fecha_fin_contrato' => null, 
                'password' => Hash::make('gabo'), 
                'rol_id' => 2, 
                'cargo_laboral_id' => 1, 
                'regimen_laboral_id' => 1, 
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
