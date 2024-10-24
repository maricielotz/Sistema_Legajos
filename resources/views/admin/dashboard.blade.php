@extends('layouts.master')


{{-- @section('content')
    <h1>Dashboard del Administrador</h1>

    <!-- BOTONCITO PARA REGISTRAR -->
    <a href="{{ route('admin.register') }}" class="btn btn-primary">Registrar Nuevo Usuario</a>
    <a href="{{ route('admin.legajos.create') }}" class="btn btn-primary">Registrar Nuevo legajo</a>
    <a href="{{ route('admin.legajo.update.form') }}" class="btn btn-primary">Actualizar Legajo</a>
    <a href="{{ route('admin.usuarios.buscar') }}" class="btn btn-primary">Buscar y Filtrar Usuarios</a>

    <!-- Otras secciones del dashboard -->
@endsection --}}


@section('title', 'Admin Panel')



@section('admin-content')


<!-- ESTO SE PUEDE EDITAR PARA QUE LA ALERTA SEA UN POP UP XD -->
@if(session('success'))
<script>
    document.addEventListener("DOMContentLoaded", function() {
        Swal.fire({
            icon: 'success',
            title: 'Éxito',
            text: '{{ session('success') }}',
            confirmButtonText: 'Aceptar'
        });
    });
</script>
@endif



@section('dashboard_active', 'active')

<!-- page title area end -->

<div class="main-content-inner">
  <div class="row">
    <div class="col-lg-8">
        <div class="row">
            <div class="col-md-6 mt-5 mb-3">
                <div class="card">
                    <div class="seo-fact sbg1">
                        <a href="{{ route('admin.register') }}">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="fa fa-users"></i> Crear Usuario</div>
                                
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-md-5 mb-3">
                <div class="card">
                    <div class="seo-fact sbg2">
                        <a href="{{ route('admin.cargos.create') }}">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="fa fa-user"></i> Crear Cargo</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-md-5 mb-3">
                <div class="card">
                    <div class="seo-fact sbg3">
                        <a href="{{ route('admin.legajos.create') }}">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="fa fa-user"></i>Crear Legajo</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-md-5 mb-3">
                <div class="card">
                    <div class="seo-fact sbg4">
                        <a href="{{ route('admin.legajo.update') }}">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="fa fa-user"></i> Actualizar Legajo</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-md-5 mb-3">
                <div class="card">
                    <div class="seo-fact sbg1">
                        <a href="{{ route('admin.usuarios.buscar') }}">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="fa fa-user"></i>Buscar Usuario</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
  </div>
</div>
@endsection
