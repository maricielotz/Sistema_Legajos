<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Legajo - {{ $usuarioInfo['nombre'] }} {{ $usuarioInfo['apellido'] }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        h1 {
            text-align: center;
        }
        .info {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <h1>Legajo de Usuario</h1>
    <div class="info">
        <p><strong>Nombre:</strong> {{ $usuarioInfo['nombre'] }} {{ $usuarioInfo['apellido'] }}</p>
        <p><strong>DNI:</strong> {{ $usuarioInfo['dni'] }}</p>
        <p><strong>Cargo:</strong> {{ $usuarioInfo['cargo_laboral'] }}</p>
        <p><strong>Descripción del Cargo:</strong> {{ $usuarioInfo['descripcion_cargo'] }}</p>
        <p><strong>Régimen Laboral:</strong> {{ $usuarioInfo['regimen_laboral'] }}</p>
        <p><strong>Fecha de Inicio Laboral:</strong> {{ $usuarioInfo['fecha_inicio_laboral'] }}</p>
        <p><strong>Fecha de Fin de Contrato:</strong> {{ $usuarioInfo['fecha_fin_contrato'] }}</p>
        <p><strong>Número de Expediente:</strong> {{ $usuarioInfo['numero_expediente'] }}</p>
    </div>

</body>
</html>
