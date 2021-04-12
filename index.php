
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
    <?php include 'connexion.php' ?>
    <?php include 'session.php' ?>

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

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-img3-body">
  <header class="header dark-bg">
      <!--logo start-->
      <a href="index.php" class="logo">WEB<span class="lite">DOCTOR</span></a>
      <!--logo end-->
</header>
<br><br>

    <div class="container">





    <?php
        // Récupérer le contenu du formulaire 
        if (!empty($_POST)) {
            $name = $_POST['name'];
            $mail = $_POST['name'];
            $pass = $_POST['pass'];
            
            // On essaie de connecter l'utilisateur  
            // On vérifie si le login/email avec le mot de passe existe ou non dans la table users
            //On prépare la requête
            $sql = "SELECT * FROM Doctor WHERE user_name = ? OR user_email = ?"; 
            $req = $con->prepare($sql);
            // Envoyer la requête au serveur et récupérer le résultat
            $req->execute([$name, $mail]);
    
            //On récupère le résultat
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
    
            // On vérifie son mot de passe saisie avec celui enregistré dans la BD
           if (password_verify($pass, $ligne['user_pass']))  {   // Si le mot de passe est correct 
                // alors on lui crée une session 
                $_SESSION['iduser'] = $ligne['user_id'];
                $_SESSION['name'] =$ligne['user_name'];
                $_SESSION['last']=$ligne['user_last_name'];
                $_SESSION['Date']=$ligne['user_date_naiss'];
                $_SESSION['spec']=$ligne['user_special'];
                $_SESSION['mail']=$ligne['user_email'];
                $_SESSION['tel']=$ligne['user_tel'];
                $_SESSION['image']=$ligne['img'];
                // puis on le redérige vers la page d'acceuil du site
                header('Location:home.php');
            } else {
                //Si les informations sont erronées
                // on crée la variable $error qui sera affichée en bas
                $error = "informations erronées !";
            }
        }
    ?>
  

      <form class="login-form" method="post" action="<?= $_SERVER['PHP_SELF'] ?>">        
        <div class="login-wrap">
        <div id="error">
        <?php
			//Si la variable $error existe on l'affiche
			if(isset($error))
			{
				?>
                <div class="alert alert-danger">
                 <i class="fas fa-exclamation-triangle"></i> <?php echo $error; ?> !
                </div>
                <?php
			}
		?>
        </div>
            <p class="login-img"><i class="icon_lock_alt"></i></p>

            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" name="name"placeholder="Username" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" name="pass" placeholder="Password">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
            
            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
           
            <button class="btn btn-info btn-lg btn-block" type="submit"><a href="Add_Doctor.php">Signup</a></button>
  
        </div>
      </form>
   
    </div>
<br><br><br><br><br><br><br>
    <div class="bg">
    <section class="testimonials text-center bg-light">
      <div class="container">
        <h2 style="font-weight: bold; color: black; text-shadow: 2px 2px red;">What People Are Saying...</h2> <br><br>
        <div class="row">
          <div class="col-lg-4">
            
            <div >
              <img  class="img-thumbnail"  src="img/doc3.jpg" alt="">
              <h5 style="color: rgb(92, 27, 27); font-weight: bold;text-shadow: 1px 1px red;">Rawdha Chkir</h5>
              <p  style="color: black;">This is fantastic! Thanks so much guys! It makes the work easier.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div>
              <img  class="img-thumbnail" src="img/doc.jpg" alt="">
              <h5 style="color: rgb(92, 27, 27); font-weight: bold;text-shadow: 1px 1px red;">Slimen Labyedh</h5>
              <p style="color: black; ">WebDoctor is amazing. I've been using it to order my all work. It realy helps.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div >
              <img  class="img-thumbnail" src="img/avatar1.jpg" alt="">
              <h5 style="color: rgb(92, 27, 27); font-weight: bold;text-shadow: 1px 1px red;">Ilhem Chakroun</h5>
              <p style="color: black;" >Thanks so much for making these resources available to us! it's simple to use</p>
            </div>
          </div>
        </div>
      </div><br><br><br>
    </div>
  </body>
  <br><br><br><br><br><br>
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
            <li><a href="inscrire.php">Sign-in</a></li>
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
</html>
