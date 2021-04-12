<?php
  //Si l'utilisateur n'est pas connecté on le redirige vers la page de connexion
  //Il suffit de tester si la variable session $_SESSION['user_session'] existe ou non
  
  if(!isset( $_SESSION['iduser'])) { 
    // s'il n'existe pas dans la variable session 
    // on le redérige vers la page de connexion
    header('Location:index.php');
  }

	// On déconnecte l'utilisateur => Destruction de la session
    session_destroy();
    unset( $_SESSION['iduser']);
    unset( $_SESSION['name']);
    unset($_SESSION['user_pass']);
	//Puis on le redirige vers la page de connexion
	header('Location:index.php');
?>