<?php
   require_once('../includes/session.php');
  $id = $_GET['edit'];
  $SelSql = "SELECT * FROM `slider` WHERE id_slider=$id";
  $res = mysqli_query($db , $SelSql );
  $row = mysqli_fetch_assoc($res);
  if (isset($_POST) & !empty($_POST)) {
    $titre = $_POST['titre_img'];
    $texte = $_POST['texte_img'];
    $image = $_POST['url_img'];
    $UpdateSql = "UPDATE `slider` SET `url_img`= '$image',`titre_img`= '$titre',`texte_img`= '$texte' WHERE `id_slider` = $id;";
    $res = mysqli_query($db, $UpdateSql);
	if($res){
		header('location: ../index.php');
	}else{
	 	$fmsg = "Failed to update data.";
	}
  }

//$n = mysqli_fetch_array($record);
?>
<!DOCTYPE html>


<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tableau de Bord</title>

  <!-- Custom fonts for this template-->
  <link href="../alert-darkvendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <!-- Custom styles for this page -->
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <link rel="icon" type="image/png" href="img/logo.png" />
  <link rel="stylesheet" href="style.css">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-0">
          <i><img src="../img/logo.png" height="80px" width="80px"></i>
        </div>
        
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link text-warning" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Tableau de Bord</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading text-white">
        Gestion des Messages
      </div>

      <!-- Nav Item - comment Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed text-warning" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-comments"></i>
          <span>Commentaires</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Gestion des Commentaires:</h6>
            <a class="collapse-item" href="comnon.php">Commentaire Non Validé</a>
            <a class="collapse-item" href="comoui.php">Commentaires Validé</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - contact Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed text-warning" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-envelope"></i>
          <span>Contact</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Gestion Des Contact:</h6>
            <a class="collapse-item" href="contactnon.php">Contact Non validé</a>
            <a class="collapse-item" href="contactoui.php">Contact Validé</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading text-white">
        Gestion des Réservation
      </div>

      <!-- Nav Item - reservation Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed text-warning" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-bookmark"></i>
          <span>Réservation</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Gestion Des Réservation:</h6>
              <a class="collapse-item" href="contactnon.php">Réservation Non validé</a>
              <a class="collapse-item" href="contactoui.php">Réservation Validé</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Gestion Video:</h6>
            <a class="collapse-item" href="video.php">Video</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <div class="sidebar-heading text-white">
        Gestion du Site
      </div>

      <!-- Nav Item - slider -->
      <li class="nav-item">
        <a class="nav-link text-warning" href="slider.php">
          <i class="fas fa-fw fa-image"></i>
          <span>Slider</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">

         
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!--deleted search bar + alerts + messages -->

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-warning bold">admin</span>
                <img class="img-profile rounded-circle" src="../img/user.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>

        </nav>
        <!-- End of Topbar -->

<!--content-->

<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">This is just a Placeholder</h1>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
    </div>
    <div class="card-body">
      






    <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
        <!-- form -->
        <div class>
          <form method="post" action="../index.php" class="user" enctype="multipart/form-data">

            <div class="form-group">
              <label>Titre</label>
              <input type="text" class="form-control" name="titre" value="<?php echo $row['titre_img']; ?>">
            </div>
            <div class="form-group">
              <label>Text</label>
              <div class="form-group">
                <textarea name="texte" id="" cols="30" rows="5" class="form-control" placeholder="Message">
                          <?php echo $row['texte_img']; ?>
                        </textarea>
              </div>
            </div>
            <div class="form-group">
              <label>Image</label>
              <input type="file" class="btn btn-secondary" name="image" value="<?php echo $row['url_img']; ?>">
            </div>
            <div class="form-group">

              <button class="btn btn-success" type="submit" name="save">Sauvgarder</button>

            </div>
          </form>
        </div>


      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->


<!-- End of Main Content -->

<!--content-->

 <!-- Footer -->
 <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Vouler vous vraiment quiter le Tableaux de bord?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          Selectioner "Deconnecter" pour fermais la session.
          <br>
          Selectioner "annuler" pour rester dans la session.
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Anuler</button>
          <a class="btn btn-primary" href="../includes/logout.php">Deconnecter</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../vendor/chart.js/Chart.min.js"></script>

  <!-- Page level plugins -->
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/datatables-demo.js"></script>
   <!-- Page level custom scripts -->
  <script src="../js/demo/chart-area-demo.js"></script>
  <script src="../js/demo/chart-pie-demo.js"></script>

</body>

</html>