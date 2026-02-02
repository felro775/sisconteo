@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <nav aria-label="breadcrumb" style="font-size: 16pt">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/admin/recintos') }}">Recinto</a></li>
            <li class="breadcrumb-item active" aria-current="page">Datos de Recinto</li>
        </ol>
    </nav>
@stop

@section('content')

    <div class="row">
        <div class="col-md-6">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Datos del Recintos</h3>
                </div>
                <div class="card-body" style="display: block">
                    
                    <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="departamento">Departamento</label>
                                    <div class="input-group mb-12">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-globe"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="departamento" name="departamento" value="{{ $recinto->departamento }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="provincia">Provincia</label>
                                    <div class="input-group mb-12">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-cubes"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="provincia" name="provincia" value="{{ $recinto->provincia }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="municipio">Municipio</label>
                                    <div class="input-group mb-12">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-cubes"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="municipio" name="municipio" value="{{ $recinto->municipio }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="distrito">Distrito</label>
                                    <div class="input-group mb-12">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-cubes"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="distrito" name="distrito" value="{{ $recinto->distrito }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="zona">Zona</label>
                                    <input type="text" class="form-control" id="zona" name="zona" value="{{ $recinto->zona }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="circunscripcion">Circuncripcion</label>
                                    <input type="text" class="form-control" id="circunscripcion" name="circunscripcion" value="{{ $recinto->circunscripcion }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $recinto->nombre }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="direccion">Direccion</label>
                                    <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $recinto->direccion }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nummesas">Numero de Mesas</label>
                                    <input type="number" class="form-control" id="nummesas" name="nummesas" value="{{ $recinto->nummesas }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="numhabilitados">Numero de Habilitados</label>
                                    <input type="number" class="form-control" id="numhabilitados" name="numhabilitados" value="{{ $recinto->numhabilitados }}" readonly>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">                                        
                                        <a href="{{ url('admin/recintos') }}" class="btn btn-danger">Volver</a>
                                    </div>
                                </div>
                            </div>

                </div>
            </div>
            <!-- /.card-header -->

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    </div>


@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    
@stop
