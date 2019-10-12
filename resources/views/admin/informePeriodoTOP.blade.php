@extends('adminlte::page')

@section('title', 'Aqua Spa - Web Manager')

@section('content_header')
    <h1>Rotación de productos</h1>
@stop

@section('content')


<div class="row">
<div class="col-md-6">
<div class="box box-primary">
<div class="box-body">
<form>
<div class="form-group row">
                <label class="col-sm-3 col-form-label">Seleccione opción</label>                
                <div class="col-sm-9">
                
    <select class="form-control" id="valores">
      <option value='1' @php echo ($valor == '1') ? 'selected="selected"' : '' @endphp>Más vendidos</option>
      <option value='2' @php echo ($valor == '2') ? 'selected="selected"' : '' @endphp>Menos vendido</option>
      <option value='3' @php echo ($valor == '3') ? 'selected="selected"' : '' @endphp>Sin rotación</option>
      <option value='4' @php echo ($valor == '4') ? 'selected="selected"' : '' @endphp>Stock bajo</option>    
    </select>  

         </div>
 </div>                   
<div class="form-group row">
<label class="col-sm-3 col-form-label">Rango de fecha:</label>                
        <div class="col-sm-9">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                @if( isset($fini) && isset($fter))
                @if($valor!=4)
                <input type="text" name="daterange" value="{{$fini}} Hasta {{$fter}} " class="form-control pull-right"/>
                @else
                <input type="text" name="daterange" value="" class="form-control pull-right" disabled/>
                @endif
                @else
                <input type="text" name="daterange" value="" class="form-control pull-right"/>
                @endif
                </div>
                <!-- /.input group -->
                
        </div>
              </form>             
</div>

</div>

</div>


</div>
</div>


<table id="ventas" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>    
            <th>ID Producto</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            @if($valor!=4)
            <th>Cantidad Vendido</th>
            @endif
        </tr>

    </thead>
<tbody>
        @foreach($ventas as $venta)
            <tr>
                <td>{{$venta->id_producto}}</td>
                <td>{{$venta->nombre}}</td>
                <td>{{$venta->precio}}</td>
                <td>{{$venta->stock}}</td>
                @if($valor!=4)
                <td> {{$venta->cantidad_vendido}} </td>            
                @endif
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

            $('#valores').change(function(){
                //console.log($('#valores').val());
                if($('#valores').val()==4){
                    $('input[name="daterange"]').prop('disabled',true);
                    $('input[name="daterange"]').val('');
                    document.location.replace(document.location.origin + "/informePeriodoTOP/000000/000000/"+$('#valores').val());
                }else{
                    $('input[name="daterange"]').prop('disabled',false);
                }
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
                var valor = $("#valores").val();
                document.location.replace(document.location.origin + "/informePeriodoTOP/" + start.format("DDMMYYYY")+ "/" + end.format("DDMMYYYY")+"/"+valor);
            });
        });    
    </script>

   
@stop