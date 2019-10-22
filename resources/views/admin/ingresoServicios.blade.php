@extends('adminlte::page')

@section('title', 'AquaSpa - Web Control')

@section('content_header')
    <h1>Ingreso de servicios al sistema</h1>
    <h5>Por favor, rellene todos los campos</h5>
@stop

@section('content')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @elseif ( $errors = null)
    <div class="alert alert-success">
        <ul>
            <li><th>Usuario creado correctamente!</th></li>
        </ul>
    </div>
    @endif



<div class="box box success">
    <div class="box-header with-border">
        <h1 class="box-title">Datos de servicios</h1>
    </div>

    <div class="box-body">
        <form action="/servicio/guardar" method="post">
            @csrf
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <h4>Nombre del servicio:</h4>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                            <input type="text" class="form-control" name="nombreServicio">
                        </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <h4>Minutos del servicio:</h4>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                            <input type="text" class="form-control" name="minutosServicio">
                        </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <h4>Precio del Servicio:</h4>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                            <input type="text" class="form-control" name="costoServicio">
                        </div>
                </div>
            </div>  

            <div class="row">
                <div class="box-header with-border">
                    <h1 class="box-title">Descripción del servicio:</h1>
                </div>

                <br>

                <div class="form-group">
                  <div class="col-lg-8 col-sm-6 col-xs-12">
                  <textarea class="form-control" rows="3" placeholder="Escriba una descripción..." name="descripcion"></textarea>
                </div>
              <button class="btn btn-success btn-lg" type="submit">Ingresar plan</button>
            </div>

    </div>
        </form>
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