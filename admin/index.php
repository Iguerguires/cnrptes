<?php
include_once("includes/header.php");
?>


<style>
  body {
  width: 100vw;
  background-color: #1d1d1d;
  margin: 0;
}
.about {
  background-color: #2c303a;
  width: 100%;
  height: 50px;
  bottom: 0;
  color: #888;
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: "Rubik", sans-serif;
  text-transform: uppercase;
  font-size: 12px;
  letter-spacing: 1px;
  font-weight: 300;
  z-index: 3;
  border-bottom: solid 1px #131418;
}
.about a {
  color: white;
  margin: 0 5px;
  padding: 2px 3px;
  text-decoration: none;
  position: relative;
  transition: all 0.3s ease;
  z-index: 1;
  display: flex;
  align-items: center;
}
.about a:after {
  content: "";
  position: absolute;
  width: calc(100% - 6px);
  height: 1px;
  background-color: #46b7a7;
  bottom: 0;
  transition: all 0.3s ease;
}
.about a:before {
  content: "";
  position: absolute;
  width: 0;
  height: 0px;
  background-color: #46b7a7;
  right: 0;
  bottom: 0;
  transition: all 0.3s 0.3s ease;
  z-index: -1;
}
.about a:hover:after {
  width: 0;
  left: 0;
}
.about a:hover:before {
  width: 100%;
  height: 100%;
  left: 0;
}
.about .one {
  width: 2px;
  height: 20px;
  background-color: #444857;
  margin: 0 10px 0 5px;
}
.about .two {
  width: 4px;
  height: 4px;
  border-radius: 100%;
  background-color: #444857;
  margin: 0 5px;
}
.wrapper {
  width: 100vw;
  margin: 0 auto;
  height: 400px;
  background-color: #161616;
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  transition: all 0.3s ease;
}
@media screen and (max-width: 767px) {
  .wrapper {
    height: 700px;
  }
}
.content {
  max-width: 1024px;
  width: 100%;
  padding: 0 4%;
  /* padding-top: 250px; */
  margin: 0 auto;
  display: flex;
  justify-content: center;
  align-items: center;
}
@media screen and (max-width: 767px) {
  .content {
    padding-top: 300px;
    flex-direction: column;
  }
}
.card {
  width: 100%;
  max-width: 300px;
  min-width: 200px;
  height: 250px;
  background-color: #292929;
  margin: 10px;
  border-radius: 10px;
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.24);
  border: 2px solid rgba(7, 7, 7, 0.12);
  font-size: 16px;
  transition: all 0.3s ease;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  cursor: pointer;
  transition: all 0.3s ease;
}
.icon {
  margin: 0 auto;
  width: 100%;
  height: 80px;
  max-width: 80px;
  background: linear-gradient(90deg, #ff7e7e 0%, #ff4848 40%, rgba(0, 0, 0, 0.28) 60%);
  border-radius: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  color: white;
  transition: all 0.8s ease;
  background-position: 0px;
  background-size: 200px;
}
.material-icons.md-18 {
  font-size: 18px;
}
.material-icons.md-24 {
  font-size: 24px;
}
.material-icons.md-36 {
  font-size: 36px;
}
.material-icons.md-48 {
  font-size: 48px;
}
.card .title {
  width: 100%;
  margin: 0;
  text-align: center;
  margin-top: 30px;
  color: white;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 4px;
  font-family: helvetica;
}
.card .text {
  width: 80%;
  margin: 0 auto;
  font-size: 13px;
  text-align: center;
  margin-top: 20px;
  color: white;
  font-weight: 200;
  letter-spacing: 2px;
  opacity: 0;
  max-height: 0;
  transition: all 0.3s ease;
  font-family: helvetica;
}
.card:hover {
  height: 270px;
}
.card:hover .info {
  height: 90%;
}
.card:hover .text {
  transition: all 0.3s ease;
  opacity: 1;
  max-height: 40px;
}
.card:hover .icon {
  background-position: -120px;
  transition: all 0.3s ease;
}
.card:hover .icon i {
  background: linear-gradient(90deg, #ff7e7e, #ff4848);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  opacity: 1;
  transition: all 0.3s ease;
}
.content .card a{
    text-decoration: none;
}
  </style>






    <div class="row">
        
            <div class="content">
            <!-- card -->
                <div class="card">
                    
                        <div class="icon"><i class="material-icons md-36">comment</i></div>
                        <p class="title">Commentaires</p>
                        <p class="text">Voir et géré les commentaires recent.</p>
                    
                </div>
                
                <!-- end card -->
                <!-- card -->
                <div class="card">
                    
                        <div class="icon"><i class="material-icons md-36">email</i></div>
                        <p class="title">Contact</p>
                        <p class="text">Voir et géré les email reçu.</p>
                    
                </div>
                <!-- end card -->
                <!-- card -->
                <div class="card">
                    
                        <div class="icon"><i class="material-icons md-36">bookmarks</i></div>
                        <p class="title">Réservation</p>
                        <p class="text">Voir et géré les réservation en attente.</p>
                    
                </div>
            </div>

    
        
            <div class="content">
            <!-- card -->
                <div class="card">
                    <a href="slider.php">
                        <div class="icon"><i class="material-icons md-36">panorama</i></div>
                        <p class="title">Slider</p>
                        <p class="text">Modifier ou ajouter des images au slider.</p>
                    </a>
                </div>
                
                <!-- end card -->
                <!-- card -->
                <div class="card">
                    
                        <div class="icon"><i class="material-icons md-36">subject</i></div>
                        <p class="title">Theme</p>
                        <p class="text">Ajouter ou effacer un theme.</p>
                    
                </div>
                <!-- end card -->
                <!-- card -->
                <div class="card">
                    
                        <div class="icon"><i class="material-icons md-36">alternate_email</i></div>
                        <p class="title">Contacts</p>
                        <p class="text">Add or change your contacts and links.</p>
                    
                </div>
            </div>      
      <!-- end card -->
    </div>
</div>
<br>
<br>
<br>
<br>

<!-- <a class="weatherwidget-io" href="https://forecast7.com/fr/36d752d89/staoueli/" data-label_1="STAOUELI" data-label_2="WEATHER" data-theme="original" >STAOUELI WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
<a class="weatherwidget-io" href="https://forecast7.com/fr/36d732d94/ouled-fayet/" data-label_1="OULED FAYET" data-label_2="WEATHER" data-theme="original" >OULED FAYET WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script> -->


<!--content-->

<?php include_once("includes/footer.php") ?>