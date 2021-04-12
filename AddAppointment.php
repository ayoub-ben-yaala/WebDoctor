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

    <div class="container"style="width:900px;">
        <?php
            
            // Récupérer les informations du compte à partir du formulaire
            if (!empty($_POST)) {
                $nom            = $_POST['nom'];
                $prenom         = $_POST['prenom'];
                $age          = $_POST['age'];
                $tel       = $_POST['tel'];
                $maladie        = $_POST['maladie'];
                $cause   = $_POST['cause'];
                $date           = $_POST['date'];
                $time  = $_POST['time'];
                $date_controle   = $_POST['date_controle'];
                $id=$_SESSION['iduser'];

                
                // Préparer la requête de création
                $sql = "INSERT INTO appointment (Nom_Pat,Prenom_Pat,Age_Pat,NumTel_Pat,Maladies_Chroniques,Cause_Visite,Date_rendez_vous,time_appointment,date_controle,user_id) VALUES (? , ? , ? , ? , ? , ? , ? , ? , ? , ?) ";
                // Envoi et exécution de la requête
                $res = $con->prepare($sql);
                $res->execute([$nom , $prenom , $age , $tel , $maladie , $cause , $date , $time , $date_controle , $id]);

                if ($res)
                {
                    echo'<br><br><br><br>';
                    echo '<div class="alert alert-success" role="alert">';
                        echo 'Insertion effectuée avec succès';
                    echo '</div>';
                   
                } else
                { echo'<br><br><br><br>';
                    echo '<div class="alert alert-danger" role="alert">';
                        echo 'Problème d\'insertion';
                    echo '</div>';
                }
            }
        ?>
        <hr>
        <fieldset>
                <legend><h2>New Appointment</h2></legend>
            <hr>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="nom">Nom Patient</label>
                    <div class="col-sm-7">
                        <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom du patient">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="prenom"> Prenom Patient</label>
                    <div class="col-sm-7">
                        <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Prénom du patient">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="dateN">Age Patient</label>
                    <div class="col-sm-7">
                        <input type="num" name="age" class="form-control" id="age" placeholder="Age ">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="adresse"> Telephone Patient</label>
                    <div class="col-sm-7">
                        <input type="text" name="tel" class="form-control" id="tel" placeholder="telephone">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="tel">Maladie chronique</label>
                    <div class="col-sm-7">
                        <input type="tel" name="maladie" class="form-control" id="maladie" placeholder="maladie chronique">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="tel"> Cause visite</label>
                    <div class="col-sm-7">
                        <input type="text" name="cause" class="form-control" id="cause" placeholder="cause de visite">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="tel">Date Appointment</label>
                    <div class="col-sm-7">
                        <input type="date" name="date" class="form-control" id="date" placeholder="date appointment">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="tel">Time Appointment</label>
                    <div class="col-sm-7">
                        <input type="time" name="time" class="form-control" id="time" placeholder="time appointment">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="tel"> Date control</label>
                    <div class="col-sm-7">
                        <input type="date" name="date_controle" class="form-control" id="date_controle" placeholder="date controle">
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
                    <a href="appointment.php">

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