<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <!-- Bootstrap Material Design -->
  <!--<link rel="stylesheet" type="text/css" href="css/bootstrap-material-design.css">-->
  <link rel="stylesheet" type="text/css" href="css/ripples.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet">

  <!--Full Calender-->
  <link rel='stylesheet' href='css/fullcalendar.css' />

  <title>{{ config('app.name', 'Laravel') }}</title>
  <style media="screen">
  #csshome {
    position: relative;
    background-image: url(img/bghome.jpg); /*You will specify your image path here.*/
    -moz-background-size: cover;
    -webkit-background-size: cover;
    background-size: cover;
    background-position: top center !important;
    background-repeat: no-repeat !important;
    background-attachment: fixed;
  }
  #csstherapies {
    position: relative;
    background-image: url(img/bgservice.jpeg); /*You will specify your image path here.*/
    -moz-background-size: cover;
    -webkit-background-size: cover;
    background-size: cover;
    background-position: top center !important;
    background-repeat: no-repeat !important;
  }
  #csscontact {
    position: relative;
    background-image: url(img/bgservice.jpeg); /*You will specify your image path here.*/
    -moz-background-size: cover;
    -webkit-background-size: cover;
    background-size: cover;
    background-position: top center !important;
    background-repeat: no-repeat !important;
  }
  #title{
    font-family: cursive;
    color: #000;
  }
  #content{
    font-family: cursive;
    color: #000;
    padding-bottom: 20px;
  }
