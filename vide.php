<?php require_once("includes/header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</head>
<body>

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


<?php
  if (isset($_POST['type_res']) && 
  isset($_POST['num_s']) && 
  isset($_POST['date_e']) && 
  isset($_POST['date_s']))  {

      //Email information
      $id = $_SESSION['id_fed'];
      $chek = $_POST['type_res'];
      $type = implode("-",$chek);
      $num_s = $_POST['num_s'];
      $date_e = $_POST['date_e'];
      $date_s = $_POST['date_s'];
      $insert = "INSERT INTO `reservation`(`id_res`, `id_fed`, `id_ad`, `num_s`, `date_deb`, `date_fin`, `etat`)
        VALUES (null,$id,1,'$num_s','$date_e','$date_s', 0);";
      $req = mysqli_query($db , $insert);
      if ($req === true) {
        $insert2 = "INSERT INTO `type_resrvation`(`id_tres`, `type_res`)
        VALUES (null,$type);";
        $req = mysqli_query($db , $insert2);
        
      }else echo "erreur :" . mysqli_error($db) ;
      } 
      echo $type;
?>
    
<script>
$('.toast').toast('show ');

</script>    
</body>
</html>