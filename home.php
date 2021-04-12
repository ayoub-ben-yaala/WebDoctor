
<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="icon" href="favicon.png" type="image/png">
    <title>WebDoctor</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />   
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
	<link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="css/fullcalendar.css">
	<link href="css/widgets.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link href="css/xcharts.min.css" rel=" stylesheet">	
	<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- =======================================================
                        Theme Name: WebDoctor
         ======================================================= -->
  </head>

  <body> 
<?php include 'navbar.php' ?>
  <!-- container section start -->
      <!--sidebar end-->
       <!--main content start-->
       <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
              <div class="row">
                <div class="col-lg-12">
                  <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="home.php">Home</a></li>
                    						  	
                  </ol>
                </div>
                    </div>
              <section class="panel">
                <div id="c-slide" class="carousel slide auto panel-body">
                    <ol class="carousel-indicators out">
                        <li class="active" data-slide-to="0" data-target="#c-slide"></li>
                        <li class="" data-slide-to="1" data-target="#c-slide"></li>
                        <li class="" data-slide-to="2" data-target="#c-slide"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item text-center active">
                          <div id="banner" class="banner">
                            <div class="bg-color">
                        <div class="container">
                            <div class="row">
                              <div class="banner-info">
                                <div class="banner-logo text-center">
                                    <a href="home.php" style=" font-size: 40px;font-weight: 300;color: #fed189;">WEB<span class="lite">DOCTOR</span></a>
                                </div>
                                <div class="banner-text text-center">
                                  <h1 class="white">Work at your desk!!</h1>
                                  <p>You Can Add An Appointment Now.<br>Very Easy To Use.</p>
                                  <a href="AddAppointment.php" class="btn btn-appoint">A Quick Appointment.</a>
                                </div>
                                <div class="overlay-detail text-center">
                                  <a href="#service"><i class="fa fa-angle-down"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                        </div>
                        <div class="item text-center">
                          <div id="banner2" class="banner">
                            <div class="bg-color">
                        <div class="container">
                            <div class="row">
                              <div class="banner-info">
                                <div class="banner-logo text-center">
                                    <a href="home.php" style=" font-size: 40px;font-weight: 300;color: #fed189;">WEB<span class="lite">DOCTOR</span></a>
                                </div>
                                <div class="banner-text text-center">
                                  <h1 class="white">Lose Your secretary!!</h1>
                                  <p>You Can Add a Patient Now.<br>Very Easy To Use.</p>
                                  <a href="ajouterPatient.php" class="btn btn-appoint">Add a new patient.</a>
                                </div>
                                <div class="overlay-detail text-center">
                                  <a href="#service"><i class="fa fa-angle-down"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                        </div>
                        <div class="item text-center">
                          <div id="banner3" class="banner">
                            <div class="bg-color">
                        <div class="container">
                            <div class="row">
                              <div class="banner-info">
                                <div class="banner-logo text-center">
                                    <a href="home.php" style=" font-size: 40px;font-weight: 300;color: #fed189;">WEB<span class="lite">DOCTOR</span></a>
                                </div>
                                <div class="banner-text text-center">
                                  <h1 class="white">WEBDOCTOR is the BEST!!</h1>
                                  <p>You Can Stock All Your Work Informations Here.<br>Very Easy To Use.</p>
                                  <a href="patient.php" class="btn btn-appoint">See Patient List.</a>
                                </div>
                                <div class="overlay-detail text-center">
                                  <a href="#service"><i class="fa fa-angle-down"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                        </div>
                    </div>
                    <a data-slide="prev" href="#c-slide" class="left carousel-control">
                        <i class="arrow_carrot-left_alt2"></i>
                    </a>
                    <a data-slide="next" href="#c-slide" class="right carousel-control">
                        <i class="arrow_carrot-right_alt2"></i>
                    </a>
                </div>
            </section>
             <!--service-->
  <section id="service" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4" style="color: black;">
          <h2 class="ser-title">Our Service</h2>
          <hr class="botm-line">
          <p class="text-justify">WEBDOCTOR is a website used to stock all the informations as a doctor, patient informations, appointment etc.. </p>
        </div>
        <div class="col-md-4 col-sm-4"style="color: black;">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-stethoscope"></i>
            </div>
            <div class="icon-info">
              <h4>24 Hour Support</h4>
              <p>You can check your work informations as a doctor anytime in the 24 hours, Just open WEBDOCTOR.</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-ambulance"></i>
            </div>
            <div class="icon-info">
              <h4>Emergency Services</h4>
              <p>The website can help you by stocking your emergency cases, it can also Remember you.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4"style="color: black;">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-user-md"></i>
            </div>
            <div class="icon-info">
              <h4>Medical Counseling</h4>
<p>You can check your notations about any patient any time,you can also update it anytime.</p>            
</div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-medkit"></i>
            </div>
            <div class="icon-info">
              <h4>Premium Healthcare</h4>
              <p >WEBDOCTOR is a trasted place where you can stock your patients informations without any risk. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ service-->
  <section id="cta-1" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="schedule-tab">
          <div class="col-md-4 col-sm-4 bor-left">
            <div class="mt-boxy-color"></div>
            <div class="medi-info">
              <h3>Add A Patient</h3>
              <p>You Can Add a Patient Now.<br>Very Easy To Use.</p>
              <a href="#" class="medi-info-btn">Add</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="medi-info">
              <h3>Add an Appointment</h3>
              <p>You Can Add An Appointment Now.<br>Very Easy To Use.</p>
              <a href="#" class="medi-info-btn">Add</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 mt-boxy-3">
            <div class="mt-boxy-color"></div>
            <div class="time-info">
              <h3>Check Your Patients</h3>
              <p>You can check your work informations as a doctor anytime in the 24 hours.</p>
              <a href="#" class="medi-info-btn">Check</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
      </section>
      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h6>About</h6>
              <p class="text-justify">WebDoctor is a website used to stock all the informations as a doctor, patient informations, appointment etc.. </p>
            </div>
    
            <div class="col-xs-6 col-md-3">
              <h6>Categories</h6>
              <ul class="footer-links">
                <li>Doctor</li>
                <li>secretary</li>
              </ul>
            </div>
            <div class="col-xs-6 col-md-3">
              <h6>Quick Links</h6>
              <ul class="footer-links">
                <li><a href="index.php">Login</a></li>
                <li><a href="CreateDoctor.php">Sign-up</a></li>
              </ul>
            </div>
          </div>
          <hr>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <p class="copyright-text">Time to lose your secretary.          </p>
            </div>
    
            <div class="col-md-4 col-sm-6 col-xs-12">
              <ul class="social-icons">
                <li><a class="facebook" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                <li><a class="twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                <li><a class="dribbble" href="http://dribbble.com/"><i class="fa fa-dribbble"></i></a></li>
                <li><a class="linkedin" href="http://linkedin.com/"><i class="fa fa-linkedin"></i></a></li>   
              </ul>
            </div>
          </div>
        </div>
    </footer>
    </section>
  </section>

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
	<script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
	<script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
	<script src="assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
	<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="js/xcharts.min.js"></script>
	<script src="js/jquery.autosize.min.js"></script>
	<script src="js/jquery.placeholder.min.js"></script>
	<script src="js/gdp-data.js"></script>	
	<script src="js/morris.min.js"></script>
	<script src="js/sparklines.js"></script>	
	<script src="js/charts.js"></script>
	<script src="js/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});

  </script>

  </body>
</html>