</style>
</head>
<body>
  @if(Session::has('message'))
  <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
  @endif
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
      </div>
      <div class="navbar-collapse collapse navbar-inverse-collapse">
        <ul class="nav navbar-nav navbar-right" id="myMenu">
          <li data-menuanchor="home" class="active"><a href="#home">Home</a></li>
          <li data-menuanchor="therapies"><a href="#therapies">Therapies</a></li>
          <li data-menuanchor="contact"><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!--end navbar-->
  <div class="" id="fullpage">
    <div class="section" id="csshome" align="center">
      <div class="hidden-xs">
        <h1 class="animated pulse" id="title">Acupuncture & Massage Clinic Plus</h1>
        <h2 class="animated pulse" id="content">Intergrated alternative therapies for body balance</h2>
        <div class="col-sm-8 col-sm-offset-2">
          <div class="col-sm-6">
            <h3><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> ACC Provider</h3>
            <h3><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Open 7 Days</h3>
          </div>
          <div class="col-sm-6">
            <h3><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Full Provision For Ladies</h3>
            <h3><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Female Therapist</h3>
          </div>
          <div class="col-sm-12" align="center">
            <h3>Opening Hours :</h3>
            <h3>Mon - Fri: 08:00 AM - 10:00 PM</h3>
            <h3>Sat - Sun: 09:00 AM - 09:00 PM</h3>
          </div>
        </div>
      </div>
      <div class="visible-xs">
        <h2 class="animated pulse" id="title">Acupuncture & Massage Clinic Plus</h2>
        <h4 class="animated pulse" id="content">Intergrated alternative therapies for body balance</h4>
        <div class="col-sm-8 col-sm-offset-2">
          <div class="col-xs-12">
            <h4><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> ACC Provider</h4>
            <h4><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Open 7 Days</h4>
            <h4><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Full Provision For Ladies</h4>
            <h4><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Female Therapist</h4>
          </div>
          <div class="col-xs-12" align="center">
            <h4>Opening Hours :</h4>
            <h4>Mon - Fri: 08:00 AM - 10:00 PM</h4>
            <h4>Sat - Sun: 09:00 AM - 09:00 PM</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="section" id="csstherapies" align="center">
      <!--2*2 per slide-->
      <div class="slide">
        <div class="col-sm-12 hidden-xs">
          <h1 id="title">Therapies Provided:</h1>
          <div class="col-sm-5 col-sm-offset-1">
            <!--A part of introduction section-->
            <!--the first col-->
            <div class="col-sm-12">
              <li><h3 id="content">Acupuncture</h3></li>
              <div class="col-sm-4">
                <a href="#" class="thumbnail">
                  <img src="img/img_acupuncture.jpeg" alt="...">
                </a>
              </div>
              <div class="col-sm-8">
                <p>
                  Hundreds of clinical studies on the benefits of acupuncture show that it successfully treats conditions ranging from musculoskeletal problems (back pain, neck pain, and others) to nausea, migraine headache, anxiety, depression, insomnia, infertility, etc.
                </p>
              </div>
            </div>
            <!--a part ends here-->
            <div class="col-sm-12">
              <li><h3 id="content">Massage</h3></li>
              <div class="col-sm-4">
                <a href="#" class="thumbnail">
                  <img src="img/img_massage.jpg" alt="...">
                </a>
              </div>
              <div class="col-sm-8">
                <p>
                  You can also try our latest Thermal Jade Massage beds with clothes on for: fatigue, to enhance immunity, sciatica, prostatitis, diabetes, muscle strain, leg pains, correction of the spine, cervical spondylosis, constipation, gastritis, and gynaecological diseases.
                </p>
              </div>
            </div>
            <!--a part ends here-->
          </div>
          <!--the second col-->
          <div class="col-sm-5">
            <!--a part starts-->
            <div class="col-sm-12">
              <li><h3 id="content">​Nutrition & Herbal</h3></li>
              <div class="col-sm-4">
                <a href="#" class="thumbnail">
                  <img src="img/img_herbal.jpg" alt="...">
                </a>
              </div>
              <div class="col-sm-8">
                <p>
                  We are the retailers of New Zealand mede nutrition powders and herbal suppliments.  Herbal suppliments are without side effects- all trusted brands at a very low price.
                </p>
              </div>
            </div>
            <!--a part starts-->
            <div class="col-sm-12">
              <li><h3 id="content">​Reflexology</h3></li>
              <div class="col-sm-4">
                <a href="#" class="thumbnail">
                  <img src="img/img_reflexology.jpg" alt="...">
                </a>
              </div>
              <div class="col-sm-8">
                <p>
                  Please book in advance and  try our latest massages too.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="visible-xs">
          <h2 id="title">Therapies Provided:</h2>
          <div class="col-xs-12">
            <div class="col-xs-12">
              <li><h4 id="content">Acupuncture</h4></li>
              <div class="col-xs-4">
                <a href="#" class="thumbnail">
                  <img src="img/img_acupuncture.jpeg" alt="...">
                </a>
              </div>
              <div class="col-xs-8">
                <p>
                  Hundreds of clinical studies on the benefits of acupuncture show that it successfully treats conditions ranging from musculoskeletal problems (back pain, neck pain, and others) to nausea, migraine headache, anxiety, depression, insomnia, infertility, etc.
                </p>
              </div>
            </div>
            <div class="col-xs-12">
              <h4><----Slide to View----></h4>
            </div>
          </div>
        </div>
      </div>
      <div class="slide visible-xs">
        <!--a part ends here-->
        <div class="col-xs-12">
          <li><h3 id="content">Massage</h3></li>
          <div class="col-xs-4">
            <a href="#" class="thumbnail">
              <img src="img/img_massage.jpg" alt="...">
            </a>
          </div>
          <div class="col-xs-8">
            <p>
              You can also try our latest Thermal Jade Massage beds with clothes on for: fatigue, to enhance immunity, sciatica, prostatitis, diabetes, muscle strain, leg pains, correction of the spine, cervical spondylosis, constipation, gastritis, and gynaecological diseases.
            </p>
          </div>
        </div>
      </div>
      <div class="slide visible-xs">
        <!--a part ends here-->
        <div class="col-xs-12">
          <li><h4 id="content">​Nutrition & Herbal</h4></li>
          <div class="col-xs-4">
            <a href="#" class="thumbnail">
              <img src="img/img_herbal.jpg" alt="...">
            </a>
          </div>
          <div class="col-xs-8">
            <p>
              We are the retailers of New Zealand mede nutrition powders and herbal suppliments.  Herbal suppliments are without side effects- all trusted brands at a very low price.
            </p>
          </div>
        </div>
      </div>
      <div class="slide visible-xs">
        <div class="col-xs-12">
          <li><h3 id="content">​Reflexology</h3></li>
          <div class="col-xs-4">
            <a href="#" class="thumbnail">
              <img src="img/img_reflexology.jpg" alt="...">
            </a>
          </div>
          <div class="col-xs-8">
            <p>
              Please book in advance and  try our latest massages too.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="section" id="csscontact">
      <div class="slide">
        <div class="col-sm-12">
          <div class="col-sm-6 col-xs-12" align="center">
            <h2 id="title">About</h2>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="aboutus">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#div_aboutus" aria-expanded="true" aria-controls="aboutus">
                      <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                       Therapists
                    </a>
                  </h4>
                </div>
                <div id="div_aboutus" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="aboutus">
                  <div class="panel-body">
                    <div class="col-sm-12" align="left">
                      @forelse($user as $u)
                      <div class="col-sm-6 col-xs-6">
                        <h3 id="content">
                          @if($u->gender == "Male")
                          <i class="fa fa-male" aria-hidden="true"></i>
                          @elseif($u->gender == "Female")
                          <i class="fa fa-female" aria-hidden="true"></i>
                          @endif
                          {{$u->display_name}}
                        </h3>
                        <h5 id="content">Specialized : {{ $u->specialized }}</h5>
                        <h5 id="content">
                          @if($u->mon) Mon. @endif
                          @if($u->tue) Tue. @endif
                          @if($u->wed) Wed. @endif
                          @if($u->thur) Thur. @endif
                          @if($u->fri) Fri. @endif
                          @if($u->sat) Sat. @endif
                          @if($u->sun) Sun. @endif
                        </h5>
                      </div>
                      @empty
                      Waiting !
                      @endforelse
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#div_contact" aria-expanded="false" aria-controls="div_contact">
                      <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
                       Contact
                    </a>
                  </h4>
                </div>
                <div id="div_contact" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    <h3 id="content"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>Tel. 2755517.</h3>
                    <h3 id="content"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>Mob. 02040360833.</h3>
                    <h3 id="content"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>Mob. 0284078617.</h3>
                    <h3 id="content">
                      <a href="mailto:naturalhealthplus@yahoo.co.nz">
                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                         Email: naturalhealthplus@yahoo.co.nz
                      </a>
                    </h3>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#div_map" aria-expanded="false" aria-controls="div_map">
                      <span class="glyphicon glyphicon-road" aria-hidden="true"></span>
                       Map
                    </a>
                  </h4>
                </div>
                <div id="div_map" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">
                    <h4>
                      32/203 Kirkbride Road.
                      Airport Oaks.
                      Auckland
                    </h4>
                    <iframe width="100%" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=32%2F203%20Kirkbride%20Road%20Airport%20Oaks%20Auckland&key=AIzaSyAFpllDDTKOIMHw7vJrebtQKbPifQ5pAxY" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>
            <div id="content" class="visible-xs">
              <label><h3><----------slide to book</h3></label>
            </div>
          </div>
          <div class="visible-xs slide">
            <h2 id="title">Book Your Appointments</h2>
            <form action="{{ url('/booking') }}" method="post">
              {!! csrf_field() !!}
              <div class="col-xs-6">
                <label for="">Name :</label>
                <input type="text" class="form-control" name="name" value="" required>
                <label for="">Phone Number :</label>
                <input type="text" class="form-control" name="phone" value="" required>
                <label for="">Email :</label>
                <input type="text" class="form-control" name="email" value="">
              </div>
              <div class="col-xs-6">
                <label for="">Therapist :</label>
                <select class="form-control" name="therapist_id" id="therapist_id_s" onchange="change_period_s();" required>
                  @foreach($user as $u)
                  <option value="{{ $u->id }}">{{ $u->display_name }}</option>
                  @endforeach
                </select>
                <label for="">Date :</label>
                <input type="date" class="form-control" name="booking_date" id="booking_date_s" onchange="change_period_s();" required>
                <label for="">Time :</label>
                <select class="form-control" name="booking_period" id="booking_period_s" onchange="change_period_s();" required>
                  <option value="09:00:00">09:00~10:00</option>
                  <option value="10:00:00">10:00~11:00</option>
                  <option value="11:00:00">11:00~12:00</option>
                  <option value="12:00:00">12:00~13:00</option>
                  <option value="13:00:00">13:00~14:00</option>
                  <option value="14:00:00">14:00~15:00</option>
                  <option value="15:00:00">15:00~16:00</option>
                  <option value="16:00:00">16:00~17:00</option>
                  <option value="17:00:00">17:00~18:00</option>
                  <option value="18:00:00">18:00~19:00</option>
                  <option value="19:00:00">19:00~20:00</option>
                  <option value="20:00:00">20:00~21:00</option>
                  <option value="21:00:00">21:00~22:00</option>
                </select>
              </div>
              <div class="col-xs-12">
                <label for="">Main Symptoms :</label>
                <textarea class="form-control" name="symptoms" rows="8" cols="40" required></textarea>
                <input type="submit" id="submitBtn_s" class="btn btn-default" value="Submit">
              </div>
            </form>
          </div>
          <div class="col-sm-6 hidden-xs">
            <h2 id="title">Book Your Appointments</h2>
            <form action="{{ url('/booking') }}" method="post">
              {!! csrf_field() !!}
              <div class="col-sm-6">
                <label for="">Name :</label>
                <input type="text" class="form-control" name="name" value="" required>
                <label for="">Phone Number :</label>
                <input type="text" class="form-control" name="phone" value="" required>
                <label for="">Email :</label>
                <input type="email" class="form-control" name="email" value="">
              </div>
              <div class="col-sm-6">
                <label for="">Therapist :</label>
                <select class="form-control" name="therapist_id" id="therapist_id_m" onchange="change_period_m();" required>
                  @foreach($user as $u)
                  <option value="{{ $u->id }}">{{ $u->display_name }}</option>
                  @endforeach
                </select>
                <label for="">Date :</label>
                <input type="date" class="form-control" name="booking_date" id="booking_date_m" onchange="change_period_m();" value="" required>
                <label for="">Time :</label>
                <select class="form-control" name="booking_period" id="booking_period_m" onchange="change_period_m();" required>
                  <option value="09:00:00">09:00~10:00</option>
                  <option value="10:00:00">10:00~11:00</option>
                  <option value="11:00:00">11:00~12:00</option>
                  <option value="12:00:00">12:00~13:00</option>
                  <option value="13:00:00">13:00~14:00</option>
                  <option value="14:00:00">14:00~15:00</option>
                  <option value="15:00:00">15:00~16:00</option>
                  <option value="16:00:00">16:00~17:00</option>
                  <option value="17:00:00">17:00~18:00</option>
                  <option value="18:00:00">18:00~19:00</option>
                  <option value="19:00:00">19:00~20:00</option>
                  <option value="20:00:00">20:00~21:00</option>
                  <option value="21:00:00">21:00~22:00</option>
                </select>
              </div>
              <div class="col-sm-12">
                <label for="">Main Symptoms :</label>
                <textarea class="form-control" name="symptoms" rows="8" cols="40" required></textarea>
                <input type="submit" id="submitBtn_m" class="btn btn-default" value="Submit">
              </div>
            </form>
          </div>
        </div>
        <footer class="page-footer">
          <div class="row">
            <div class="col-sm-1 col-sm-offset-5 hidden-xs">
              <div class="container">
                <div class="col-sm-12">
                  @if (Auth::guest())
                  <ul class="nav navbar-nav navbar-left">
                    <li class="dropup">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Backend <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                      </ul>
                    </li>
                  </ul>
                  @else
                  <ul class="nav navbar-nav navbar-left">
                    <li><a href="{{ url('/home') }}">Hello {{Auth::user()->name}} !</a></li>
                  </ul>
                  @endif
                </div>
                <h6>© Website by Full-Stack-Artisan</h6>
              </div>
            </div>
            <div class="col-xs-12 visible-xs">
              <div class="container" style="">
                <div class="col-xs-12">
                  @if (Auth::guest())
                  <ul class="nav navbar-nav navbar-left">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Backend <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                      </ul>
                    </li>
                  </ul>
                  @else
                  <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Hello {{Auth::user()->name}} !</a></li>
                  </ul>
                  @endif
                </div>
                <h6>© Website by Full-Stack-Artisan</h6>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/ripples.min.js"></script>
  <script src="js/material.min.js"></script>
  <script type="text/javascript" src="js/jquery.fullPage.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

  <script type="text/javascript">
    $.material.init();
    $(document).ready(function() {
      $('#fullpage').fullpage({
        anchors:['home' ,'therapies', 'contact'],
        menu: '#myMenu',
        controlArrows: false,
      });
    });
  </script>
  <!--full page calender-->
  <script src='js/lib/moment.min.js'></script>
  <script src='js/fullcalendar.js'></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#calendar').fullCalendar({

        // put your options and callbacks here
      })
    });
  </script>
  <script type="text/javascript">
  function change_period_s(){
    var therapist = document.getElementById('therapist_id_s').value;
    var date = new Date(document.getElementById('booking_date_s').value);
    var weekday = date.getDay();
    @foreach($user as $u)
    if(therapist == {{ $u->id }}){
      switch (weekday) {
        case 1:
          @if($u->mon)
          document.getElementById("booking_period_s").disabled = false;
          document.getElementById("submitBtn_s").disabled = false;
          @else
          document.getElementById("booking_period_s").disabled = true;
          document.getElementById("submitBtn_s").disabled = true;
          @endif
        break;
        case 2:
          @if($u->tue)
          document.getElementById("booking_period_s").disabled = false;
          document.getElementById("submitBtn_s").disabled = false;
          @else
          document.getElementById("booking_period_s").disabled = true;
          document.getElementById("submitBtn_s").disabled = true;
          @endif
        break;
        case 3:
          @if($u->wed)
          document.getElementById("booking_period_s").disabled = false;
          document.getElementById("submitBtn_s").disabled = false;
          @else
          document.getElementById("booking_period_s").disabled = true;
          document.getElementById("submitBtn_s").disabled = true;
          @endif
        break;
        case 4:
          @if($u->thur)
          document.getElementById("booking_period_s").disabled = false;
          document.getElementById("submitBtn_s").disabled = false;
          @else
          document.getElementById("booking_period_s").disabled = true;
          document.getElementById("submitBtn_s").disabled = true;
          @endif
        break;
        case 5:
          @if($u->fri)
          document.getElementById("booking_period_s").disabled = false;
          document.getElementById("submitBtn_s").disabled = false;
          @else
          document.getElementById("booking_period_s").disabled = true;
          document.getElementById("submitBtn_s").disabled = true;
          @endif
        break;
        case 6:
          @if($u->sat)
          document.getElementById("booking_period_s").disabled = false;
          document.getElementById("submitBtn_s").disabled = false;
          @else
          document.getElementById("booking_period_s").disabled = true;
          document.getElementById("submitBtn_s").disabled = true;
          @endif
        break;
        case 0:
          @if($u->sun)
          document.getElementById("booking_period_s").disabled = false;
          document.getElementById("submitBtn_s").disabled = false;
          @else
          document.getElementById("booking_period_s").disabled = true;
          document.getElementById("submitBtn_s").disabled = true;
          @endif
        break;
        default:
      }
    }
    @endforeach
    var date = document.getElementById('booking_date_s').value;
    var time = document.getElementById('booking_period_s').value;
    switch (date+"/"+time) {
      @foreach($booking_records as $r)
      case "{{$r->booking_date}}/{{$r->booking_period}}":
        if(therapist == {{$r->therapist_id}}){
          sweetAlert("Oops...", "The Period Has Been Booked......", "error");
          document.getElementById('booking_period_s').selectedIndex = document.getElementById('booking_period_s').selectedIndex+1;
          change_period_s()
        }
      break;
      @endforeach
      default:
    }
  }
  function change_period_m(){
    var therapist = document.getElementById('therapist_id_m').value;
    var date = new Date(document.getElementById('booking_date_m').value);
    var weekday = date.getDay();
    @foreach($user as $u)
    if(therapist == {{ $u->id }}){
      switch (weekday) {
        case 1:
          @if($u->mon)
          document.getElementById("booking_period_m").disabled = false;
          document.getElementById("submitBtn_m").disabled = false;
          @else
          document.getElementById("booking_period_m").disabled = true;
          document.getElementById("submitBtn_m").disabled = true;
          @endif
        break;
        case 2:
          @if($u->tue)
          document.getElementById("booking_period_m").disabled = false;
          document.getElementById("submitBtn_m").disabled = false;
          @else
          document.getElementById("booking_period_m").disabled = true;
          document.getElementById("submitBtn_m").disabled = true;
          @endif
        break;
        case 3:
          @if($u->wed)
          document.getElementById("booking_period_m").disabled = false;
          document.getElementById("submitBtn_m").disabled = false;
          @else
          document.getElementById("booking_period_m").disabled = true;
          document.getElementById("submitBtn_m").disabled = true;
          @endif
        break;
        case 4:
          @if($u->thur)
          document.getElementById("booking_period_m").disabled = false;
          document.getElementById("submitBtn_m").disabled = false;
          @else
          document.getElementById("booking_period_m").disabled = true;
          document.getElementById("submitBtn_m").disabled = true;
          @endif
        break;
        case 5:
          @if($u->fri)
          document.getElementById("booking_period_m").disabled = false;
          document.getElementById("submitBtn_m").disabled = false;
          @else
          document.getElementById("booking_period_m").disabled = true;
          document.getElementById("submitBtn_m").disabled = true;
          @endif
        break;
        case 6:
          @if($u->sat)
          document.getElementById("booking_period_m").disabled = false;
          document.getElementById("submitBtn_m").disabled = false;
          @else
          document.getElementById("booking_period_m").disabled = true;
          document.getElementById("submitBtn_m").disabled = true;
          @endif
        break;
        case 0:
          @if($u->sun)
          document.getElementById("booking_period_m").disabled = false;
          document.getElementById("submitBtn_m").disabled = false;
          @else
          document.getElementById("booking_period_m").disabled = true;
          document.getElementById("submitBtn_m").disabled = true;
          @endif
        break;
        default:
      }
    }
    @endforeach
    var date = document.getElementById('booking_date_m').value;
    var time = document.getElementById('booking_period_m').value;
    switch (date+"/"+time) {
      @foreach($booking_records as $r)
      case "{{$r->booking_date}}/{{$r->booking_period}}":
        if(therapist == {{$r->therapist_id}}){
          sweetAlert("Oops...", "The Period Has Been Booked......", "error");
          document.getElementById('booking_period_m').selectedIndex = document.getElementById('booking_period_m').selectedIndex+1;
          change_period_m();
        }
      break;
      @endforeach
      default:
    }
  }
  </script>
</body>
</html>
