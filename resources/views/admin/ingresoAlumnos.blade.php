@extends('adminlte::page')

@section('title', 'FFitness - Web Control')

@section('content_header')
    <h1>Ingreso de alumnos al sistema</h1>
    <h5>Por favor, rellene todos los campos</h5>
@stop

@section('content')

<div class="box box-info">

            <div class="box-header with-border">
                          <h1 class="box-title">Datos Personales</h1>
            </div>

            <div class="box-body">

            <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
            <h4>Rut alumno:</h4>
            <div class="input-group input-group-md">
                <input type="text" class="form-control" placeholder="Ingrese rut">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat">Buscar</button>
                    </span>
            </div>            
            </div>
            </div>
            <br>           

            <div class="row">            
            <div class="col-md-4 col-sm-6 col-xs-12">
            <h4>Nombre:</h4>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="email" class="form-control" placeholder="Ingrese nombre completo">
            </div>         
            </div> 

            <div class="col-md-4 col-sm-6 col-xs-12">
            <h4>Teléfono:</h4>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                <input type="email" class="form-control" placeholder="Ingrese Teléfono">
            </div>         
            </div> 

            <div class="col-md-4 col-sm-6 col-xs-12">
            <h4>Dirección:</h4>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-map-signs"></i></span>
                <input type="email" class="form-control" placeholder="Ingrese dirección">
            </div>         
            </div>
            </div>

            <div class="row">            
            <div class="col-md-4 col-sm-6 col-xs-12">
            <h4>Correo electrónico:</h4>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-at"></i></span>
                <input type="email" class="form-control" placeholder="Ingrese email">
            </div>         
            </div> 

            <div class="col-md-4 col-sm-6 col-xs-12">
            <h4>Número emergencia:</h4>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-exclamation-triangle"></i></span>
                <input type="email" class="form-control" placeholder="Ingrese Teléfono emergencia">
            </div>         
            </div> 

            <div class="col-md-4 col-sm-6 col-xs-12">
            <h4>Fecha ingreso:</h4>
            <div class="input-group date">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <input type="date" class="form-control pull-right">
            </div>         
            </div>
            </div>
              <br>

            <div class="box-header with-border">
                          <h1 class="box-title">Datos Plan</h1>
            </div>
            <br>

            <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
            <h4>Seleccione plan:</h4>
            <div class="form-group ">                
                <select class="form-control" style="width: 100%;" tabindex="-1" aria-hidden="true">
                  <option data-select2-id="1">Estudiante básico</option>
                  <option data-select2-id="2">Estudiante anual</option>
                  <option data-select2-id="3">Adulto básico</option>
                  <option data-select2-id="4">Adulto anual</option>
                  <option data-select2-id="5">Adulto full mensual</option>                 
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


            <div class="col-md-4 col-sm-6 col-xs-12">
            <h4>Seleccione Descuento:</h4>
            <div class="form-group ">                
                <select class="form-control" style="width: 100%;" tabindex="-1" aria-hidden="true">
                  <option data-select2-id="1">2%</option>
                  <option data-select2-id="2">4%</option>
                  <option data-select2-id="3">6%</option>
                  <option data-select2-id="4">8%</option>
                  <option data-select2-id="5">10%</option>
                  <option data-select2-id="5">Descuento especial</option>                 
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

            <div class="col-md-4 col-sm-6 col-xs-12">
            <h4>Seleccione método pago:</h4>
            <div class="form-group ">                
                <select class="form-control" style="width: 100%;" tabindex="-1" aria-hidden="true">
                  <option data-select2-id="1">Efectivo</option>
                  <option data-select2-id="2">Tarjeta débito</option>
                  <option data-select2-id="3">Tarjeta crédito</option>
                  <option data-select2-id="4">Transferencia</option>
                  <option data-select2-id="5">Abono</option>                 
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
            <div class="col-md-4 col-sm-6 col-xs-12">
            <h4>Número documento:</h4>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                <input type="email" class="form-control" placeholder="Número voucher | número boleta">
            </div>         
            </div>            

            <div class="col-md-4 col-sm-6 col-xs-12">
            <h4>Saldo:</h4>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-repeat"></i></span>
                <input type="email" class="form-control" placeholder="Saldo pendiente de pago">
            </div>         
            </div> 

            <div class="col-md-4 col-sm-6 col-xs-12">
            <h4>Total a pagar:</h4>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-shopping-cart"></i></span>
                <input type="email" class="form-control" placeholder="Valor total a cancelar">
            </div>         
            </div>
            </div>
            
            <br>


            <div class="row">
             <div class="box-header with-border">
                          <h1 class="box-title">Comentarios de matricula:</h1>
            </div>
            <br>         
          
            <div class="form-group">
                  <div class="col-lg-6 col-sm-6 col-xs-12">            
                  <textarea class="form-control" rows="3" placeholder="Escriba sus comentarios"></textarea>
                  </div> 
            </div>
              <button class="btn btn-primary btn-lg" type="submit">Guarda datos</button>
            </div>


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