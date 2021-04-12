<?php

include "connexion.php";
$id=$_GET['id'];
$sql = "DELETE FROM appointment WHERE IdFiche_Pat = ?";
    $req = $con->prepare($sql);
    $req->execute([$id]);

    header('location:appointment.php');
?>