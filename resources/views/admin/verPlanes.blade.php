@extends('adminlte::page')

@section('title', 'Aqua Spa - Web Manager')

@section('content_header')
    <h1>Reporte de planes</h1>
@stop

@section('content')

<table id="servicio" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>    
            <th>ID</th>
            <th>Nombre plan</th>
            <th>Cantidad sesiones</th>
            <th>Minutos sesiones</th>
            <th>Tipo de servicio</th>
            <th>Costo del plan</th>
            <th>Descripción</th>
        </tr>
    </thead>
<tbody>
        @foreach($servicio as $servicio)
            <tr>
                <td>{{$servicio->idServicio}}</td>
                <td>{{$servicio->nombreServicio}}</td>
                <td>{{$servicio->cantidadSesiones}}</td>
                <td>{{$servicio->minutosSesiones}}</td>
                <td>{{$servicio->tipoServicio}}</td>
                <td>{{$servicio->costoServicio}}</td>
                <td>{{$servicio->descripcion}}</td>
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
            $('#servicio').DataTable({
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