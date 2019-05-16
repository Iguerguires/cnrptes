

<?php include_once ("includes/header.php") ?>

<!--content-->

<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Géré les Réservations Valider</h1>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover table-dark" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nom Fédération</th>
              <th>N° Tele</th>
              <th>Email</th>
              <th>Type de reservation</th>
              <th>Nombre de sportifs</th>
              <th>Date d'entre</th>
              <th>Date de sortie</th>
              <th>Option</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Nom Fédération</th>
              <th>N° Tele</th>
              <th>Email</th>
              <th>Type de reservation</th>
              <th>Nombre de sportifs</th>
              <th>Date d'entre</th>
              <th>Date de sortie</th>
              <th>Option</th>
            </tr>
          </tfoot>
          <tbody>
            <tr>
              <td>CNRPTES</td>
              <td>069 420 609</td>
              <td>cnrptes@gmail.com</td>
              <td>Formation<br>Test Medical</td>
              <td>123</td>
              <td>12/05/2019</td>
              <td>12/06/2019</td>
              <td width="100px">
                <div class="mt-4 mb-2">
                  <a href="edit_slider.php" class="btn btn-outline-warning btn-circle ">
                    <i class="fas fa-eraser"></i>
                  </a>
                  <a href="#" class="btn btn-outline-danger btn-circle ">
                    <i class="fas fa-trash"></i>
                  </a>
                </div>
              </td>  
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->




<!--content-->
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
  }); 

</script>

<?php include_once ("includes/footer.php") ?>