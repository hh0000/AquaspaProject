@extends('adminlte::page')

@section('title', 'AquaSpa - Web Control')

@section('content_header')
    <h1>Ingreso de planes al sistema</h1>
    <h5>Por favor, rellene todos los campos</h5>
@stop



@section('content')

<div class="box box success">
            <div class="box-header with-border">
                          <h1 class="box-title">Datos de planes</h1>
            </div>

            <div class="box-body">
                <div class="row">

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <h4>Nombre del plan:</h4>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                            <input type="email" class="form-control">
                        </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <h4>Número de sesiones:</h4>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                            <input type="email" class="form-control">
                        </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <h4>Minutos de cada sesion:</h4>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                            <input type="email" class="form-control">
                        </div>
                </div>               
                </div>  

                <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <h4>Precio del plan:</h4>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                            <input type="email" class="form-control">
                        </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <h4>Seleccione tipo de plan:</h4>
                        <div class="form-group ">
                            <select class="form-control" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                <option data-select2-id="1">Deportivo</option>
                                <option data-select2-id="2">Estético</option>
                                <option data-select2-id="3">Salud</option>                               
                            </select>
                            <span class="selection" style="width: 100%;">
                            <span class="selection">
                            <span class="selection" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0">
                            <span class="selection__arrow" role="presentation"><b role="presentation"></b></span>
                            </span>
                            </span>
                            <span class="dropdown-wrapper" aria-hidden="true">
                            </span>
                            </span>
                        </div>
                </div>
                </div>

                <div class="row">
                <div class="box-header with-border">
                          <h1 class="box-title">Descripción del plan:</h1>
                </div>
                <br>

                <div class="form-group">
                  <div class="col-lg-8 col-sm-6 col-xs-12">
                  <textarea class="form-control" rows="3" placeholder="Escriba una descripción"></textarea>
                  </div>
            </div>
              <button class="btn btn-success btn-lg" type="submit">Guarda plan</button>
            </div>

                </div>
            </div>





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
