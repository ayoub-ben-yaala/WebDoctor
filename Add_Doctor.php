
<?php
session_start();
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="icon" href="favicon.png" type="image/png">
    <title>WebDoctor </title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
</head>
  <body >
    <header class="header dark-bg">
      <!--logo start-->
      <a href="index.php" class="logo">WEB<span class="lite">DOCTOR</span></a>
      <!--logo end-->
</header>

<?php include 'connexion.php' ?>
    <?php include 'utilities.php' ?>
    <?php
        // Récupérer le contenu du formulaire d'inscription
        if (!empty($_POST)) {
            //récupération des informations du formulaire
            // la fonctio  trim() permet de supprimer les espaces avant et après un texte
            $name = test_input($_POST['name']);
            $last_name = test_input($_POST['last_name']);
            $date = test_input($_POST['date']);
            $tel = test_input($_POST['tel']);
            $mail = test_input($_POST['mail']);
            $pass = test_input($_POST['pass']);
            $spec = test_input($_POST['spec']); 
            $img = test_input($_POST['img']);
            //Remplissage des messages d'erreurs dans un tableau
            if($name=="") {
                $errors[] = "Vous devez saisir un nom d'utilisateur!"; 
            } else if ($mail=="") {
                $errors[] = "Vous devez saisir un email"; 
            } else if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                $errors[] = 'Vous devez saisir un email valide';
            } else if($pass=="") {
                $errors[] = "Vous devez saisir un mot de passe";
            } else if(strlen($pass) < 6) {
                $errors[] = "Le mot de passe doit avoir au moins 6 caractères"; 
            } else {
                // Il n'y a pas d'erreurs
                // ON recherche si l'utilisateur existe déjà dans la base
                // La recherche se fait par username ou email
                // Requête SQL
                $sql = "SELECT * FROM doctor WHERE user_name = ? OR user_email = ?";
                $req = $con->prepare($sql);
                // Envoyer la requête au serveur et récupérer le résultat
                // le résultat peut être null si la requête est erronée
                $req->execute([$name, $mail]);

                //On récupère le résultat
                $ligne = $req->fetch(PDO::FETCH_ASSOC);

                //Si l'utilisateur existe on prépare les messages d'erreurs 
                if($ligne['user_email'] == $mail) {
                    $errors[] = "Désolé, l'email existe déjà";
                } else {
                    //si l'utilisateur n'existe pas alors on l'enregistre dans la BD
                    // Hashage du mot de passe
                    $new_password = password_hash($pass, PASSWORD_DEFAULT);

                    // On prépare la requête
                    $sql = "INSERT INTO doctor (user_name,user_last_name,user_date_naiss,user_tel,user_email,user_pass,user_special,img) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?)";
                    $req = $con->prepare($sql);
                    // Envoi et exécution de la requête
                    // $res = $con->exec($sql);
                    $res = $req->execute([$name,$last_name,$date,$tel,$mail, $new_password,$spec,$img]);
                    
                    // Si l'insertion est effectuée avec succès
                    // On redérige l'utilisateur vers la page de login (connexion)
                    if ($res)
                    {
                        header('Location:index.php');
                    }
                }
            }
        }
    ?>
<div class="login-img2-body" >
  <div class="container"  >

    <form class="login-form"  action="<?= $_SERVER['PHP_SELF'] ?>" method="post" >        
      <div class="login-wrap">
       
       
       
        <p class="login-img"><i class="fa fa-users" aria-hidden="true"></i>
    
    
    
        </p>
    
        <div class="input-group">
            <span class="input-group-addon"><i class="icon_profile"></i></span>
            <input type="text" class="form-control" name="name"placeholder="nom" autofocus>
          </div>
    
          <div class="input-group">
            <span class="input-group-addon"><i class="icon_profile"></i></span>
            <input type="text" class="form-control"name="last_name" placeholder="prenom" autofocus>
          </div>
    
          <div class="input-group">
            <span class="input-group-addon"><i class="icon_calendar"></i></span>
            <input type="date" class="form-control" name="date"placeholder="date_naiss" autofocus>
          </div>
    
          
    
    
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-phone-square" aria-hidden="true"></i></span>
            <input type="number" class="form-control" name="tel"placeholder="telephone" autofocus>
          </div>
    
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i>
            </span>
            <input type="mail" class="form-control" name="mail"placeholder="mail" autofocus>
          </div>
    
        <div class="input-group">
            <span class="input-group-addon"><i class="icon_key_alt"></i></span>
            <input type="password" class="form-control" name="pass"placeholder="mot de passe">
        </div>
    
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user-md" aria-hidden="true"></i></span>
          <input type="text" class="form-control" name="spec"placeholder="specialité">
      </div>
      <p style="color:black;">upload photo</p>
      <div class="input-group">
      <input type="file"  name="img">
        </div>
    
        <button class="btn btn-info btn-lg btn-block" type="submit"><a href="index.php"></a>Create An Account   <i class="fa fa-spinner" aria-hidden="true"></i>
        </button>
    
    
      </div>
    </form>
    
    </div>
    <br><br><br>


  </body>
 
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
            <li><a href="Add_Doctor.php">Sign-in</a></li>
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
</html>
