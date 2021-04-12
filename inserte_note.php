

<?php 
    session_start();
     include 'connexion.php' 
?>

<?php
   
   $note=$_GET['note'];  
     $id=$_SESSION['iduser'];
     $sql = "INSERT INTO note (note,user_id) VALUES (?, ?)";
     // Envoi et exécution de la requête
     $res = $con->prepare($sql);
     $res->execute([$note,$id]);




?>