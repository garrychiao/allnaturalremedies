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
      <div class="container">
          <div class="row">
              <div class="col-sm-12">
                  <div class="panel panel-default">
                      <div class="panel-heading">Dashboard</div>
                      <div class="panel-body">
                        @if(Auth::user()->admin == true)
                        <div class="col-sm-12">
                          <div class="panel panel-info">
                            <div class="panel-heading">
                              Permission Setup
                            </div>
                            <div class="panel-body">
                              <div class="col-sm-10">
                                <form action="{{ url('/user/permission') }}" method="post">
                                  {!! csrf_field() !!}
                                  <table class="table table-hover table-condensed table-striped">
                                    <tr>
                                      <td>
                                        Registered User
                                      </td>
                                      <td>
                                        Email
                                      </td>
                                      <td>
                                        Administrator
                                      </td>
                                      <td>
                                        Employee
                                      </td>
                                    </tr>
                                    @foreach($user as $key => $u)
                                    <tr>
                                      <td>
                                        {{$u->name}}
                                        <input type="hidden" name="id[]" value="{{ $u->id }}">
                                      </td>
                                      <td>
                                        {{$u->email}}
                                      </td>
                                      <td>
                                        @if($u->admin)
                                          <label class="btn btn-block" style="background-color:#DCEDC8;">
                                            @if($key == 0)
                                            <input type="hidden" name="admin[]" value="1" checked>
                                            <input type="checkbox" name="admin[]" checked disabled>
                                            Yes
                                            @else
                                            <input type="checkbox" autocomplete="off" name="admin[]" onchange="change(this);" value="1" checked>
                                            Yes
                                            @endif
                                          </label>
                                        @else
                                          <label class="btn btn-block" style="background-color:#F8BBD0;">
                                            <input type="hidden" name="admin[]" value="0">
                                            <input type="checkbox" name="admin[]" autocomplete="off" onchange="change(this);"> No
                                          </label>
                                        @endif
                                      </td>
                                      <td>
                                        @if($u->employee)
                                          <label class="btn btn-block" style="background-color:#DCEDC8;">
                                            <input type="checkbox" autocomplete="off" name="employee[]" onchange="change(this);" value="1" checked>
                                            Yes
                                          </label>
                                        @else
                                          <label class="btn btn-block" style="background-color:#F8BBD0;">
                                            <input type="hidden" name="employee[]" value="0">
                                            <input type="checkbox" name="employee[]" autocomplete="off" onchange="change(this);"> No
                                          </label>
                                        @endif
                                      </td>
                                    </tr>
                                    @endforeach
                                  </table>
                                  <div class="col-sm-3 col-sm-offset-9">
                                    <input value="Save" onclick="saveUser(this);" class="btn btn-success btn-block">
                                  </div>
                                </form>
                              </div>
                              <div class="col-sm-2">
                                <table class="table table-hover table-condensed table-striped">
                                  <tr class="warning">
                                    <td>
                                      Be Careful !
                                    </td>
                                  </tr>
                                  @foreach($user as $key => $u)
                                  <tr>
                                    <td>
                                      <form class="form-horizontal" action="{{ url('/user/delete')}}" method="post" role="form">
                                        {!! csrf_field() !!}
                                        <input type="hidden" name="id" value="{{ $u->id }}" />
                                        <input class="btn btn-danger btn-block" value="Delete" onclick="deleteUser(this);" @if($key==0) disabled @endif>
                                      </form>
                                    </td>
                                  </tr>
                                  @endforeach
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--Permission div ends here-->
                        @endif
                        <!--personal information setup-->
                        <div class="col-sm-6">
                          <div class="panel panel-info">
                            <div class="panel-heading">
                              Display Setup
                            </div>
                            <div class="panel-body">
                              <div class="form-group">
                                <form action="/user/update" method="post">
                                  {!! csrf_field() !!}
                                  <div class="col-sm-12">
                                    <div class="col-sm-2">
                                      <label for="">Name</label>
                                      <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                                    </div>
                                    <div class="col-sm-4">
                                      <input type="text" name="display_name" class="form-control" value="{{ Auth::user()->display_name }}" required>
                                    </div>
                                    <div class="col-sm-2">
                                      <label for="">Gender</label>
                                    </div>
                                    <div class="col-sm-4">
                                      <select class="form-control" name="gender" required>
                                        <option value="Male" @if(Auth::user()->gender == "Male") selected @endif> Male </option>
                                        <option value="Female" @if(Auth::user()->gender == "Female") selected @endif> Female </option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-sm-12" style="padding-top:20px;">
                                    <div class="col-sm-2">
                                      <label for="">Specilized</label>
                                    </div>
                                    <div class="col-sm-10">
                                      <textarea name="specialized" class="form-control" rows="2" cols="40">{{ Auth::user()->specialized }}</textarea>
                                    </div>
                                  </div>
                                  <div class="col-sm-12" style="padding-top:20px;">
                                    <div class="col-sm-12">
                                      <label for="">Available Time</label>
                                    </div>
                                    <div class="col-sm-12">
                                      <label class="checkbox-inline">
                                        <input type="checkbox" name="mon" value="1" @if(Auth::user()->mon == 1) checked @endif> Mon.
                                      </label>
                                      <label class="checkbox-inline">
                                        <input type="checkbox" name="tue" value="1" @if(Auth::user()->tue == 1) checked @endif> Tue.
                                      </label>
                                      <label class="checkbox-inline">
                                        <input type="checkbox" name="wed" value="1" @if(Auth::user()->wed == 1) checked @endif> Wed.
                                      </label>
                                      <label class="checkbox-inline">
                                        <input type="checkbox" name="thur" value="1" @if(Auth::user()->thur == 1) checked @endif> Thur.
                                      </label>
                                      <label class="checkbox-inline">
                                        <input type="checkbox" name="fri" value="1" @if(Auth::user()->fri == 1) checked @endif> Fri.
                                      </label>
                                      <label class="checkbox-inline">
                                        <input type="checkbox" name="sat" value="1" @if(Auth::user()->sat == 1) checked @endif> Sat.
                                      </label>
                                      <label class="checkbox-inline">
                                        <input type="checkbox" name="sun" value="1" @if(Auth::user()->sun == 1) checked @endif> Sun.
                                      </label>
                                    </div>
                                  </div>
                                  <div class="col-sm-4 col-sm-offset-8">
                                    <div class="col-sm-12" style="padding-top:20px;">
                                      <input value="Save" onclick="saveUser(this);" class="btn btn-success btn-block">
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--Display setup ends-->
                        <!--Calendar-->
                        <div class="col-sm-12">
                          <div class="panel panel-info">
                            <div class="panel-heading">
                              Schedule
                            </div>
                            <div class="panel-body">
                              <div id="calendar"></div>
                            </div>
                          </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="modalTitle"></h4>
                              </div>
                              <div class="modal-body">
                                <p id="modalInfo">

                                </p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <script type="text/javascript">
    function change(input){
      var label = input.parentNode;
      var name = input.getAttribute("name");
      if(input.checked){
        label.style.backgroundColor = '#DCEDC8';
        label.innerHTML = '<input type="checkbox" name="' + name + '" autocomplete="off" onchange="change(this);" value="1" checked> Yes';
      }else{
        label.style.backgroundColor = '#F8BBD0';
        label.innerHTML = '<input type="hidden" name="' + name + '" value="0">';
        label.innerHTML += '<input type="checkbox" autocomplete="off" name="' + name + '" onchange="change(this);"> No';
      }
    }
    function deleteUser(button){
      swal({
        title:"Are you sure?",
        text: "You will not be able to recover this user information!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false },
        function(){
          button.form.submit();
          swal("Deleted!", "User has been deleted.", "success");
        });
    }
    function saveUser(button){
      swal({
        title:"Success",
        text: "Updated !",
        type: "success",
      },function(){
        button.form.submit();
      });
    }
    </script>
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
