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
@section('crear_cargo', 'active')
@section('title', 'Crear Cargo')
@section('titulo_navbar','Crear Cargo')
@section('admin-content')
    

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

   <div class="container">
        <h2 class="text-center">Crear cargo laboral</h2>
    
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
    
        <!-- Único formulario que contiene ambas partes -->
        <form action="{{ route('admin.cargos.store') }}" method="POST">
            @csrf
                <div class="col-12 mt-5">
                    <div class='card'>
                        <div class='card-body'>
                            <!-- Segunda parte del formulario -->
                            <div class="form-group">
                                <label for="nombre" class='col-form-label'>Nombre:</label>
                                <input type="text" name="nombre" id="nombre" required class="form-control" placeholder="Ingrese el nombre del cargo ejemplo: Ing de chistemas">
                            </div>
                            <div>
                                <label for="descripcion" class='col-form-label'>Descripción:</label>
                                <textarea name="descripcion" id="descripcion" maxlength="255" class="form-control" placeholder="Ingrese la descripcion del cargo max 255 caracteres"></textarea>
                            </div>

                        </div>
                    </div>
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary">Crear cargo</button>
            </div>
        </form>
    </div>
    
@endsection
