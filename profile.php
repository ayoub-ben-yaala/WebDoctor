

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
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
    <?php include 'navbar.php' ?>
    <br><br><br>
    
              <div class="row">
                <!-- profile-widget -->
                <div class="col-lg-12"style="width:1400px; margin-left:200px;">
                    <div class="profile-widget profile-widget-info">
                          <div class="panel-body">
                            <div class="col-lg-2 col-sm-2">
                              <h4><?= $_SESSION['name']?></h4>               
                              <div class="follow-ava">
                                  <img src="img/<?= $_SESSION['image']?>" alt="test">
                              </div>
                              <h6>Administrator</h6>
                            </div>
                            <div class="col-lg-4 col-sm-4 follow-info">
                                <p> I’m  <?= $_SESSION['name']?> , a <?=$_SESSION['spec'] ?> doctor.</p>
								<p><a href="https://twitter.com"><i class="fa fa-twitter"><?= $_SESSION['name']?></i></a></p>
                                <h6>
                                    <span><i class="icon_clock_alt"></i>12:26</span>
                                    <span><i class="icon_calendar"></i>12/01/2021</span>
                                    <span><i class="icon_pin_alt"></i>Tunis</span>
                                </h6>
                            </div>
                          </div>
                    </div>
                </div>
              </div>
              <!-- page start-->
              <div class="row"style="width:1400px; margin-left:185px;">
                 <div class="col-lg-12">
                    <section class="panel">
                          <header class="panel-heading tab-bg-info">
                              <ul class="nav nav-tabs">
                                  <li>
                                      <a data-toggle="tab" href="#profile">
                                          <i class="icon-user"></i>
                                          Profile
                                      </a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#edit-profile">
                                          <i class="icon-envelope"></i>
                                          Edit Profile
                                      </a>
                                  </li>
                              </ul>
                          </header>
                          <div class="panel-body">
                              <div class="tab-content">
                                
                                  <!-- profile -->
                                  <div id="profile" class="tab-pane">
                                    <section class="panel">
                                      <div class="bio-graph-heading">
                                                Hello I’m <?= $_SESSION['name']?>, a  specializing in medical domain. My graduation from Massey University with a Bachelor of science .
                                      </div>
                                      <div class="panel-body bio-graph-info">
                                          <h1>Bio Graph</h1>
                                          <div class="row">
                                              <div class="bio-row">
                                                  <p><span>First Name </span>: <?= $_SESSION['name']?> </p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Last Name </span>: <?= $_SESSION['last']?></p>
                                              </div>                                              
                                              <div class="bio-row">
                                                  <p><span>Birth date</span>: <?= $_SESSION['Date']?></p>
                                              </div>
                                             
                                              <div class="bio-row">
                                                  <p><span>Occupation </span>: <?= $_SESSION['spec']?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Email </span>:<?= $_SESSION['mail']?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Mobile </span>: (+216) <?= $_SESSION['tel']?></p>
                                              </div>
                                                                                       </div>
                                      </div>
                                    </section>
                                      <section>
                                          <div class="row">                                              
                                          </div>
                                      </section>
                                  </div>
                                  <!-- edit-profile -->   
 
    <?php include 'connexion.php' ?>
        <?php include 'utilities.php' ?>
        <?php include 'session.php' ?>
        <?php



   $id=$_SESSION['iduser'];
   
   if (!empty($_POST)){
  // Récupérer
 
   // Récupérer les informations du client à modifier à partir du formulaire
   $name   = $_POST['name'];
   $last_name = $_POST['last_name'];
   $date  = $_POST['date'];
   $mail   = $_POST['mail'];
   $tel   = $_POST['tel'];
   $pass   = $_POST['pass'];
   $spec   = $_POST['spec'];
   $img   = $_POST['img'];

   


   // Préparer la requête de modification
   $sql = "UPDATE doctor SET user_name =?,user_last_name =?,user_date_naiss =?,user_tel =?,user_email =?,user_pass =?,user_special =?,img =? WHERE user_id =?";
   $req = $con->prepare($sql);
   $req->execute([$name ,$last_name,$date,$mail,$tel,$pass,$spec,$img,$id]);
  
   $_SESSION['name']=$name;
   $_SESSION['last_name']=$last_name;
   $_SESSION['date']=$date;
   $_SESSION['mail']=$mail;
   $_SESSION['tel']=$tel;
   $_SESSION['spec']=$spec;
   $_SESSION['img']=$img;
   
   
   }
       ?>
   
                                  <div id="edit-profile" class="tab-pane">
                                    <section class="panel">                                          
                                          <div class="panel-body bio-graph-info">
                                              <h1> Profile Info</h1>
                                              <form class="form-horizontal" role="form"action="<?= $_SERVER['PHP_SELF'] ?>" method="post">                                                  
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">First Name</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" name="name" id="f-name" placeholder=" ">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Last Name</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control"name="last_name" id="l-name" placeholder=" ">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Date naissance</label>
                                                      <div class="col-lg-6">
                                                          <input type="date" class="form-control" name="date" id="b-day" placeholder=" ">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Email</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" name="mail" id="email" placeholder=" ">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Mobile</label>
                                                      <div class="col-lg-6">
                                                          <input type="tel" class="form-control" name="tel"id="mobile" placeholder=" ">
                                                      </div></div>
                                                      
                                                      <div class="form-group">
                                                      <label class="col-lg-2 control-label">New password</label>

                                                      <div class="col-lg-6">
                                                          <input type="password" class="form-control" name="pass">
                                                      </div>
                                                      </div>

                                                      <div class="form-group">
                                                      <label class="col-lg-2 control-label">speciality</label>

                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" name="spec">
                                                      </div>
                                                      </div>

                                                      <div class="form-group">
                                                      <label class="col-lg-2 control-label">upload photo</label>

                                                      <div class="col-lg-6">
                                                          <input type="file"name="img">
                                                      </div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-10">
                                                      <a href="index.php">
                                                          <button type="submit" class="btn btn-primary">Save</button>
                                                          </a>
                                                          <button type="reset" class="btn btn-danger">Cancel</button>
                                                      </div>
                                                  </div>
                                              </form>
                                          </div>
                                      </section>
                                  </div>
                              </div>
                          </div>
                      </section>
                 </div>

              <!-- page end-->
          </section>
      
   
  <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery knob -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>

  <script>

      //knob
      $(".knob").knob();

  </script>


  </body>
</html>
