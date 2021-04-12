
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
        <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
    
    <?php include 'connexion.php' ?>
    <?php include 'session.php' ?>
    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

  </head>
         <body>

  <?php include 'navbar.php' ?>
  
  
  <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fas fa-file-medical"></i> Note</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="home.php">Home</a></li>
						
					</ol>
				</div>
            </div>
</section>
</section>  <!-- CKEditor -->
  
<div class="col-lg-12"style="width:900px; margin-left:200px;">
                              <section class="panel">
                                  
                                  <div class="panel-body">
                                      <div class="form">
                                          <form action="#" method="post" class="form-horizontal">
                                            
                                          <div class="form-group">
                                         
                                          <div class="col-sm-10">
                                                      <textarea class="form-control ckeditor" name="editor1" rows="6" id="note"></textarea>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                      <div class="form-group">
                
                                      <div class="col-sm-offset-2 col-sm-10">
             
                                      <a href="inserte_note.php?   <? $note=$_POST['note'];?>">
                    
                        <button style="margin-left:600px;" type="submit" name="btValider" class="btn btn-info">Save</button>
                   </a>
                      
                </div>
                    <?php
                
                          $id=$_SESSION['iduser'];
                              $sql = "SELECT * FROM note where 	user_id=0"; 
            $req = $con->prepare($sql);
            // Envoyer la requête au serveur et récupérer le résultat
            $req->execute();
    
            //On récupère le résultat
          while(  $ligne = $req->fetch()){
echo'<p>'.$ligne['note'].'</p>';


          }
          ?>
    
                </div>
                </div>
                                  
                              </section>
                          </div>
                          

 <!-- javascripts -->
 <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

    <!-- jquery ui -->
    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

    <!--custom checkbox & radio-->
    <script type="text/javascript" src="js/ga.js"></script>
    <!--custom switch-->
    <script src="js/bootstrap-switch.js"></script>
    <!--custom tagsinput-->
    <script src="js/jquery.tagsinput.js"></script>
    
    <!-- colorpicker -->
   
    <!-- bootstrap-wysiwyg -->
    <script src="js/jquery.hotkeys.js"></script>
    <script src="js/bootstrap-wysiwyg.js"></script>
    <script src="js/bootstrap-wysiwyg-custom.js"></script>
    <!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
    <!-- custom form component script for this page-->
    <script src="js/form-component.js"></script>
    <!-- custome script for all page -->
    <script src="js/scripts.js"></script>

        
</body>
</html>