@extends('layouts.master')

@section('buscar_legajos', 'active')
@section('titulo_navbar','Buscar Usuarios')
@section('title', 'Buscar Usuarios')
@section('admin-content')


<div class="container">
    <h2 class="text-center">Buscar y Filtrar Usuarios</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    
    <div class="col-12 mt-5">
        <div class='card'>
                <form action="{{ route('admin.usuarios.buscar.submit') }}" method="POST">
                <div class='card-body'>
                    @csrf
                    <!--Comentar en html es feo asi xd-->
                    <div class="form-group">
                        <label for="dni">DNI</label>
                        <input type="text" name="dni" id="dni" class="form-control" maxlength="8" pattern="\d{8}" placeholder="Ingrese Solo numeros">
                    </div>
                
                    <div class="form-group">
                        <label for="cargo_laboral_id">Cargo Laboral</label>
                        <select name="cargo_laboral_id" id="cargo_laboral_id" class="form-control">
                            <option value="">Seleccione un cargo</option>
                            @foreach($cargos as $cargo)
                                <option value="{{ $cargo->id }}">{{ $cargo->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                
                    <div class="form-group">
                        <label for="regimen_laboral_id">Régimen Laboral</label>
                        <select name="regimen_laboral_id" id="regimen_laboral_id" class="form-control">
                            <option value="">Seleccione un régimen</option>
                            @foreach($regimenes as $regimen)
                                <option value="{{ $regimen->id }}">{{ $regimen->nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary">Buscar</button>
                    </div>
                </div>
                </form>
        </div>
    </div>
</div>

@endsection
