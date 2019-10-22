@extends('adminlte::page')

@section('title', 'Aqua Spa - Web Manager')

@section('content_header')
    <h1>Informe de pacientes</h1>
@stop

@section('content')


<table id="paciente" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>    
            <th>ID</th>
            <th>Nombre paciente</th>
            <th>Rut paciente</th>
            <th>Fecha Nacimiento</th>
            <th>Email</th>
            <th>Profesión</th>
            <th>Teléfono emergencia</th>
            <th>Teléfono personal</th>
            <th>Dirección</th>
            <th>Comentarios</th>
            <th>Acción</th>
        </tr>
    </thead>
<tbody>
        @foreach($paciente as $value)
            <tr>
                <td>{{$value->idPaciente}}</td>
                <td>{{$value->nombrePaciente}}</td>
                <td>{{$value->rutPaciente}}</td>
                <td>{{$value->fechaNacPaciente}}</td>
                <td>{{$value->emailPaciente}}</td>
                <td>{{$value->profesionPaciente}}</td>
                <td>{{$value->tel_emergenciaPaciente}}</td>
                <td>{{$value->telefonoPaciente}}</td>
                <td>{{$value->direccionPaciente}}</td>
                <td>{{$value->comentarios}}</td>
                <td><a href="" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
                <a href="{{ route('eliminarPaciente', $value->idPaciente) }}" onclick="return confirm('Seguro que desea borrar?')" class="btn btn-danger" id="btnEliminar">                    
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
//librerias Toastr 
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#paciente').DataTable({
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