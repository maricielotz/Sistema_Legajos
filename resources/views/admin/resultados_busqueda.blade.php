@extends('layouts.master')
@section('buscar_legajos', 'active')
@section('admin-content')
@section('title', 'Resultados busqueda')
@section('titulo_navbar','Buscar Usuarios')


@if($usuarios->isEmpty())
    <p>No se encontraron usuarios.</p>
    @else
    
<h2 class="text-center">Resultados de Búsqueda</h2>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <table class="table table-bordered" style="width: 80%;">
            <thead>
                <tr>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Número de Teléfono</th>
                    <th>Legajo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->dni }}</td>
                        <td>{{ $usuario->nombre }}</td>
                        <td>{{ $usuario->apellido }}</td>
                        <td>{{ $usuario->correo }}</td>
                        <td>{{ $usuario->numero_telefono }}</td>
                        <td>
                            @if($usuario->documentos->isNotEmpty())
                                <a href="{{ asset('storage/' . $usuario->documentos->first()->ruta_archivo) }}" target="_blank">Ver Legajo</a>
                            @else
                                Sin Legajo
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.legajo.update.form', ['id' => $usuario->id]) }}" class="btn btn-warning">Actualizar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
    
    


@endsection
