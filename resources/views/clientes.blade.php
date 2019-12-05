@extends('adminlte::page')

@section('title', 'Aqua Spa - Clientes')

@section('content_header')
    <h1>Aqua Spa</h1>
@stop

@section('content') 

@if(Auth::user()->isAdmin == true)
<h5>Admin logeado.</h5>
@else
<h5>Cliente logeado.<h5>
@endif

<div class="container">
    <div id="calendario">
    </div>
</div>

@stop

@section('script')
    
@endsection