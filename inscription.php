<?php 
 require_once("includes/header.php"); 
// require_once("includes/session.php");

 ob_start();
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
            <li class="nav-item "><a href="reservation.php" class="nav-link">Réservation</a></li>
            <li class="nav-item "><a href="contact.php" class="nav-link">Contact</a></li>
            <li class="nav-item "><a href="blog.php" class="nav-link">blog</a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>
<!-- fin nav -->

<!-- formulaire -->
<section class="ftco-section contact-section">
<div class="container mt-5">
        <div class="row align-items-start block-9">
          <div class="col-md-4 contact-info ftco-animate">
            <div class="row">
            <img src="images/a2.jpg" alt="" width="400" height="400">
          </div>
        </div>
          <div class="col-md-1"></div>
          <div class="col-md-6 ftco-animate">
            <form action="#" class="contact-form" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nom Fédération" required name="nom"> 
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Numero de Telephone" name="tel_fed">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <input type="texte" class="form-control" placeholder="Adress" name="adress">
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Mot de passe" required name="mdp">                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email" required name="email">
                  </div>
                </div>
              </div>
           
              <div class="form-group">
                <input type="submit" value="Valider" class="btn btn-primary py-3 px-5" name="btn">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
<!-- fin formulaire -->

<?php
  if (isset($_POST['nom']) && isset($_POST['tel_fed']) && isset($_POST['adress']) 
  && isset($_POST['mdp']) && isset($_POST['email']) && isset($_POST['btn']))  {
    $nom = $_POST['nom'];
    $email= $_POST['email'];
    $tel_fed = $_POST['tel_fed'];
    $adress = $_POST['adress'];
    $mdp =$_POST['mdp'];
    $sql = "INSERT INTO `federation`(`id_fed`, `nom_fed`, `email_fed`, `tel_fed`, `add_fed`, `pass_fed`) 
    VALUES (null,'$nom','$email','$tel_fed','$adress','$mdp')";
    if (mysqli_query($db , $sql)) {
      echo "valider";
      
      $_SESSION['federation'] = $_POST['nom'];
      
      exit(header("Location:reservation.php"));

    }
    else {
      echo "Error updating record: " . $db->error;
    }
  }


?>

<div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
  <div class="toast" style="position: absolute; top: 0; right: 0;">
    <div class="toast-header">
      <img src="..." class="rounded mr-2" alt="...">
      <strong class="mr-auto">Bootstrap</strong>
      <small>11 mins ago</small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
  </div>
</div>



<?php require("includes/footer.php"); ?>
