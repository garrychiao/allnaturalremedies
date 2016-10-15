<!--full page calender-->
<script src='js/lib/moment.min.js'></script>
<script src='js/fullcalendar.js'></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#calendar').fullCalendar({
      header: { center: 'month,agendaWeek' }, // buttons for switching between views
      views: {
          month: { // name of view
              titleFormat: 'DD, MM, YYYY'
                // other view-specific options here
          }
      },
      events: [
          @forelse($booking_records as $r)
          {
            title  : '{{$r->booking_period}} {{$r->name}}',
            start  : '{{$r->booking_date}}T{{$r->booking_period}}',
            allDay : false // will make the time show
          },
          @empty

          @endforelse

      ],
      defaultTimedEventDuration: '01:00:00',
      eventClick: function(calEvent, jsEvent, view) {
        @forelse($booking_records as $r)
        if(calEvent.title == "{{$r->booking_period}} {{$r->name}}"){
          document.getElementById('modalTitle').innerHTML = calEvent.title;
          document.getElementById('modalInfo').innerHTML = "<h4>{{$r->phone}}</h4><h4>{{$r->email}}</h4><h4>{{$r->symptoms}}</h4> ";
          $('#modal').modal('show');
        }
        @empty

        @endforelse
      }
    })
  });
</script>
