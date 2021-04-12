
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
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
    
    <?php include 'connexion.php' ?>
    <?php include 'session.php' ?>
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
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"> <i class="fas fa-calendar-check"></i>Appointment</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="home.php">Home</a></li>
						
					</ol>
				</div>
			</div>
            
            <div class="row">
            <a href="AddAppointment.php">
                <button class="btn btn-info"style="margin-left:30px;"><i class="fas fa-calendar-plus"></i> Add Appointment</button>
            </a>
        </div>
                      <form class="navbar-form"style="margin-left:800px;">
                           <input class="form-control" id="Search" name="Search"placeholder="Search" type="search">
                       </form>

        <br>
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          
                          
                          <table class="table table-striped table-advance table-hover">
<thead>
                              <tr>
                                 <th><i class="icon_profile"></i> Nom Patient</th>
                                 <th><i class="icon_profile"></i> Prenom Patient</th>
                                 <th><i class="icon_mail_alt"></i> Age Patient</th>
                                 <th><i class="icon_mobile"></i>Telephone Patient</th>
                                 <th><i class="fas fa-virus"></i> Maladie chronique</th>
                                 <th><i class="fas fa-hand-holding-medical"></i> Cause visite</th>
                                 <th><i class="icon_calendar"></i> Date Appointment</th>
                                 <th><i class="far fa-clock"></i>Time Appointment</th>
                                 <th><i class="icon_calendar"></i> Date control</th>

                                 <th><i class="icon_cogs"></i>  Action  </th>
                              </tr>
</thead>
                              <?php
                                $id=$_SESSION['iduser'];
                              $sql = "SELECT * FROM appointment where 	user_id=$id order by time_appointment "; 
            $req = $con->prepare($sql);
            // Envoyer la requête au serveur et récupérer le résultat
            $req->execute();?>
    <tbody id="zone">
    <?php
            //On récupère le résultat
          while($ligne = $req->fetch()){
    
          echo'   <tr>';
          echo'                  <td>'. $ligne['Nom_Pat'] .'</td>';
          echo'                  <td>' . $ligne['Prenom_Pat'] .'</td>';
          echo'                  <td>' . $ligne['Age_Pat'] .'</td>';
          echo'                  <td>' . $ligne['NumTel_Pat'] .'</td>';
          echo'                  <td>' . $ligne['Maladies_Chroniques'] .'</td>';
          echo'                  <td>' . $ligne['Cause_Visite'] .'</td>';
          echo'                  <td>' . $ligne['Date_rendez_vous'] .'</td>';
          echo'                  <td>' . $ligne['time_appointment'] .'</td>';
          echo'                  <td>' . $ligne['date_controle'] .'</td>';


          $_SESSION['IdFiche_Pat']=$ligne['IdFiche_Pat'];

          echo'<td>
          <div class="btn-group">
                 <a class="btn btn-primary" href="Update_Appointment.php?id='.$ligne['IdFiche_Pat'].'"><i class="fas fa-pen"></i></a>
                 <a class="btn btn-danger" href="delete_Appointment.php?id='.$ligne['IdFiche_Pat'].'"><i class="fas fa-trash-alt"></i></a>
             </div>
</td>';
          echo'                  </tr>';
}
  ?>
  </tbody>
                      </section>
      </section>
      
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nicescroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <script src="js/main.js"></script>


  </body>
</html>
