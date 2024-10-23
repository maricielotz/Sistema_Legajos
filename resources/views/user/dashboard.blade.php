@extends('layouts.master')

@section('title','User panel')

@section('dashboard_active', 'active')

@section('user-content')
@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="main-content-inner">
    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-md-6 mt-5 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg1">
                            <a href="{{ route('legajo.create') }}">
                                <div class="p-4 d-flex justify-content-between align-items-center">
                                  <div class="seofct-icon"><i class="fa fa-users"></i> Subir Legajo o actualizar</div>
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
