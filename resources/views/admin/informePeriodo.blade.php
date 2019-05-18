@extends('adminlte::page')

@section('title', 'Novasoft - Web manager')

@section('content_header')
    <h1>Reporte de ventas</h1>
@stop

@section('content')


<div class="row">
<div class="col-md-4">
<div class="box box-primary">
<div class="box-body">
<div class="form-group">
                <label>Rango de fecha:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                @if( isset($fini) && isset($fter))
                <input type="text" name="daterange" value="{{$fini}} Hasta {{$fter}} " class="form-control pull-right"/>
                @else
                <input type="text" name="daterange" value="" class="form-control pull-right"/>
                @endif
                </div>
                <!-- /.input group -->
              </div>
</div>

</div>


</div>
</div>


<table id="ventas" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>    
            <th>Código venta</th>
            <th>Fecha</th>
            <th>Total</th>
            <th>Descuento</th>
            <th>Detalle</th>
           
        </tr>

    </thead>
<tbody>
        @foreach($ventas as $venta)
            <tr>
                <td>{{$venta->cod_venta}}</td>
                <td>{{$venta->fecha}}</td>
                <td>{{$venta->total}}</td>
                <td>{{$venta->descuento}}</td>
                <td>
                <ul>
                @foreach($venta->detalles as $detalle)
            
                <li>{{$detalle->nombre}}</li>
               
        @endforeach
                </ul>
                
                </td>
            </tr>
        @endforeach
</tbody>

</table>

@stop

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
@stop

@section('js')
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script> 
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#ventas').DataTable({
                "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                },
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });

            $('input[name="daterange"]').daterangepicker({
                opens: 'right',
                autoUpdateInput: false,
                "locale": {
                    "format": "DD/MM/YYYY",
                    "separator": " - ",
                    "applyLabel": "Aplicar",
                    "cancelLabel": "Cancelar",
                    "fromLabel": "Desde",
                    "toLabel": "Hasta",
                    "customRangeLabel": "Customizar",
                    "weekLabel": "W",
                    "daysOfWeek": [
                        "Do",
                        "Lu",
                        "Ma",
                        "Mi",
                        "Ju",
                        "Vi",
                        "Sa"
                    ],
                    "monthNames": [
                        "Enero",
                        "Febrero",
                        "Marzo",
                        "Abril",
                        "Mayo",
                        "Junio",
                        "Julio",
                        "Agosto",
                        "Septiembre",
                        "Octubre",
                        "Noviembre",
                        "Diciembre"
                    ],
                    "firstDay": 1
                },
            }, function(start, end, label) {
                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
                document.location.replace(document.location.origin + "/informePeriodo/" + start.format("DDMMYYYY")+ "/" + end.format("DDMMYYYY"));
            });
        });    
    </script>

   
@stop