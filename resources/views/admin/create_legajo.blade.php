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
@section('crear_legajo', 'active')
@section('title', 'Crear Legajo')

@section('titulo_navbar','Registrar Legajo')

@section('admin-content')
    

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

   <div class="container">
        <h2 class="text-center">Crear nuevo legajo</h2>
    
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif


                <div class="col-12 mt-5">
                    <div class='card'>

                        <form action="{{ route('admin.legajos.buscar') }}" method="POST">
                        <div class='card-body'>
                                @csrf
                                <div class="form-group">
                                    <label for="dni">Buscar Usuario por DNI</label>
                                    <input type="text" name="dni" id="dni" class="form-control" required placeholder="Ingrese el DNI del usuario">
                                </div>
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary">Buscar Usuario</button>
                                </div> 
                        </div>
                        </form>
                        @if (isset($legajoExistente))
                        <div class="alert alert-warning">El usuario ya tiene un legajo registrado.</div>
                     @endif
                    
                    @if(isset($usuarioInfo))
                        <h3 class="text-center">Información del Usuario</h3>
                        <p><strong>Nombre:</strong> {{ $usuarioInfo['nombre'] }}</p>
                        <p><strong>Apellido:</strong> {{ $usuarioInfo['apellido'] }}</p>
                        <p><strong>DNI:</strong> {{ $usuarioInfo['dni'] }}</p>
                        <p><strong>Cargo Laboral:</strong> {{ $usuarioInfo['cargo_laboral'] }}</p>
                        <p><strong>Descripción del Cargo:</strong> {{ $usuarioInfo['descripcion_cargo'] }}</p>
                        <p><strong>Régimen Laboral:</strong> {{ $usuarioInfo['regimen_laboral'] }}</p>
                        <p><strong>Fecha de Inicio:</strong> {{ $usuarioInfo['fecha_inicio_laboral'] }}</p>
                        <p><strong>Fecha de Fin de Contrato:</strong> {{ $usuarioInfo['fecha_fin_contrato'] }}</p>
                    
                        <form action="{{ route('admin.legajos.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="usuario_id" value="{{ $usuario->id }}">
                            <div class="form-group">
                                <label for="numero_expediente">Número de Expediente</label>
                                <input type="text" name="numero_expediente" id="numero_expediente" class="form-control" required placeholder="Ingrese el numero de expediente nuevo">
                            </div>
                            <div class="form-group">
                                <label for="archivo">Documento PDF</label>
                                <input type="file" name="archivo" id="archivo" class="form-control" accept="application/pdf" required>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary">Guardar Legajo</button>
                            </div>
                        </form>
                    @endif

                        </div>
                    </div>


    </div>
    
@endsection
