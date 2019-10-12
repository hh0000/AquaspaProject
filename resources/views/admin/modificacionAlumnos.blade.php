@extends('adminlte::page')

@section('title', 'Aqua Spa - Web Control')

@section('content_header')
    <h1>Formulario de modificación</h1>

@stop

@section('content')

<div class="box box-success">

            <div class="box-header with-border">
                <h5 class="box-title">Por favor,ingrese número de socio a modificar</h5>
            </div>

            <div class="box-body">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                     <h4>Número socio:</h4>
                            <div class="input-group input-group-md">
                                <input type="text" class="form-control" placeholder="Ingrese número de socio a buscar">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-info btn-flat">Buscar</button>
                                </span>
                            </div>
                    </div>


                </div>


                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <h4>Rut:</h4>
                           <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                               <input type="email" class="form-control">
                           </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <h4>Nombre:</h4>
                            <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                                <input type="text" class="form-control" placeholder="Nombre socio a modificar">
                            </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <h4>Telefóno:</h4>
                           <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                               <input type="email" class="form-control">
                           </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <h4>Email:</h4>
                           <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                               <input type="email" class="form-control">
                           </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <h4>Dirección:</h4>
                            <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                                <input type="text" class="form-control" placeholder="Nombre socio a modificar">
                            </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <h4>Número:</h4>
                           <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                               <input type="email" class="form-control">
                           </div>
                    </div>
                </div>

                <div class="row">
                    <div class="box-header with-border">
                        <h1 class="box-title">Comentarios de modificación:</h1>
                    </div>
                    <br>

                    <div class="form-group">
                        <div class="col-lg-8 col-sm-6 col-xs-12">
                            <textarea class="form-control" rows="3" placeholder="Escriba sus comentarios"></textarea>
                        </div>
                    </div>
                        <button class="btn btn-success btn-lg" type="submit">Modificar socio</button>
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
