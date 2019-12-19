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
        <form action="/venta/guardar" method="post">
            @csrf
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <h4>Rut paciente:</h4>
                    <div class="form-group">

                        <select class="js-example-basic-single" style="width: 100%;" name="rutPaciente" tabindex="-1"
                            aria-hidden="true" id="rutPaciente">
                            @foreach($pacientes as $value)
                            <option value="{{$value->rutPaciente}}" data-paciente="{{$value->nombrePaciente}}"
                                data-telefono="{{$value->telefonoPaciente}}">
                                {{$value->rutPaciente}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <h4>Nombre:</h4>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" name="nombrePaciente" id="nombrePaciente" readonly>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <h4>Teléfono:</h4>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                        <input type="text" class="form-control" name="telefonoPaciente" id="telefonoPaciente" readonly>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <h4>Fecha venta:</h4>
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input type="date" class="form-control pull-right" name="fechaVenta">
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
                        <select class="form-control" id="nombreServicio" name="nombreServicio">
                            @foreach($servicios as $value)
                            <option value="{{$value->nombreServicio}}" data-precio="{{$value->costoServicio}}">
                                {{$value->nombreServicio}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <h4>Costo servicio:</h4>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="" name="costoServicio" id="costoServicio" readonly>
                    </div>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="box-header with-border">
                    <h1 class="box-title">Profesional</h1>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <h4>Profesional:</h4>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <select class="form-control" id="nombreProfesional" name="nombreProfesional">
                            @foreach($profesionales as $value)
                            <option value="{{$value->nombreProfesional}}" data-telefono="{{$value->telefonoProfesional}}">
                                {{$value->nombreProfesional}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <h4>Teléfono profesional:</h4>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Seleccione profesional"
                            name="telefonoProfesional" id="telefonoProfesional" readonly>
                    </div>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="box-header with-border">
                    <h1 class="box-title">Datos de pago</h1>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <h4>Seleccione método pago:</h4>
                    <div class="form-group ">
                        <select class="form-control" style="width: 100%;" tabindex="-1" aria-hidden="true" name="metodoPago" id="metodoPago">
                            <option data-select2-id="1">Efectivo</option>
                            <option data-select2-id="2">Tarjeta débito</option>
                            <option data-select2-id="3">Tarjeta crédito</option>
                            <option data-select2-id="4">Transferencia</option>
                        </select>
                        <span class="selection" style="width: 100%;">
                            <span class="selection">
                                <span class="selection" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0">
                                    <span class="selection__arrow" role="presentation"><b
                                            role="presentation"></b></span>
                                </span>
                            </span>
                            <span class="dropdown-wrapper" aria-hidden="true">
                            </span>
                        </span>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6 col-xs-12">
                    <h4>Número documento:</h4>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Ingrese número de operación"
                            name="numeroDocumento" id="numeroDocumento">
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <h4>Total a pagar:</h4>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Total a cancelar" name="total" id="total" readonly>
                    </div>
                </div>


            </div>



            <div class="row">
                <div class="box-header with-border">
                    <h1 class="box-title">Comentarios de venta:</h1>
                </div>
                <br>

                <div class="form-group">
                    <div class="col-lg-8 col-sm-6 col-xs-12">
                        <textarea class="form-control" rows="3"
                            placeholder="Escriba sus comentarios referentes a la venta.." name="comentarios" id="comentarios"></textarea>
                    </div>
                </div>
                <button class="btn btn-success btn-lg" type="submit">Ingresar venta</button>
            </div>

      
    </div>
    </form>
</div>




@stop

@section('css')

<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
@stop

@section('js')

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>



<script type="text/javascript">
$(document).ready(function() {
    $("#costoServicio").val($("#nombreServicio option:selected").attr("data-precio"));
    $("#costoServicio").val($("#nombreServicio option:selected").attr("data-precio"));
    $("#telefonoProfesional").val($("#nombreProfesional option:selected").attr("data-telefono"));
    $("#nombrePaciente").val($("#rutPaciente option:selected").attr("data-paciente"));
    $("#telefonoPaciente").val($("#rutPaciente option:selected").attr("data-paciente"));
    $('.js-example-basic-multiple').select2();
    $('.js-example-basic-single').select2();
});
$("#nombreServicio").on("change", function() {
    $("#costoServicio").val($("#nombreServicio option:selected").attr("data-precio"));
});

$("#nombreServicio").on("change", function() {
    $("#total").val($("#nombreServicio option:selected").attr("data-precio"));
});


$("#nombreProfesional").on("change", function() {
    $("#telefonoProfesional").val($("#nombreProfesional option:selected").attr("data-telefono"));
});

$("#rutPaciente").on("change", function() {
    $("#nombrePaciente").val($("#rutPaciente option:selected").attr("data-paciente"));
});

$("#rutPaciente").on("change", function() {
    $("#telefonoPaciente").val($("#rutPaciente option:selected").attr("data-telefono"));
});
</script>

@stop