

<?php include_once ("includes/header.php") ?>

<!--content-->

<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Géré les les Contacts</h1>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover table-dark" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nom</th>
              <th>Email</th>
              <th>Sujet</th>
              <th>Message</th>
              <th>Option</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Nom</th>
              <th>Email</th>
              <th>Sujet</th>
              <th>Message</th>
              <th>Option</th>
            </tr>
          </tfoot>
          <tbody>
            <tr>
              <td>Nabil</td>
              <td><a href="nabil@gmail.com">nabil@gmail.com</a></td>
              <td>demande de travaille</td>
              <td>
                  J’ai l’honneur de solliciter à votre haute bienveillance de bien vouloir 
                accepter ma demande de travaille au niveau de votre Complex.
                  Je suis un Technicien Supérieur en Informatique option Développement Web et 
                Multimédia dans l’institut nationale de l’Audiovisuel Ahmed Mahdi d’Ouled Fayet.
                  Pour une meilleure considération de ma demande  mon C.V ci-joint dresse un état de 
                ma formation et stage effectué. 
                  Dans l’attente de vous rencontrer prochainement, je vous prie de croire monsieur 
                l’expression de mes sincères salutations
              </td>
              <td width="100px">
                <div class="mt-4 mb-2">
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