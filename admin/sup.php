<?php
include ("includes/config.php");
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($db, "DELETE FROM `slider` WHERE id_slider = $id");
    echo "it woreked";
    header("location: slider.php");  
  }
  