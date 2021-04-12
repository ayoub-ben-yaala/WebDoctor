<?php
    
    if (!empty($_POST)){
   // Récupérer
   
    $id=43;
    
    // Récupérer les informations du client à modifier à partir du formulaire
    $nom        = test_input($_POST['nom']);
    $prenom     = test_input($_POST['prenom']);
    $dateN      = test_input($_POST['dateN']);
    $adresse    = test_input($_POST['adresse']);
    $tel        = test_input($_POST['tel']);
    $maladie        =test_input($_POST['maladie']);
    $cause_visite   =test_input($_POST['cause_visite']);


    // Préparer la requête de modification
    $sql = "UPDATE patient SET nom = ?, prenom = ?, datenaissance = ?, adresse = ?, tel = ?, maladie_chronique = ?, cause_visite = ? WHERE id= ?";
    $req = $con->prepare($sql);
    $req->execute([$nom, $prenom, $dateN, $adresse, $tel, $maladie, $cause_visite, $id]);

     if (!$req) 
     {
        session_start();
         $_SESSION['errors'] = "Suppression non effectuée";
     }
    
    
    header('location:patient.php');
    }
        ?>
    