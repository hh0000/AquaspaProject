@extends('adminlte::page')

@section('title', 'Aqua Spa - Web Control')

@section('content_header')
    <h1>Aqua Spa</h1>
@stop

@section('content')

@if(Auth::user()->isAdmin == true)
<h5>Admin logeado.</h5>

<div id='calendar'></div>

@else

<h5>Cliente logeado.<h5>

<div id='calendar'></div>

@endif

@stop

@section('script')
<script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: [ 'dayGrid' ]
        });

        calendar.render();
      });

    </script>
    
@endsection