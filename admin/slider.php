<?php
include_once("includes/header.php");
if (isset($_GET['edit'])) {
  //$id = $_GET['edit'];
  $_SESSION['edit'] = $_GET['edit'];
  $record = mysqli_query($db, "SELECT * from slider ");

  if (count($record) == 1) {
    $n = mysqli_fetch_array($record);
    $titre = $n['titre_img'];
    $texte = $n['texte_img'];
    $image = $n['url_img'];
  }
}
$id = 0;


?>

<!--content-->
<!--message validation-->
<?php if (isset($_SESSION['message'])) : ?>
  <div class="msg">
    <?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
    ?>
  </div>
<?php endif ?>
<!--fin message validation-->

<?php $results = mysqli_query($db, "SELECT * FROM slider") ?>

<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Géré le slider</h1>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
    </div>
    <div class="card-body">
      <div class="table-responsive">

        <table class="table table-hover table-dark" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Titre</th>
              <th>Text</th>
              <th>Image</th>
              <th>Option</th>
            </tr>
          </thead>
          
          <tbody>
            <?php while ($row = mysqli_fetch_array($results)) { ?>
              <tr>
                <td><?php echo $row['titre_img']; ?></td>
                <td><?php echo $row['texte_img']; ?></td>
                <td><img src='<?php echo "uploads/" . $row["url_img"]; ?>' width="120px" height="80px"></td>
                <td colspan="2">
                  

                    <a class="btn btn-outline-warning btn-circle m-2" href="ajouter/modifier_slider.php?edit=<?php echo $row['id_slider']; ?>" >
                      <i class="fas fa-edit"></i>
                    </a>

                  
                    <a class="btn btn-outline-danger btn-circle m-2" data-toggle="modal" data-target="#Modal<?php echo $row['id_slider']; ?>">
                      <i class="fas fa-trash"></i>
                    </a>
                    
                </td>
                
              </tr>

              <!-- Modal de supresion -->
              <div class="modal fade" id="Modal<?php echo $row['id_slider']; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="ModalLabel">Supprimer L'élément!</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">

                      <h1>Êtes-vous sûr?</h1>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Anuler</button>
                      <a href="sup.php?del=<?php echo $row['id_slider']; ?>"><button type="button" class="btn btn-outline-danger"> Oui..! Effacer</button></a>
                    </div>
                  </div>

                </div>
              </div>
              <!-- Modal de modification -->
              <div class="modal fade" id="exampleModal<?php echo $row['id_slider']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modifier </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="ajouter/ajouter_slider.php" class="user" enctype="multipart/form-data">

                        <input type="hidden" name="id" value="<?php echo $id; ?>">

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

                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                      <form action="slider.php" method="post">
                        <button class="btn btn-outline-warning" type="submit" name="update">Modifier</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end modal -->
            <?php } ?>
          </tbody>
          <tfoot>
            <tr>
              <th>Titre</th>
              <th>Text</th>
              <th>Image</th>
              <th colspan="2">Option</th>
            </tr>
          </tfoot>
        </table>








        <!-- form -->
        <div class>
          <form method="post" action="ajouter/ajouter_slider.php" class="user" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <div class="form-group">
              <label>Titre</label>
              <input type="text" class="form-control" name="titre" value="<?php if (isset($_GET['edit'])) echo $titre; ?>">
            </div>
            <div class="form-group">
              <label>Text</label>
              <div class="form-group">
                <textarea name="texte" id="" cols="30" rows="5" class="form-control" placeholder="Message">
                          <?php if (isset($_GET['edit'])) echo $texte; ?>
                        </textarea>
              </div>
            </div>
            <div class="form-group">
              <label>Image</label>
              <input type="file" class="btn btn-secondary" name="image" value="<?php if (isset($_GET['edit'])) echo $image; ?>">
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

<?php

if (
  isset($_POST['update']) && isset($_POST['titre'])
  && isset($_POST['texte']) && isset($_POST['image'])
) {
  $id = $_POST['id_slider'];
  $titre = $_POST['titre_img'];
  $texte = $_POST['texte_img'];
  $image = $_POST['url_img'];
  $result = mysqli_query($db, "select * from slider WHERE id_slider =$id");

  while ($int =  mysqli_fetch_array($result)) {

    $titre = $int['titre_img'];
    $texte = $int['texte_img'];
    $image = $int['url_img'];
  }

  mysqli_query($db, "UPDATE `slider`
    SET `url_img` = '$image', `titre_img` = '$titre', `texte_img` = '$texte' 
    WHERE `slider`.`id_slider` = $id; ");
  $_SESSION['message'] = "Donne Changer!";


  $sql = "UPDATE `slider`
    SET `url_img` = '$image', `titre_img` = '$titre', `texte_img` = '$texte' 
    WHERE `slider`.`id_slider` = $id;";

  if ($db->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $db->error;
  }

  $db->close();
}

// if (isset($_GET['del'])) {
//   $id = $_GET['del'];
//   mysqli_query($db, "DELETE FROM `slider` WHERE id_slider = $id");
//   $_SESSION['message'] = "
//     <div class='alert alert-success text-center' role='alert'>
//       Donne Mise a jour!
//     </div>";
    
// }

$results = mysqli_query($db, "SELECT * FROM slider");

?>

<!-- End of Main Content -->
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
  }); 

</script>
<!--content-->

<?php include_once("includes/footer.php") ?>

