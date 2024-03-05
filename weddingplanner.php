<?php
	session_start();
	// echo $_SESSION['loggedin'];
	// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
	// 	header("location: login2.php");	
	// 	exit;
	// }
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PureJoyWeddings - <?php echo $_SESSION['uname']?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		require '_header.php';
	?>
<div class="bride_groom_img">
	<img src="images\bride_groom.jpg" class="img-fluid img-custom">
	<div class="text-overlay">	
		<h1>Your Wedding palannig is now Our Responsibilites!</h1>
		<h3>find the best weddingd venue with the 100 reviews</h3>
		<!-- Example single danger button -->
		<div class="btn-group">
		  <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
		    Select vendor type
		  </button>
		  <ul class="dropdown-menu">
		    <li><a class="dropdown-item" href="photographer.php">Wedding Photographer</a></li>
		    <li><a class="dropdown-item" href="food.php">Wedding Food</a></li>
		    <li><a class="dropdown-item" href="decorator.php">Wedding Decorater</a></li>
			<li><a class="dropdown-item" href="dj.php">Wedding DJ</a></li>
			<li><a class="dropdown-item" href="pandit.php">Wedding Pandit</a></li>
		  </ul>
		</div>
		<div class="btn-group">
		  <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
		    Select your favorite city
		  </button>
		  <ul class="dropdown-menu">
		    <li><a class="dropdown-item" href="#">Jamnager</a></li>
		    <li><a class="dropdown-item" href="#">Rajkot</a></li>
		    <li><a class="dropdown-item" href="#">Ahemdabad</a></li>
		  </ul>
		</div>
	</div>
</div>
<?php
	
?>
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>