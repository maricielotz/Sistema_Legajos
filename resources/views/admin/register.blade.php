@extends('layouts.master')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@section('registrar_empleado', 'active')
@section('empleados_show', 'show')
@section('crear_empleado', 'active')
@section('title', 'Registrar Usuarios')
@section('titulo_navbar','Registrar ')

@section('admin-content')
<div class="container">
    <h2 class="text-center">Registro de Nuevos Usuarios</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Único formulario que contiene ambas partes -->
    <form action="{{ route('admin.register.submit') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-6 col-ml-12">
                <div class="row">
                    <div class="col-12 mt-5">
                        <div class='card'>
                            <div class='card-body'>
                                <!-- Primera parte del formulario -->
                                <div class="form-group">
                                    <label for="dni" class="col-form-label">DNI</label>
                                    <input type="text" name="dni" id="dni" class="form-control" maxlength="8" pattern="\d{8}" placeholder="Ingrese solo números" required>
                                </div>

                                <div class="form-group">
                                    <label for="nombre" class="col-form-label">Nombre</label>
                                    <input type="text" name="nombre" id="nombre" class="form-control" maxlength="100" required placeholder="NOMBRES COMPLETOS">
                                </div>

                                <div class="form-group">
                                    <label for="apellido" class="col-form-label">Apellido</label>
                                    <input type="text" name="apellido" id="apellido" class="form-control" maxlength="100" required placeholder="APELLIDOS COMPLETOS">
                                </div>

                                <div class="form-group">
                                    <label for="nombre_usuario">Nombre de Usuario</label>
                                    <input type="text" name="nombre_usuario" id="nombre_usuario" class="form-control" maxlength="100" required placeholder="Ejemplo: hadeotz || case sensitive">
                                </div>

                                <div class="form-group">
                                    <label for="correo" class="col-form-label">Correo Electrónico</label>
                                    <input type="email" name="correo" id="correo" class="form-control" maxlength="150" required placeholder="ejemplo@gmail.com">
                                </div>

                                <div class="form-group">
                                    <label for="password">Contraseña</label>
                                    <input type="password" name="password" id="password" class="form-control" minlength="8" required placeholder="Ejemplo: contraseña123">
                                </div>

                                <div class="form-group">
                                    <label for="password_confirmation">Confirmar Contraseña</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" minlength="8" required placeholder="Repita la contraseña">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-ml-12">
                <div class="row">
                    <div class="col-12 mt-5">
                        <div class='card'>
                            <div class='card-body'>
                                <!-- Segunda parte del formulario -->
                                <div class="form-group">
                                    <label for="numero_telefono" class="col-form-label">Número de Teléfono</label>
                                    <input type="text" name="numero_telefono" id="numero_telefono" class="form-control" maxlength="9" pattern="\d{9}" placeholder="Ingrese solo números" required>
                                </div>

                                <div class="form-group">
                                    <label for="codigo_empleado" class="col-form-label">Código de Empleado</label>
                                    <input type="text" name="codigo_empleado" id="codigo_empleado" class="form-control" maxlength="50" required placeholder="Ejemplo: hadeotz">
                                </div>

                                <div class="form-group">
                                    <label for="fecha_inicio_laboral" class="col-form-label">Fecha de Inicio Laboral</label>
                                    <input type="date" name="fecha_inicio_laboral" id="fecha_inicio_laboral" class="form-control" required >
                                </div>

                                <div class="form-group">
                                    <label for="fecha_fin_contrato" class="col-form-label">Fecha de Fin de Contrato</label>
                                    <input type="date" name="fecha_fin_contrato" id="fecha_fin_contrato" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="rol_id">Rol</label>
                                    <select name="rol_id" id="rol_id" class="form-control" required>
                                        <option value="">Seleccione un rol</option>
                                        @foreach($roles as $rol)
                                            <option value="{{ $rol->id }}">{{ $rol->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="cargo_laboral_id">Cargo Laboral</label>
                                    <select class="form-control" id="cargo_laboral_id" name="cargo_laboral_id" required>
                                        @foreach ($cargosLaborales as $cargo)
                                            <option value="{{ $cargo->id }}">{{ $cargo->nombre }}</option>
                                        @endforeach
                                    </select>
                                    <small><a href="{{ route('admin.cargos.create') }}">Crear nuevo cargo laboral</a></small>
                                </div>

                                <div class="form-group">
                                    <label for="regimen_laboral_id">Régimen Laboral</label>
                                    <select name="regimen_laboral_id" id="regimen_laboral_id" class="form-control" required>
                                        <option value="">Seleccione un régimen laboral</option>
                                        @foreach($regimenesLaborales as $regimen)
                                            <option value="{{ $regimen->id }}">{{ $regimen->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary">Registrar Usuario</button>
        </div>
    </form>
</div>

<script>
    document.getElementById('nombre').addEventListener('input', function() {
        this.value = this.value.toUpperCase();
    });

    document.getElementById('apellido').addEventListener('input', function() {
        this.value = this.value.toUpperCase();
    });
</script>
@endsection
