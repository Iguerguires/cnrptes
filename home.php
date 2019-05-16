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
            <li class="nav-item active"><a href="home.php" class="nav-link">Accueil</a></li>
            <li class="nav-item "><a href="about.php" class="nav-link">Qui Sommes Nous?</a></li>
            <li class="nav-item"><a href="reservation.php" class="nav-link">Réservation</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <li class="nav-item "><a href="blog.php" class="nav-link">blog</a></li>
           
          </ul>

        </div>
      </div>
    </nav>
<!-- fin nav -->

<!--section  slider-->


    <section class="home-slider owl-carousel">
      <?php 
        $results = mysqli_query($db, "SELECT * FROM slider");
        while ($row = mysqli_fetch_array($results)) { 
      ?>
        <div class="slider-item" style="background-image: url('<?php echo "admin/uploads/".$row["url_img"];?>');">
            <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text align-items-center" data-scrollax-parent="true">
  
              <div class="col-md-5 col-sm-12 ftco-animate">
                <h1 class="mb-4"><?php echo $row['titre_img']; ?></h1>
                <p class="mb-4 mb-md-5"><?php echo $row['texte_img']; ?> </p>
                <p><a href="reservation.php" class="btn btn-primary p-3 px-xl-4 py-xl-3">Réserver</a></p>
              </div>
  
            </div>
          </div>
        </div>
        <?php } ?>
      </section>


<!-- fin slider -->

<!--Section vignettes--
<section class="ftco-intro">
    <div class="container-wrap">
        <div class="wrap d-md-flex justify-content-end align-items-xl-end">
            <div class="info">
                <div class="row no-gutters">
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-phone"></span></div>
                        <div class="text">
                            <h3>+213 23 02 04 56</h3>
                            <p>ouvert de dimanche à 08:00 jusqu'à jeudi à 16:00.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-my_location"></span></div>
                        <div class="text">
                            <h3>La route des 500 logement</h3>
                            <p>	Emplacement Municipalité de Souidenia, Etat d'Algérie</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-envelope"></span></div>
                        <div class="text">
                            <h3>cns.souidania@gmail.com</h3>
                            <p>Boite ouverte 24h/7j</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--fin section vignettes-->

<!--slider-->
<sections class="slideshow">
  <div class="content">
      <div class="content-carrousel">
          <figure class="shadow"><img src="images/1 (1).jpg" alt=""></figure>
          <figure class="shadow"><img src="images/1 (2).jpg" alt=""></figure>
          <figure class="shadow"><img src="images/1 (3).jpg" alt=""></figure>
          <figure class="shadow"><img src="images/1 (4).jpg" alt=""></figure>
          <figure class="shadow"><img src="images/1 (5).jpg" alt=""></figure>
          <figure class="shadow"><img src="images/1 (6).jpg" alt=""></figure>
          <figure class="shadow"><img src="images/1 (7).jpg" alt=""></figure>
          <figure class="shadow"><img src="images/1 (8).jpg" alt=""></figure>
          <figure class="shadow"><img src="images/1 (9).jpg" alt=""></figure>
          <figure class="shadow"><img src="images/1 (10).jpg" alt=""></figure>
      </div>
  </div>
</section>
<br><br><br><br><br><br><br><br><br>
<!--slider-->

<!-- gallery -->
    <!--<h1>QUI SOMMES NOUS?</h1>-->
     
     <div class="row d-flex justify-content-center">
      <div class="col-lg-8 col-md-6 mb-5 mb-md-5 ">
        <div class="ftco-footer-widget mb-4 ml-md-4">
          <p class="page-description text-center">
            Le Centre de Regroupement et de Préparation des Talents et de l’Elite Sportive, fondé par la société égyptienne "Arab Contractors", comprend 400 lits, un grand restaurant, une salle polyvalente, une piscine semi-olympique (25 mètres), une salle omnisport, une unité de soins et récupération ainsi qu’un espace de détente.
            Le décret exécutif n ° 08/296 du 20 Ramadan 1429 correspondant au 20 septembre 2008 définit les conditions nécessaires à la création de centres de rassemblement et de préparation des élites sportives et de talent, à l’organisation et au travail.
            Décision du 02 Shaaban 1429 correspondant au 9 mai 2016, qui inclut le transfert du siège du Centre national pour le rassemblement et la préparation des élites sportives et de talent en Suède et en Algérie.
            Emplacement Municipalité de Souidenia, Etat d'Algérie
          </p>
        </div>
      </div>
     </div>
     <!--
  <div class="gallery" >
        <a href="images/1 (1).jpg"data-lightbox="mygallery"><img src="images/1 (1).jpg" alt=""></a> 
        <a href="images/1 (2).jpg"data-lightbox="mygallery"><img src="images/1 (2).jpg" alt=""></a> 
        <a href="images/1 (3).jpg"data-lightbox="mygallery"><img src="images/1 (3).jpg" alt=""></a>    
        <a href="images/1 (4).jpg"data-lightbox="mygallery"><img src="images/1 (4).jpg" alt=""></a> 
        <a href="images/1 (5).jpg"data-lightbox="mygallery"><img src="images/1 (5).jpg" alt=""></a> 
        <a href="images/1 (6).jpg"data-lightbox="mygallery"><img src="images/1 (6).jpg" alt=""></a> 
        <a href="images/1 (7).jpg"data-lightbox="mygallery"><img src="images/1 (7).jpg" alt=""></a> 
        <a href="images/1 (8).jpg"data-lightbox="mygallery"><img src="images/1 (8).jpg" alt=""></a> 
        <a href="images/1 (9).jpg"data-lightbox="mygallery"><img src="images/1 (9).jpg" alt=""></a> 
        <a href="images/1 (10).jpg"data-lightbox="mygallery"><img src="images/1 (10).jpg" alt=""></a> 
        <a href="images/1 (11).jpg"data-lightbox="mygallery"><img src="images/1 (11).jpg" alt=""></a>  
        <a href="images/1 (12).jpg"data-lightbox="mygallery"><img src="images/1 (12).jpg" alt=""></a>  
  </div>

<!-- fin gallery --> 

<?php require ("includes/footer.php"); ?>