@extends('adminlte::page')

@section('title', 'Aqua Spa - Web Manager')

@section('content_header')
    <h1>Reporte de productos</h1>
@stop

@section('content')

<table id="productos" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>    
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Stock Minimo</th>
        </tr>

    </thead>
<tbody>
        @foreach($productos as $producto)
            <tr>
                <td>{{$producto->id_producto}}</td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->precio}}</td>
                <td>{{$producto->stock}}</td>
                <td>{{$producto->stockminimo}}</td>
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
            $('#productos').DataTable({
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