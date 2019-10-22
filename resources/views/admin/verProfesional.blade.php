@extends('adminlte::page')

@section('title', 'Aqua Spa - Web Manager')

@section('content_header')
    <h1>Informe de profesionales de la empresa</h1>
@stop

@section('content')

<table id="profesional" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>    
            <th>ID</th>
            <th>Nombre del profesional</th>
            <th>Rut</th>
            <th>Teléfono</th>
            <th>Acción</th>                     
        </tr>
    </thead>
    <tbody>
        @foreach($profesional as $value)
            <tr>
                <td>{{$value->idProfesional}}</td>
                <td>{{$value->nombreProfesional}}</td>
                <td>{{$value->rutProfesional}}</td>
                <td>{{$value->telefonoProfesional}}</td>
                <td><a href="" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
                <a href="{{ route('eliminarProfesional', $value->idProfesional) }}" onclick="return confirm('Seguro que desea borrar?')" class="btn btn-danger" id="btnEliminar">                    
                <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>                             
            </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
@stop

@section('js')
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script> 

    <script>
        $(document).ready(function() {
            $('#profesional').DataTable({
                "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        },
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
            });
        }       
        );    
    </script>
   
@stop