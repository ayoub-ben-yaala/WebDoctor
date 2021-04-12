<?php
  //Si l'utilisateur n'est pas connecté on le redirige vers la page de connexion
  //Il suffit de tester si la variable session $_SESSION['user_session'] existe ou non
  
 

  // Ici ça veut dire que l'utilisateur est connecté
	//On récupère les données de l'utilisateur à partir de son id (depuis la session)
    $sql = "SELECT * FROM Doctor WHERE user_id=?";
    $reponse = $con->prepare($sql);
  

    $ligne = $reponse->fetch(PDO::FETCH_ASSOC);

?>