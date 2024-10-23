

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    @extends('layouts.partials.styles')

</head>
<body>

    <div id="preloader">
        <div class="loader"></div>
    </div>
    
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form action="{{ route('login.submit') }}" method="POST">
                    <div class="login-form-head">
                        <h4>INICIO DE SESION</h4>
                        <p>BUENAS TARDES INICIE SESION :D</p>
                    </div>
                    <div class="login-form-body">
                        
                            @csrf
                            <div class="form-gp">
                                <label for="nombre_usuario">Nombre de Usuario:</label>
                                <input type="text" id="nombre_usuario" name="nombre_usuario" required>
                            </div>
                            <div class="form-gp">
                                <label for="password">Contraseña:</label>
                                <input type="password" id="password" name="password" required>
                            </div>
                        <div class="row mb-4 rmber-area">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember Me</label>
                                </div>
                            </div>
                        </div>
                        @if ($errors->any())
                        <div>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                         @endif
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Iniciar Sesión <i class="ti-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
    @extends('layouts.partials.scripts')
</html>
