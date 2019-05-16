<!DOCTYYPE html>
<html>
  <head>
    <title>
      CNRPTES
    </title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/lightbox.min.css">

    <link rel="icon" type="image/png" href="images/logo.png" />
    <link rel="stylesheet" href="../css/style_gallery.css">
    <link rel="stylesheet" href="../css/sty.css">
    <link href="public/3c-comments.css" rel="stylesheet"> 
    <style>
    .form-control.creply {
  margin-left: 40px;
}
    </style>
  </head>
  <body>

<!--section nav-->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="home.php"><img src="../images/logo.png" width="80" height="80"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
            <li class="nav-item "><a href="../home.php" class="nav-link">Accueil</a></li>
            <li class="nav-item "><a href="../about.php" class="nav-link">Qui Sommes Nous?</a></li>
            <li class="nav-item"><a href="../reservation.php" class="nav-link">Réservation</a></li>
            <li class="nav-item"><a href="../contact.php" class="nav-link">Contact</a></li>
            <li class="nav-item active"><a href="../blog.php" class="nav-link">blog</a></li>
            <li class="nav-item dropdown" >
                <a href="../inscription.php" class="nav-link dropdown-toggle rounded text-light">Inscription</a>
                
                <!-- Dropdown - User Information -->
              <div class="dropdown-menu " aria-labelledby="userDropdown">
                <a class="dropdown-item" href="login.php" >
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Login
                </a>

                <a class="dropdown-item" href="home.php" >
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                  <?php //session_destroy(); ?>
                </a>
              </div>
            </li>
	        </ul>
	      </div>
		  </div>
    </nav>
  
<!-- fin nav -->

    <p>hna nhato theme ida dernah.</p>

    <!-- GIVE YOUR PAGE OR PRODUCT A POST ID -->
    <input type="hidden" id="post_id" value="999"/>
    <section class="ftco-section">
    <div class="container">
    <!-- CREATE A CONTAINER TO LOAD COMMENTS -->
    <div id="comments" class="form-group"></div>

    <!-- CREATE A CONTAINER TO LOAD REPLY DOCKET -->
    <div id="reply-main" class="form-group">
    <br><br><br>
    </div>
    <br><br><br>

      </div>
    </section>


    
    <script src="public/3b-comments.js"></script>
<?php include("includes/footer.php");?>
  </body>
</html>