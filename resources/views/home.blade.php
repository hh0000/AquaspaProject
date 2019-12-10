@extends('adminlte::page')

@section('title', 'Aqua Spa - Web Control')

@if(Auth::user()->isAdmin == true)
@section('content_header')
    <h1>Panel de administración</h1>
@stop
@else
@section('content_header')
    <h1>Panel de clientes</h1>
@stop
@endif

@section('content')

@if(Auth::user()->isAdmin == true)
<div id='external-events'>
  <p>
    <strong>Servicios</strong>
  </p>
  @foreach($servicios as $servicio)
  <div class='fc-event' data-idservicio="{{$servicio->idServicio}}">{{$servicio->nombreServicio}}</div>
  @endforeach
  <!--<p>
    <input type='checkbox' id='drop-remove' />
    <label for='drop-remove'>remove after drop</label>
  </p>-->
</div>

<div id='calendar-container'>
  <div id='calendar'></div>
</div>
@else
<div id='calendar-container'>
  <div id='calendar'></div>
</div>
@endif

@stop

@section('css')
<style>
#external-events {
  position: absolute;
  border-radius: 10px;
  z-index: 2;
  width: 150px;
  padding: 0 10px;
  border: 1px solid #ccc;
  background: #eee;
}

#external-events .fc-event {
  margin: 1em 0;
  cursor: move;
}

#calendar-container {
    background-color: white;
    border-radius: 10px;
    border-color: black;
  position: relative;
  z-index: 1;
  margin-left: 200px;
}

#calendar {
  max-width: 900px;
  margin: 20px auto;
}
</style>
@endsection

@section('js')
<script>
        document.addEventListener('DOMContentLoaded', function() {

        var Calendar = FullCalendar.Calendar;
        var Draggable = FullCalendarInteraction.Draggable;

        var calendarEl = document.getElementById('calendar');
        var containerEl = document.getElementById('external-events');
        var checkbox = document.getElementById('drop-remove');

        new Draggable(containerEl, {
        itemSelector: '.fc-event',
        eventData: function(eventEl) {
        return {
        title: eventEl.innerText
        };
        }
        });

        var calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list'],
          defaultView: 'dayGridMonth',
          selectable: true,
          editable: true,
          droppable: true,
          
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth, timeGridWeek, timeGridDay, list',
          },
          events: '{{route("leerEvento")}}',
          eventReceive: function(info) {
              info.event.setExtendedProp("idservicio", $(info.draggedEl).data("idservicio"));
              console.log("id", $(info.draggedEl).data("idservicio"));
              console.log("fechainicio", info.event.start.toLocaleString());
              console.log("fechatermino", (info.event.end != null)? info.event.end.toLocaleString() : null);
              console.log(info);
              var guardar = confirm("¿Desea guardar el evento?");
              if(guardar){
                $.ajax({
                type: "POST",
                url: '{{route("guardarServicio")}}',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": $(info.draggedEl).data("idservicio"),
                    "fechainicio":  info.event.start.toLocaleString(),
                    "fechatermino":  (info.event.end != null)? info.event.end.toLocaleString() : "",
                },
                success: function(response){
                console.log(response);
                }
                });
              }
            },
            eventResizeStop: function( info ) {
                  console.log("*************************");
                  console.log(info);
                  console.log(info.event.end.toLocaleString() );
                  console.log(info.event.start.toLocaleString() );
                  var guardar = confirm("¿Desea guardar el evento?");
              if(guardar){
                $.ajax({
                type: "POST",
                url: '{{route("guardarServicio")}}',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": info.event.extendedProps.idservicio,
                    "fechainicio":  info.event.start.toLocaleString(),
                    "fechatermino":  (info.event.end != null) ? info.event.end.toLocaleString() : "",
                },
                success: function(response){
                console.log(response);
                }
                });
              }
                 },
            //drop: function(info) {
       //
                // is the "remove after drop" checkbox checked?
         //       if (checkbox.checked) {
                // if so, remove the element from the "Draggable Events" list
           //     info.draggedEl.parentNode.removeChild(info.draggedEl);
             //   }
               // },

            //dateClick: function(info) {
            //  alert('clicked ' + info.dateStr);
            //},
            
            //select: function(info) {
            //  alert('selected ' + info.startStr + ' to ' + info.endStr);
            //},

        });
        calendar.render();
      });
    </script>

@endsection