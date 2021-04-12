<?php

include "connexion.php";
$id=$_GET['id'];
$sql = "DELETE FROM patient WHERE id = ?";
    $req = $con->prepare($sql);
    $req->execute([$id]);

    header('location:patient.php');
?>