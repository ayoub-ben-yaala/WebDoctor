
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
					<h3 class="page-header"><i class="fas fa-user-injured"></i>Mes Patient</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="home.php">Home</a></li>
						
					</ol>
				</div>
			</div>
            
            <div class="row" >
            <a href="ajouterPatient.php">
                <button class="btn btn-info"style="margin-left:30px;"><i class="fas fa-user"></i> Add Patient</button>
            
              </a>
        </div>
          <br>
        <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i> Nom</th>
                                 <th><i class="icon_profile"></i> Prenom</th>
                                 <th><i class="icon_calendar"></i> Date naissance</th>
                                 <th><i class="icon_pin_alt"></i> Adresse</th>
                                 <th><i class="icon_mobile"></i> Telephone</th>
                                 <th><i class="fas fa-virus"></i> Maladie chronique</th>
                                 <th><i class="fas fa-hand-holding-medical"></i> Cause visite</th>

                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>

                              <?php
                                $id=$_SESSION['iduser'];
                              $sql = "SELECT * FROM patient where 	user_id=$id order by nom "; 
            $req = $con->prepare($sql);
            // Envoyer la requête au serveur et récupérer le résultat
            $req->execute();
    
            //On récupère le résultat
          while(  $ligne = $req->fetch()){
    
          echo'   <tr>';
          echo'                  <td>'. $ligne['nom'] .'</td>';
          echo'                  <td>' . $ligne['prenom'] .'</td>';
          echo'                  <td>' . $ligne['datenaissance'] .'</td>';
          echo'                  <td>' . $ligne['adresse'] .'</td>';
          echo'                  <td>' . $ligne['tel'] .'</td>';
          echo'                  <td>' . $ligne['maladie_chronique'] .'</td>';
          echo'                  <td>' . $ligne['cause_visite'] .'</td>';
          
          $_SESSION['id']=$ligne['id'];
          echo'<td>
          <div class="btn-group">
                 <a class="btn btn-primary" href="Update_Patient.php?id='.$ligne['id'].'"><i class="fas fa-pen"></i></a>
                 
                 <a class="btn btn-danger" href="delete_Patient.php?id='.$ligne['id'].'"><i class="fas fa-trash-alt"></i></a>
             </div>
</td>';
          echo'                  </tr>';
}
  ?>
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


  </body>
</html>
