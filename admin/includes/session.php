<?php
   include_once('config.php');
   if(!isset($_SESSION)) 
   { 
       session_start(); 
   } 
   $myusername = $_SESSION['myusername'];
   $mypassword = $_SESSION['mypassword'];
   $ses_sql = mysqli_query($db,"select username from admin where (nom_ad = '$myusername') and (pass_ad = '$mypassword') ");
  
   if(!isset( $_SESSION['myusername']) && !isset( $_SESSION['mypassword'])){
      header("location:login.php");
      die();
      
   }
?>