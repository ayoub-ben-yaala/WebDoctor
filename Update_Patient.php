<?php
session_start();
	
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
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
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link href="css/xcharts.min.css" rel=" stylesheet">	
	<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  
</head>
<body>

<?php include 'navbar.php' ?>

<?php include 'connexion.php' ?>
 

    <div class="container" style="width:900px;">
        <br>
        <?php
    
   $id=$_SESSION['id'];
   
    if (!empty($_POST)){
   // Récupérer
  
    // Récupérer les informations du client à modifier à partir du formulaire
    $nom        = $_POST['nom'];
    $prenom     = $_POST['prenom'];
    $dateN      = $_POST['dateN'];
    $adresse    = $_POST['adresse'];
    $tel        = $_POST['tel'];
    $maladie        =$_POST['maladie'];
    $cause_visite   =$_POST['cause_visite'];


    // Préparer la requête de modification
    $sql = "UPDATE patient SET nom = ?, prenom = ?, datenaissance = ?, adresse = ?, tel = ?, maladie_chronique = ?, cause_visite = ? WHERE id= ?";
    $req = $con->prepare($sql);
    $req->execute([$nom, $prenom, $dateN, $adresse, $tel, $maladie, $cause_visite, $id]);

    // if (!$req) 
    // {
    //     session_start();
    //     $_SESSION['errors'] = "Suppression non effectuée";
    // }

    
    }
        ?>
        <hr>
        <fieldset>
                <legend><h2>Update Patient</h2></legend>
            <hr>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="nom">Nom</label>
                    <div class="col-sm-7">
                        <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom du patient">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="prenom">Prénom</label>
                    <div class="col-sm-7">
                        <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Prénom du patient">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="dateN">Date de naissance</label>
                    <div class="col-sm-7">
                        <input type="date" name="dateN" class="form-control" id="dateN" placeholder="Date de naissance">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="adresse">Adresse</label>
                    <div class="col-sm-7">
                        <input type="text" name="adresse" class="form-control" id="adresse" placeholder="Adresse">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="tel">Téléphone</label>
                    <div class="col-sm-7">
                        <input type="tel" name="tel" class="form-control" id="tel" placeholder="Numéro de téléphone">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="tel">Maladie chronique</label>
                    <div class="col-sm-7">
                        <input type="text" name="maladie" class="form-control" id="maladie" placeholder="maladie chronique">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="tel">Cause de visite</label>
                    <div class="col-sm-7">
                        <input type="text" name="cause_visite" class="form-control" id="cause" placeholder="cause de visite">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" required>
                            <label class="form-check-label">confirmer</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <a href="patient.php">

                        <button type="submit" name="btValider" class="btn btn-info">Valider</button>
                   </a>
                    </div>
                </div>
            </form>
        </fieldset>
    </div>


    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>