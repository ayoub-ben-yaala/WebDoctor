<?php
    include 'connexion.php';
    
    $ch = $_GET['search'];
    $sql = "SELECT * FROM appointment 
            WHERE Nom_Pat LIKE '%$ch%'
            OR Prenom_Pat LIKE '%$ch%'";

    $reponse = $con->query($sql);
    $Users=$reponse->fetchAll();
    foreach($Users as $ligne){
          
        echo'   <tr>';
        echo'                  <td>'. $ligne['Nom_Pat'] .'</td>';
        echo'                  <td>' . $ligne['Prenom_Pat'] .'</td>';
        echo'                  <td>' . $ligne['Age_Pat'] .'</td>';
        echo'                  <td>' . $ligne['NumTel_Pat'] .'</td>';
        echo'                  <td>' . $ligne['Maladies_Chroniques'] .'</td>';
        echo'                  <td>' . $ligne['Cause_Visite'] .'</td>';
        echo'                  <td>' . $ligne['Date_rendez_vous'] .'</td>';
        echo'                  <td>' . $ligne['time_appointment'] .'</td>';
        echo'                  <td>' . $ligne['date_controle'] .'</td>';

        echo'<td>
        <div class="btn-group">
               <a class="btn btn-primary" href="Update_Appointment.php?id='.$ligne['IdFiche_Pat'].'"><i class="fas fa-pen"></i></a>
               <a class="btn btn-danger" href="delete_Appointment.php?id='.$ligne['IdFiche_Pat'].'"><i class="fas fa-trash-alt"></i></a>
           </div>
</td>';
        echo'                  </tr>';
    }
?>