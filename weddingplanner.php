<?php
	session_start();

	if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
		header("location: login2.php");
		exit;
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PureJoyWeddings - <?php echo $_SESSION['uname']?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="">
	<style>
		/*
nav{
	display: flex;
	float: right;
	background-color: palegoldenrod;
	height: ;

}
h1{
	margin: 0 800px;
box-shadow: 10px 5px 5px black;
}
/*nav li{
	list-style: none;
	padding: 0 12px;
	font-size: 20px;
}*/


*{
	margin: 0;
	padding: 0;
}

img{
    padding: 0 10px;
    margin: 9px 0;
}
.bride_groom_img img{
    padding: 0px 0px;
    margin: 0px 0px;
	
}
.navbar{
    background-color: #333;
    padding: 10px;
    color: white;
    /* position: fixed; */
    width: 100%;
    top: 0;
    z-index: 1000;
}
.img-custom {
		width: 100%;
		height: 600px;
}
.text-overlay {
	position: absolute;
	top: 45%; /* Adjust the top position as needed */
	left: 50%; /* Adjust the left position as needed */
	transform: translate(-50%, -50%); /* Center the text */
	color: white;
	font-size: 24px;
	font-weight: bold;
	text-align: center;
}
.form-control{
	margin: 0px;
	padding: 0 15px;
	box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    background-color: white;
    border-radius: 5px;
}
.loginpage{
	text-decoration: none;
	color: black;
}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg  bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="weddingplanner.php">PureJoyWeddings</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
          <a href="weddingplanner.php"><img src="images\1024px-Home-icon.jpg" height="20px"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="photographer.php">Photographer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="decorator.php" role="button">
            Decorater
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="venue.php">Venue</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="food.php">Catrace</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="dj.php">Dj</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="pandit.php">Pandit</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" href="registration.php">Registration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="aboutus.html">AboutUs</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
      	<img src="images\1024px-Search_Icon.jpg" height="20px">
        <button class="form-control me-2" type="login"><a href="login2.php">Login</a></button>
		<button class="form-control me-2" type="login"><a href="signup.php">Signup</a></button>
		<button class="form-control me-2" type="login"><a href="logout.php">Logout</a></button>
      </form>
    </div>
  </div>
</nav>
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