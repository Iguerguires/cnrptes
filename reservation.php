<?php 
require_once("includes/header.php"); 
// require_once("includes/session.php");
?>
<!--section nav-->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="home.php"><img src="images/logo.png" width="80" height="80"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
            <li class="nav-item "><a href="home.php" class="nav-link">Accueil</a></li>
            <li class="nav-item "><a href="about.php" class="nav-link">Qui Sommes Nous?</a></li>
            <li class="nav-item active"><a href="reservation.php" class="nav-link">Réservation</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <li class="nav-item "><a href="blog.php" class="nav-link">blog</a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>
<!-- fin nav -->

<!-- formulaire -->
<section class="ftco-section contact-section">
      <div class="container mt-5">
        <div class="row block-9">
          <div class="col-md-4 contact-info ftco-animate">
            <div class="row">
            <img src="images/test.jpg" alt="" width="400" height="600">
          </div>
        </div>
          <div class="col-md-1"></div>
          <div class="col-md-6 ftco-animate">
         
          <?php if(!empty($_SESSION['federation'])) {?>
            <?php echo '<h2 >bienvenue '.$_SESSION['federation'].' </h2>' ;
            $ch = $_SESSION['federation'];
            
            $req = "SELECT `id_fed` FROM `federation` WHERE nom_fed ='$ch'";
            $sql = mysqli_query($db ,$req);
            while($int = mysqli_fetch_array($sql))
            {
              $id = $int['id_fed'];
            }
            echo $id;
            
            
            ?>
            <form action="" method="POST" class="contact-form"> <!-- begin form -->
              <input type="hidden">
              
              <div class="form-group">
                    <label style="color:#FFF;">Type de reservation :</label>
                    
                    <div class="form-check form-check-inline ">
                <label class="form-check-label" for="inlineCheckbox1">Test Medicale :  </label>
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="teste_medicale" name="type_res[]">
              </div>
              <div class="form-check form-check-inline">
                <label class="form-check-label" for="inlineCheckbox2">Preparation d'evenement :  </label>
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="preparation" name="type_res[]">
              </div>
              <div class="form-check form-check-inline">
                <label class="form-check-label" for="inlineCheckbox2">Formation :  </label>
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="formation" name="type_res[]">
              </div>
              </div>              

                  <div class="form-group">
                    <label style="color:#FFF;">Nombre de Sportifes :</label>
                    <input type="number" class="form-control" name="num_s">
                  </div>

              <div class="row">
              
                <div class="col-md-6">
                <label style="color:#FFF;">date d'entre :</label> 
                  <div class="form-group">
                    <input type="date" class="form-control" name="date_e">
                  </div>
                </div>     
                        
                <div class="col-md-6">
                <label style="color:#FFF;">date de sortie : </label>
                  <div class="form-group">
                    <input type="date" class="form-control" name="date_s">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <input type="submit" value="Valider" class="btn btn-primary py-3 px-5" name="btn">
              </div>
            </form> <!-- end form -->
          <?php }
          
          else{
            header("location: login.php");
          } ?>
          </div>
        </div>
      </div>
    </section>
<!-- fin formulaire -->

<?php
//$_SESSION['federation'] = '';
?>

<!-- insertion des reservation -->
<?php
  if (isset($_POST['type_res']) && 
  isset($_POST['num_s']) && 
  isset($_POST['date_e']) && 
  isset($_POST['date_s']))  {

      //Email information
      //$id = $_SESSION['id_fed'];
      $chek = $_POST['type_res'];
      $type = implode("-",$chek);
      $num_s = $_POST['num_s'];
      $date_e = $_POST['date_e'];
      $date_s = $_POST['date_s'];
      $insert = "INSERT INTO `reservation`(`id_res`, `id_fed`, `id_ad`, `num_s`, `date_deb`, `date_fin`,`type_res`,`etat`)
        VALUES (null,$id,1,'$num_s','$date_e','$date_s','$type', 0);";
      $req = mysqli_query($db , $insert);
      if ($req === true) {
      echo"frinaha";
      }else echo "erreur :" . mysqli_error($db) ;
      } 
      echo $type;
?>

<?php require_once("includes/footer.php"); ?>
