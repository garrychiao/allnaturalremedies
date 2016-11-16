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
    /*background-color: #EAF8EA;*/
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
    color: #F54533;
  }
  #content{
    font-family: cursive;
    color: #000;
    padding-bottom: 20px;
  }
</style>
</head>
<body>
  <!--
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
-->
  <!--end navbar-->
  <div class="" id="fullpage">
    <div class="section" id="csshome" align="center">
      <div class="hidden-xs">
        <h1 class="animated pulse" id="title">Acupuncture & Massage Clinic Plus</h1>
        <h2 class="animated pulse" id="content">Intergrated alternative therapies for body balance</h2>
        <div class="col-sm-8 col-sm-offset-2">
          <div class="col-sm-6">
            <h3 style="background-color:#3350F7;color:#fff"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> ACC Provider</h3>
            <h3 style="background-color:#DAE6E5;color:#05716B"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Open 7 Days</h3>
          </div>
          <div class="col-sm-6">
            <h3 style="background-color:#F6F90F;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Full Provision For Ladies</h3>
            <h3 style="color:#3E5F5D;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Female Therapist</h3>
          </div>
          <div class="col-sm-12" align="center">
            <h3>Opening Hours :</h3>
            <h3>Mon - Fri: 08:00 AM - 10:00 PM</h3>
            <h3>Sat - Sun: 09:00 AM - 09:00 PM</h3>
          </div>
        </div>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.8&appId=852778774844915";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <div class="fb-like" data-href="http://www.allnaturalremedies.nz/" data-width="100" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
      </div>
      <div class="visible-xs">
        <h2 class="animated pulse" id="title">Acupuncture & Massage Clinic Plus</h2>
        <h4 class="animated pulse" id="content">Intergrated alternative therapies for body balance</h4>
        <div class="col-sm-8 col-sm-offset-2">
          <div class="col-xs-12">
            <h4 style="background-color:#3350F7;color:#fff"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> ACC Provider</h4>
            <h4 style="background-color:#DAE6E5;color:#05716B"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Open 7 Days</h4>
            <h4 style="background-color:#F6F90F;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Full Provision For Ladies</h4>
            <h4 style="color:#3E5F5D;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Female Therapist</h4>
          </div>
          <div class="col-xs-12" align="center">
            <h4>Opening Hours :</h4>
            <h4>Mon - Fri: 08:00 AM - 10:00 PM</h4>
            <h4>Sat - Sun: 09:00 AM - 09:00 PM</h4>
          </div>
          <div class="fb-like" data-href="http://www.allnaturalremedies.nz/" data-width="100" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
        </div>
      </div>
    </div>
    <div class="section" id="csstherapies" align="center">
      <!--2*2 per slide-->
      <div class="slide">
        <div class="col-sm-12 hidden-xs">
          <h1 id="title">Therapies Provided:</h1>
          <div class="col-sm-10 col-sm-offset-1">
            <table>
              <tr>
                <td>
                  <div class="col-sm-12" style="background-color:#EEF392"><!--yellow-->
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
                </td>
                <td>
                  <div class="col-sm-12" style="background-color:#F2AFAC"><!--Red-->
                    <li><h3 id="content">Massage</h3></li>
                    <div class="col-sm-4">
                      <a href="#" class="thumbnail">
                        <img src="img/img_massage.png" alt="...">
                      </a>
                    </div>
                    <div class="col-sm-8">
                      <p>
                        You can also try our latest Thermal Jade Massage beds with clothes on for: fatigue, to enhance immunity, sciatica, prostatitis, diabetes, muscle strain, leg pains, correction of the spine, cervical spondylosis, constipation, gastritis, and gynaecological diseases.
                      </p>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="col-sm-12" style="background-color:#44FA3B"><!--green-->
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
                </td>
                <td>
                  <div class="col-sm-12" style="background-color:#ACD5F2"><!--Blue-->
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
                </td>
              </tr>
            </table>
          </div>
        </div>
        <div class="visible-xs">
          <h2 id="title">Therapies Provided:</h2>
          <div class="col-xs-12">
            <div class="col-xs-12" style="background-color:#EEF392">
              <li><h3 id="content">Acupuncture</h3></li>
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
        <div class="col-xs-12" style="background-color:#F2AFAC">
          <li><h3 id="content">Massage</h3></li>
          <div class="col-xs-4">
            <a href="#" class="thumbnail">
              <img src="img/img_massage.png" alt="...">
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
        <div class="col-xs-12" style="background-color:#44FA3B">
          <li><h3 id="content">​Nutrition & Herbal</h3></li>
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
        <div class="col-xs-12" style="background-color:#ACD5F2">
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
        <div class="col-sm-12 hidden-xs">
          <div class="col-sm-6 col-xs-12" align="center">
            <div class="col-sm-12">
              <h4 id="content"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>Tel. 2755517.</h4>
              <h4 id="content"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>Mob. 02040360833, 0284078617.</h4>
              <h4 id="content">
                <a href="mailto:naturalhealthplus@yahoo.co.nz">
                  <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                   Email: naturalhealthplus@yahoo.co.nz
                </a>
              </h4>
            </div>
            <div class="col-sm-12">
              <h4 id="content"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                32/203 Kirkbride Road.
                Airport Oaks.
                Auckland
              </h4>
              <iframe width="400" height="220" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:EjgzMi8yMDMgS2lya2JyaWRlIFJkLCBNYW5nZXJlLCBBdWNrbGFuZCAyMDIyLCBOZXcgWmVhbGFuZA&key=AIzaSyAFpllDDTKOIMHw7vJrebtQKbPifQ5pAxY" allowfullscreen></iframe>
            </div>
            <div class="col-sm-12">
              <h4 id="content">We accept the following payment methods:</h4>
              <div class="col-sm-3 col-sm-offset-1">
                <div class="col-sm-8 col-sm-offset-2">
                  <a href="#" class="thumbnail">
                    <img src="{{url('img/paypal.png')}}" alt="...">
                  </a>
                  <h5>PayPal</h5>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="col-sm-8 col-sm-offset-2">
                  <a href="#" class="thumbnail">
                    <img src="{{url('img/cash.png')}}" alt="...">
                  </a>
                  <h5>Cash</h5>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="col-sm-8 col-sm-offset-2">
                  <a href="#" class="thumbnail">
                    <img src="{{url('img/no-cc.png')}}" alt="...">
                  </a>
                  <h5>No Credit Card</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <h4 id="title">Please fill in the form below and we will be in touch with you as soon as possible.</h4>
            @if(count($errors) > 0)
              <div class="alert alert-danger">
                  <ul>
                      @foreach($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
            @endif
            <form action="{{ url('/booking') }}" method="post">
              {!! csrf_field() !!}
              <div class="col-sm-12">
                <label for="">Name :</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                <label for="">Email :</label>
                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
              </div>
              <div class="col-sm-12">
                <label for="">Message :</label>
                <textarea class="form-control" name="symptoms" rows="8" cols="40" required>{{ old('symptoms') }}</textarea>
                <input type="text" name="cpt" value="" required/>
                <img src="{{ url('/mews') }}" onclick="this.src='{{ url('/mews') }}?r='+Math.random();" alt="">
              </div>
              <div class="col-sm-12">
                <input type="submit" id="submitBtn_m" class="btn btn-default" value="Send">
              </div>
            </form>
          </div>
        </div>
        <div class="visible-xs">
          <ul class="nav nav-pills nav-justified" role="tablist">
            <li role="presentation" @if(count($errors) == 0) class="active" @endif><a href="#basic" aria-controls="basic" role="tab" data-toggle="tab">Contact</a></li>
            <li role="presentation" @if(count($errors) > 0) class="active" @endif><a href="#booking" aria-controls="booking" role="tab" data-toggle="tab">Booking</a></li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane @if(count($errors) == 0) active fade in @else fade @endif " id="basic">
              <div class="col-sm-6 col-xs-12" align="center" style="background-color:#F8F1E9">
                <div class="col-xs-12">
                  <h4 id="content"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>Tel. 2755517.</h4>
                  <h4 id="content"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>Mob. 02040360833, 0284078617.</h4>
                  <h4 id="content">
                    <a href="mailto:naturalhealthplus@yahoo.co.nz">
                      <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                       Email: naturalhealthplus@yahoo.co.nz
                    </a>
                  </h4>
                </div>
                <div class="col-xs-12">
                  <h4 id="content"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                    32/203 Kirkbride Road.
                    Airport Oaks.
                    Auckland
                  </h4>
                  <iframe width="300" height="150" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:EjgzMi8yMDMgS2lya2JyaWRlIFJkLCBNYW5nZXJlLCBBdWNrbGFuZCAyMDIyLCBOZXcgWmVhbGFuZA&key=AIzaSyAFpllDDTKOIMHw7vJrebtQKbPifQ5pAxY" allowfullscreen></iframe>
                </div>
                <div class="col-xs-12">
                  <h4 id="content">We accept the following payment methods:</h4>
                  <div class="col-xs-4">
                    <div class="col-xs-12">
                      <a href="#" class="thumbnail">
                        <img src="{{url('img/paypal.png')}}" alt="...">
                      </a>
                      <h5>PayPal</h5>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="col-xs-12">
                      <a href="#" class="thumbnail">
                        <img src="{{url('img/cash.png')}}" alt="...">
                      </a>
                      <h5>Cash</h5>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="col-xs-12">
                      <a href="#" class="thumbnail">
                        <img src="{{url('img/no-cc.png')}}" alt="...">
                      </a>
                      <h5>No Credit Card</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane @if(count($errors) > 0) active fade in @else fade @endif" id="booking">
              <div class="col-xs-12">
                <h4 id="title">Please fill in the form below and we will be in touch with you as soon as possible.</h4>
                @if(count($errors) > 0)
                  <div class="alert alert-danger">
                      <ul>
                          @foreach($errors->all() as $error)
                          <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                @endif
                <form action="{{ url('/booking') }}" method="post">
                  {!! csrf_field() !!}
                  <div class="col-sm-12">
                    <label for="">Name :</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                    <label for="">Email :</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                  </div>
                  <div class="col-sm-12">
                    <label for="">Message :</label>
                    <textarea class="form-control" name="symptoms" rows="8" cols="40" required>{{ old('symptoms') }}</textarea>
                    <input type="text" name="cpt" value="" required/>
                    <img src="{{ url('/mews') }}" onclick="this.src='{{ url('/mews') }}?r='+Math.random();" alt="">
                  </div>
                  <div class="col-sm-12">
                    <input type="submit" id="submitBtn_m" class="btn btn-default" value="Send">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
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
</body>
</html>
