@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <nav aria-label="breadcrumb" style="font-size: 16pt">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/admin/recintos') }}">Recinto</a></li>
            <li class="breadcrumb-item active" aria-current="page">Crear Recinto</li>
        </ol>
    </nav>
@stop

@section('content')

    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Ingrese Datos del Recintos</h3>
                </div>
                <div class="card-body" style="display: block">
                    <form action="{{ url('/admin/recintos/store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="departamento">Departamento</label>
                                    <div class="input-group mb-12">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-globe"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="departamento" name="departamento">
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
                                        <input type="text" class="form-control" id="provincia" name="provincia">
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
                                        <input type="text" class="form-control" id="municipio" name="municipio">
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
                                        <input type="text" class="form-control" id="distrito" name="distrito">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="zona">Zona</label>
                                    <input type="text" class="form-control" id="zona" name="zona">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="circunscripcion">Circuncripcion</label>
                                    <input type="text" class="form-control" id="circunscripcion" name="circunscripcion">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="direccion">Direccion</label>
                                    <input type="text" class="form-control" id="direccion" name="direccion">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nummesas">Numero de Mesas</label>
                                    <input type="number" class="form-control" id="nummesas" name="nummesas">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="numhabilitados">Numero de Habilitados</label>
                                    <input type="number" class="form-control" id="numhabilitados"
                                        name="numhabilitados">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                        <a href="{{ url('admin/recintos') }}" class="btn btn-danger">Cancelar</a>
                                    </div>
                                </div>
                            </div>

                    </form>
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
