<?php include("libraries/database.php") ?>
<?php

	$db1 = new Database();
	$query = "SELECT * FROM categories";
	$categories = mysqli_query($db1->link,$query);

?>

<!DOCTYPE html>
<html>

<head>

	<title>CodeSprint</title>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/custom.css"> -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>

	
	
  	<div class="container">

    	<nav class="navbar navbar-inverse navbar-fixed-top">
	      <div class="container">

	        <div class="navbar-header">
	          <a class="navbar-brand" href="index.php">CodeSprint.com</a>
	        </div>

	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav">
	            <li class="active"><a href="posts.php">All Posts</a></li>
	            <li class="dropdown">
	              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">All Categories <span class="caret"></span></a>
	              <ul class="dropdown-menu">
	                <?php while($row = $categories->fetch_assoc()):  ?>
	                <li><a href="posts.php?category=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></li>
	           		<?php endwhile; ?>
	              </ul>
	            </li>

	          </ul>


	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="contactme.php">Contact Me</a></li>
	            <li><a href="admin/index.php" target="_blank">Admin</a></li>
	          </ul>
	          
	        </div>
	      </div>
    	</nav>
  	</div>
	

  	<div class="container">
  		<div class="blog-header">
        	<h1 class="blog-title">Welcome To CodeSprint</h1>
        	<p class="lead blog-description">A blog for computer science students by a computer science student.<br>Cool examples of C/C++ , PHP/MySQL ,Bootstrap Templates and more</p>
      	</div>
      	<div class="row">
  			<div class="col-xs-8 blog-main">