@extends('adminlte::page')

@section('title', 'AquaSpa - Web Control')

@section('content_header')
    <h1>Modificación de servicios del sistema</h1>
    <h5>Por favor, rellene todos los campos</h5>
@stop

@section('content')   



<div class="box box success">
    <div class="box-header with-border">
        <h1 class="box-title">Datos del servicio {{ $datos->nombreServicio }} que desea modificar </h1>
    </div>

    <div class="box-body">
        <form action="{{ route('servicio.modificacion',$datos->idServicio) }}" method="post">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <h4>Nombre del servicio:</h4>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                            <input type="text" class="form-control" name="nombreServicio" value="{{$datos->nombreServicio}}">
                        </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <h4>Minutos del servicio:</h4>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                            <input type="text" class="form-control" name="minutosServicio" value="{{$datos->minutosServicio}}">
                        </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <h4>Precio del Servicio:</h4>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                            <input type="text" class="form-control" name="costoServicio" value="{{$datos->costoServicio}}">
                        </div>
                </div>
            </div>  
            
            <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
            <h4>Descripción del servicio:</h4>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" placeholder="Ingrese descripción a modificar" name="descripcion" value="{{ $datos->descripcion }}">
            </div>
            </div>
            
            
            <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="input-group">               
            </div>
            
            </div>
            
            </div>

            <br>            
            <button class="btn btn-warning btn-lg" type="submit">Modificar servicio</button>

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