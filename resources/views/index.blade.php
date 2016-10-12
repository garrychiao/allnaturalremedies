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
        @if (Auth::guest())
        <ul class="nav navbar-nav navbar-left">
          <li><a href="{{ url('/login') }}">Login</a></li>
          <li><a href="{{ url('/register') }}">Register</a></li>
        </ul>
        @else
        <ul class="nav navbar-nav navbar-left">
          <li><a href="{{ url('/home') }}">Hello {{Auth::user()->name}} !</a></li>
        </ul>
        @endif
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
                    <div class="col-sm-12">
                      Therapists infos here.
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
            <form class="" action="index.html" method="post">
              <div class="col-xs-6">
                <label for="">Name :</label>
                <input type="text" class="form-control" name="name" value="" required>
                <label for="">Phone Number :</label>
                <input type="text" class="form-control" name="name" value="" required>
                <label for="">Email :</label>
                <input type="text" class="form-control" name="name" value="">
              </div>
              <div class="col-xs-6">
                <label for="">Therapist :</label>
                <select class="form-control" name="" required>
                  <option>first</option>
                </select>
                <label for="">Date :</label>
                <input type="date" class="form-control" name="name" value="">
                <label for="">Time :</label>
                <select class="form-control" name="" required>
                  <option>first</option>
                </select>
              </div>
              <div class="col-xs-12">
                <label for="">Main Symptoms :</label>
                <textarea name="name" class="form-control" rows="8" cols="40" required></textarea>
                <input type="submit" class="btn btn-default" value="Submit">
              </div>
            </form>
          </div>
          <div class="col-sm-6 hidden-xs">
            <h2 id="title">Book Your Appointments</h2>
            <form class="" action="index.html" method="post">
              <div class="col-sm-6">
                <label for="">Name :</label>
                <input type="text" class="form-control" name="name" value="" required>
                <label for="">Phone Number :</label>
                <input type="text" class="form-control" name="name" value="" required>
                <label for="">Email :</label>
                <input type="text" class="form-control" name="name" value="">
              </div>
              <div class="col-sm-6">
                <label for="">Therapist :</label>
                <select class="form-control" name="" required>
                  <option>first</option>
                </select>
                <label for="">Date :</label>
                <input type="date" class="form-control" name="name" value="">
                <label for="">Time :</label>
                <select class="form-control" name="" required>
                  <option>first</option>
                </select>
              </div>
              <div class="col-sm-12">
                <label for="">Main Symptoms :</label>
                <textarea name="name" class="form-control" rows="8" cols="40" required></textarea>
                <input type="submit" class="btn btn-default" value="Submit">
              </div>
            </form>
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
