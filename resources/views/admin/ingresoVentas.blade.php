@extends('adminlte::page')

@section('title', 'Aqua Spa - Web Control')

@section('content_header')
    <h1>Ingreso de Ventas</h1>
    <h5>Por favor, rellene todos los campos</h5>
@stop

@section('content')


<div class="box box-info">

            <div class="box-header with-border">
                          <h1 class="box-title">Datos del paciente</h1>
            </div>

            <div class="box-body">
            <form action="" method="post">
            @csrf
            <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
            <h4>Rut paciente:</h4>
            <div class="input-group input-group-md">
                <input type="text" class="form-control" placeholder="Ingrese rut" name="rutPaciente" value="" >
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat">Buscar</button>
                    </span>
            </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
            <h4>Nombre:</h4>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" placeholder="Ingrese nombre completo" name="nombrePaciente" disabled value="">
            </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
            <h4>Teléfono:</h4>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                <input type="text" class="form-control" placeholder="Ingrese Teléfono" name="telefonoPaciente" disabled value="">
            </div>
            </div>
            </div>



            <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
            <h4>Fecha venta:</h4>
            <div class="input-group date">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <input type="date" class="form-control pull-right" name="fechaNacPaciente">
            </div>
            </div>
            </div>

            <br>

            <div class="row">
                <div class="box-header with-border">
                            <h1 class="box-title">Servicios</h1>
                </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
            <h4>Tipo de servicio:</h4>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <select class="form-control" id="">
                @foreach($data as $value)
                <option value="{{$value->idServicio}}">{{$value->nombreServicio}}</option>
                 @endforeach
                </select>
            </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
            <h4>Costo servicio:</h4>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>              
                <input type="text" class="form-control" placeholder="Ingrese nombre completo" name="costoServicio" disabled value="{{ $value->minutosServicio }}">
               
            </div>
            </div>
    





            </div>

            <br>

            <div class="row">
             <div class="box-header with-border">
                          <h1 class="box-title">Comentarios de venta:</h1>
            </div>
            <br>

            <div class="form-group">
                  <div class="col-lg-8 col-sm-6 col-xs-12">
                  <textarea class="form-control" rows="3" placeholder="Escriba sus comentarios referentes a la venta.." name="comentarios"></textarea>
                  </div>
            </div>
              <button class="btn btn-success btn-lg" type="submit">Ingresar venta</button>
            </div>

            </form>
            </div>
            <br>
</div>




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

@stop
