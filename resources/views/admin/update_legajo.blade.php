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

@section('registrar_legajos', 'active')
@section('legajos_show', 'show')
@section('actualizar_legajo', 'active')
@section('titulo_navbar','Actualizar Legajo')
@section('title', 'Actualizar legajo')

@section('admin-content')
@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

    <!-- Formulario para buscar por DNI -->
    <div class="container">
        <h2 class="text-center">Actualizar legajo</h2>
    
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif


                <div class="col-12 mt-5">
                    <div class='card'>

                        <form action="{{ route('admin.legajo.buscar.update') }}" method="POST">
                        <div class='card-body'>    
                            @csrf
                            <div class="form-group">
                                <label for="dni">DNI</label>
                                <input type="text" name="dni" id="dni" class="form-control" maxlength="8" pattern="\d{8}" placeholder="Ingrese solo numeros, o sea burro" required>
                            </div>
                            <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary">Buscar Usuario</button>
                            </div>
                        </div>
                        </form>

                        @if (isset($legajoExistente))
                        <div class="alert alert-warning">El usuario ya tiene un legajo registrado.</div>
                     @endif
                    

                        </div>
                    </div>

                    @if (isset($usuarioInfo))
                    <!-- Formulario para actualizar el legajo -->
                    <form action="{{ route('admin.legajo.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                
                        <!-- Agrega un campo oculto para el ID del usuario -->
                        <input type="hidden" name="usuario_id" value="{{ $usuario->id  }}">
                
                        <div class="row">
                            <div class="col-lg-6 col-ml-12">
                                <div class="row">
                                    <div class="col-12 mt-5">
                                        <div class="card">
                                            <div class="card-body">
                                                <!-- Primera parte del formulario -->
                                                <div class="form-group">
                                                    <label for="dni" class="col-form-label">DNI</label>
                                                    <input type="text" name="dni" id="dni" class="form-control" value="{{ $usuarioInfo['dni'] }}" readonly>
                                                </div>
                
                                                <div class="form-group">
                                                    <label for="nombre" class="col-form-label">Nombre</label>
                                                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $usuarioInfo['nombre'] }}" required>
                                                </div>
                
                                                <div class="form-group">
                                                    <label for="apellido" class="col-form-label">Apellido</label>
                                                    <input type="text" name="apellido" id="apellido" class="form-control" value="{{ $usuarioInfo['apellido'] }}" required>
                                                </div>
                
                                                <div class="form-group">
                                                    <label for="correo" class="col-form-label">Correo Electrónico</label>
                                                    <input type="email" name="correo" id="correo" class="form-control" value="{{ $usuarioInfo['correo'] }}" required>
                                                </div>
                
                                                <div class="form-group">
                                                    <label for="numero_telefono" class="col-form-label">Número de Teléfono</label>
                                                    <input type="text" name="numero_telefono" id="numero_telefono" class="form-control" value="{{ $usuarioInfo['numero_telefono'] }}" required>
                                                </div>
                
                                                <div class="form-group">
                                                    <label for="nombre_usuario" class="col-form-label">Nombre de Usuario</label>
                                                    <input type="text" name="nombre_usuario" id="nombre_usuario" class="form-control" value="{{ $usuarioInfo['nombre_usuario'] }}" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-ml-12">
                                <div class="row">
                                    <div class="col-12 mt-5">
                                        <div class="card">
                                            <div class="card-body">
                                                <!-- Segunda parte del formulario -->
                                                <div class="form-group">
                                                    <label for="fecha_inicio_laboral" class="col-form-label">Fecha de Inicio Laboral</label>
                                                    <input type="date" name="fecha_inicio_laboral" id="fecha_inicio_laboral" class="form-control" value="{{ $usuarioInfo['fecha_inicio_laboral']->format('Y-m-d') }}" required>
                                                </div>
                                                
                
                                                <div class="form-group">
                                                    <label for="fecha_fin_contrato" class="col-form-label">Fecha de Fin de Contrato</label>
                                                    <input type="date" name="fecha_fin_contrato" id="fecha_fin_contrato" class="form-control" value="{{ $usuarioInfo['fecha_fin_contrato'] }}">
                                                </div>
                
                                                <div class="form-group">
                                                    <label for="numero_expediente" class="col-form-label">Número de Expediente</label>
                                                    <input type="text" name="numero_expediente" id="numero_expediente" class="form-control" value="{{ $usuarioInfo['numero_expediente'] }}" readonly>
                                                </div>
                
                                                <div class="form-group">
                                                    <label for="ruta_archivo" class="col-form-label">Documento Asociado</label>
                                                    <div>
                                                        <a href="{{ asset('storage/' . $legajo->ruta_archivo) }}" target="_blank">Ver Documento</a>
                                                    </div>
                                                </div>
                
                                                <div class="form-group">
                                                    <label for="archivo" class="col-form-label">Subir Nuevo Documento</label>
                                                    <input type="file" name="archivo" id="archivo" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary">Actualizar Legajo</button>
                        </div>
                    </form>
                @endif
    </div>
    
   

@endsection
