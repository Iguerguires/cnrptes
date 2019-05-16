<?php  
include('../includes/session.php');

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["valider"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["image"]["size"] > 1000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

if (isset($_POST['save'])) {
    //var_dump($_POST);

$titre = $_POST['titre'];
$texte = $_POST['texte'];
$image = $_FILES['image']['name'];

$insert = mysqli_query($db, "INSERT INTO `slider`(`id_slider`, `url_img`, `titre_img`, `texte_img`, `id_ad`) VALUES 
(NULL,'$image', '$titre', '$texte', 1 )");

if($insert){
    $_SESSION['message'] = "
    <div class='alert alert-success text-center' role='alert'>
        Les Données en été Sauvgarder
    </div>"; 
	header('location: ../slider.php');
}else{
    $_SESSION['message'] = "
    <div class='alert alert-danger text-center' role='alert'>
        Les Donne n'on pas été Sauvgarder
    </div>"; 
	header('location: ../slider.php');

}
}