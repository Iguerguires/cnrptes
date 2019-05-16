

<?php include_once ("includes/header.php") ?>

<!--content-->

<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Géré les Commentaires Non Valider</h1>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover table-dark" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nom Utilisateur</th>
              <th>Commentaire</th>
              <th>Theme</th>
              <th>Option</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Nom Utilisateur</th>
              <th>Commentaire</th>
              <th>Theme</th>
              <th>Option</th>
            </tr>
          </tfoot>
          <tbody>
            <tr>
              <td>Nabil</td>
              <td>YO!YO!YO!</td>
              <td>Entrainement</td>
              <td width="100px">
                <div class="mt-4 mb-2">
                  <a href="edit_slider.php" class="btn btn-outline-success btn-circle ">
                    <i class="fas fa-comment-medical"></i>
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