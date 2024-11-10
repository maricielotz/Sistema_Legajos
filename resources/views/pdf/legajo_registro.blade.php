<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Legajo Exitoso</title>
</head>
<body>
    <h1>Registro de Legajo Exitoso</h1>
    <p>Nombre: {{ $user->nombre }}</p>
    <p>Apellido: {{ $user->apellido }}</p>
    <p>DNI: {{ $user->dni }}</p>
    <p>Cargo: {{ $user->cargo }}</p>
    <p>Teléfono: {{ $user->telefono }}</p>
    <p>Régimen Laboral: {{ $user->regimen_laboral }}</p>
    <p>Código de Empleado: {{ $user->codigo_empleado }}</p>
    <p>Fecha de Inicio: {{ $user->fecha_inicio }}</p>
    <p>Fin de Contrato: {{ $user->fin_contrato }}</p>
    <p>Código del Legajo: {{ $legajo->codigo_legajo }}</p>
    <p>Fecha de Registro: {{ now()->format('d/m/Y H:i') }}</p>
</body>
