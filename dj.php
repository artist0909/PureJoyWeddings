<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PureJoyWeddings</title>
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
	top: 35%; /* Adjust the top position as needed */
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
          <a class="nav-link active" href="decorator.php">
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
        <button class="form-control me-2" type="login"><a href="login (2).php">Login</a></button>
      </form>
    </div>
  </div>
</nav>
<?php
	require '_dbconnect.php';
?>
<div class="container mt-5">
    <div class="row">
        <?php
        $database = new Database();
        $cards = $database->getAllDjCards();

        if ($cards) {
            foreach ($cards as $card) {
                ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <?php if (!empty($card['sno'])) { ?>
                            <img src="images\dj_images\Wedding-Dj-<?php echo $card['sno']; ?>.jpg" class="card-img-top" alt="Card Image">
                        <?php } ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $card['dj_name']; ?></h5>
                            <p class="card-text">Location: <?php echo $card['area']; ?></p>
                            <p class="card-text">Charges: <?php echo $card['charges']; ?></p>
							<p class="card-text">Charges: <?php echo $card['experience']; ?></p>
                            <p class="card-text">Email: <?php echo $card['email']; ?></p>
                            <p class="card-text">Contact Number: <?php echo $card['contact_number']; ?></p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                            <!-- Add additional card details here -->
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "No cards found.";
        }
        ?>
    </div>
</div>
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>