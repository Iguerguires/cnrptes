
<?php
   include("includes/config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id_fed FROM federation WHERE nom_fed = '$myusername' and pass_fed = '$mypassword'";
      $result = mysqli_query($db,$sql);
      if (!$result) {
         printf("Error: %s\n", mysqli_error($db));
         exit();
     }
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['myusername'] = $myusername;
         $_SESSION['mypassword'] = $mypassword;
         header("location:reservation.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
      
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">

  
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">

  <link rel="icon" type="image/png" href="images/logo.png" />
  <link rel="stylesheet" href="css/sty.css">
  <link rel="stylesheet" href="css/style22.css">
</head>
<body>
    <div class="loginbox">
        <img src="images/user.png" alt="" class="avatar">
        <h1>Login</h1>
        <form action="" method="POST">
            <p>Nom d'Utilisateur</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Mots de Passe</p>
            <input type="password"  name="password" placeholder="Enter Password">
            <input type="submit" name="btnlog" value="Login" >
            <input type="submit" name="btnins" value="Je n'ai pas un compte" >
            <?php 
               if (isset($_POST['btnins'])) {
                  header("location: inscription.php");
               } 
            ?>
        </form>
    </div>


<!--START JS SCRIPT LINK-->
<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

<script src="js/lightbox-plus-jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
  baguetteBox.run('.tz-gallery');
</script>
</body>
</html>