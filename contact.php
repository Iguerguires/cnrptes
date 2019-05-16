<?php require ("includes/header.php"); ?>
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
            <li class="nav-item"><a href="reservation.php" class="nav-link">Réservation</a></li>
            <li class="nav-item active"><a href="contact.php" class="nav-link">Contact</a></li>
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
              <div class="col-md-12 mb-4">
                <h2 class="h4">Information de Contact</h2>
              </div>
              <div class="col-md-12 mb-3">
                <p><span>Address:</span> La route des 500 logement Emplacement Municipalité de Souidenia, Etat d'Algérie</p>
              </div>
              <div class="col-md-12 mb-3">
                <p><span>Phone:</span> <a href="tel://213 23 02 04 56">+213 23 02 04 56</a></p>
              </div>
              <div class="col-md-12 mb-3">
                <p><span>Email:</span> <a href="mailto:cns.souidania@gmail.com">cns.souidania@gmail.com</a></p>
              </div>
              <div class="col-md-12 mb-3">
                <p><span>Website:</span> <a target="_blank" href="https://www.facebook.com/Centre-national-de-regroupement-et-de-pr%C3%A9paration-de-l%C3%A9lite-sportive-343595475709278/?ref=search&__tn__=%2Cd%2CP-R&eid=ARBC_MinTDM6Mo0T5jRCEXLjDOGwmT8FAqgd5xegbfaFzJvHtei_oS5h0VLCNETQ29m90zoRGJvQO6Fl">Notre Facebook</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6 ftco-animate">
            <form action="#" method="POST" class="contact-form">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="hidden" name="situation">
                    <input type="text" class="form-control" placeholder="Nom" name="nom">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email" name="email">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Sujet" name="sujet">
              </div>
              <div class="form-group">
                <textarea id="" cols="30" rows="7" class="form-control" placeholder="Message" name="message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="envoyer" value="Envoyer Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
<!-- fin formulaire -->
<?php
//if "email" variable is filled out, send email
  if (isset($_POST['nom']) && 
      isset($_POST['email']) && 
      isset($_POST['sujet']) && 
      isset($_POST['message']))  {
  
  //Email information
  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $sujet = $_POST['sujet'];
  $msg = $_POST['message'];
  $insert = "INSERT INTO `message`(`id_msg`, `id_ad`, `nom_msg`, `email_msg`, `sujet_msg`, `con_msg`)
      VALUES (null,1,'$nom','$email','$sujet','$msg');";
  $req = mysqli_query($db , $insert);
  if ($req === true) {
    echo "felicitation";
  }else echo "erreur :" . mysqli_error($db) ;
} 
?>

<?php require ("includes/footer.php"); ?>