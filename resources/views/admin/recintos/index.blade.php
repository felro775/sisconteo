@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <nav aria-label="breadcrumb" style="font-size: 16pt">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/admin')}}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{url('/admin/recintos')}}">Recinto</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lista Recintos</li>
        </ol>
    </nav>
@stop

@section('content')  

    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Lista Recintos</h3>

                <div class="card-tools">
                  <a class="btn btn-primary btn-sm" href="{{  url('/admin/recintos/create') }}"> Crear Nuevo</a>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                <table id="example1" class="table table-striped table-bordered table-hover table-sm">
                    <thead>
                        <tr>
                            <th>Nro</th>
                            <th>Departamento</th>
                            <th>Provincia</th>
                            <th>Municipio</th>
                            <th>Circunscripcion</th>
                            <th>Asiento</th>
                            <th># Mesas</th>
                            <th># Habilitados</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($recintos as $recinto)
                        <tr>
                            <td>{{ $recinto->id }}</td>
                            <td>{{ $recinto->departamento }}</th>
                            <td>{{ $recinto->provincia }}</td>
                            <td>{{ $recinto->municipio }}</td>
                            <td>{{ $recinto->circunscripcion }}</td>
                            <td>{{ $recinto->asiento }}</td>
                            <td>{{ $recinto->nummesas }}</td>
                            <td>{{ $recinto->numhabilitados }}</td>

                            <td style="text-align: center;">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ url('/admin/recintos/'.$recinto->id) }}" class="btn btn-info"><i class="fa fa-eye"></i> Ver</a>
                                    <a href="{{ url('/admin/recintos/'.$recinto->id.'/edit') }}" class="btn btn-warning"><i class="fa fa-pencil-alt"></i> Editar</a>                                    
                                    <form action="{{ url('/admin/recintos/'.$recinto->id.'/destroy') }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Esta seguro de eliminar este Recinto?')"><i class="fa fa-trash"></i> Eliminar</button>
                                    </form> 
                                </div>                                    
                            </td>
                        </tr>   
                        @endforeach                        
                    </tbody>
                </table>
                
              </div>
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
   <script>
    $(function () {
        $("#example1").DataTable({
            "pageLength": 50,
            "language": {
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Recintos",
                "infoEmpty": "Mostrando 0 a 0 de 0 Recintos",
                "infoFiltered": "(Filtrado de _MAX_ total Recintos)",
                "lengthMenu": "Mostrar _MENU_ Recintos",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscador:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Utimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,
            buttons: [
                { text: '<i class="fas fa-copy"></i> COPIAR', extend: 'copy', className: 'btn btn-default' },
                { text: '<i class="fas fa-file-pdf"></i> PDF', extend: 'pdf', className: 'btn btn-danger' },
                { text: '<i class="fas fa-file-csv"></i> CSV', extend: 'csv', className: 'btn btn-info' },
                { text: '<i class="fas fa-file-excel"></i> EXCEL', extend: 'excel', className: 'btn btn-success' },
                { text: '<i class="fas fa-print"></i> IMPRIMIR', extend: 'print', className: 'btn btn-warning' }
            ]
        }).buttons().container().appendTo('#example1_wrapper .row:eq(0)');
    });
    </script>
@stop
