<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet">
    <link rel='stylesheet' href='css/fullcalendar.css' />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
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
</body>
</html>
