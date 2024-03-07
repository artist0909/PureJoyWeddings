<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PureJoyWeddings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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


    * {
        margin: 0;
        padding: 0;
    }

    img {
        padding: 0 10px;
        margin: 9px 0;
    }

    .navbar {
        background-color: #333;
        padding: 10px;
        color: white;
        /* position: fixed; */
        width: 100%;
        top: 0;
        z-index: 1000;
    }

    .logout {
        width: 100px;
        height: 40px;
    }

    .logoutanchor {
        text-decoration: none;
        color: black;
    }

    .loginanchor {
        text-decoration: none;
        color: black;
    }

    .signupanchor {
        text-decoration: none;
        color: black;
    }

    .decorator_detail_link {
        text-decoration: none;
        color: black;
    }

    .add_serpro {
        display: inline;
        margin-right: 61%;
    }

    .decorator_sp_form_link{
      text-decoration: none;
      color: black;
    }
    </style>
</head>

<body>
    <?php 
    session_start();
  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
		$loggedin = true;
	}
  else{
    $loggedin = false;
  }

echo'
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
      </ul>';
      if(!$loggedin){
      echo'
      <form class="d-flex" role="search">
      	<img src="images\1024px-Search_Icon.jpg" height="20px">
        <button class="form-control me-2" type="login"><a href="login2.php" class="loginanchor">Login</a></button>
        <button class="form-control me-2" type="login"><a href="signup.php" class="signupanchor">Signup</a></button>';
      }
      if($loggedin){
        echo'
        <img src="images\1024px-Search_Icon.jpg" height="20px">
        <button class=" logout form-control me-2" type="login"><a href="logout.php" class="logoutanchor">Logout</a></button>
      </form>';
      }
      echo'
    </div>
  </div>
</nav>';
?>
    <?php
	require '_dbconnect.php';
?>
    <div class="container mt-3">
        <h2 class="add_serpro">Wedding Decorater</h2>
        <?php
           $server = "localhost";
           $username = "root";
           $password = "";
           $database = "purejoyweddings";
        
           $conn = mysqli_connect($server,$username,$password,$database);
        
           if(!$conn){
             die("Error". mysqli_connect_error());
            } 
            else{
              // echo "succssess";
            }
            // echo $_SESSION['uname'];
            $sql = "SELECT * FROM `registration_detail` where email = '" . $_SESSION['uname'] . "'";
           $result = mysqli_query($conn,$sql);
           $num = mysqli_num_rows($result);
          //  echo $num;
           if($num == 1){
               while($row = mysqli_fetch_assoc($result)){
                   $register_as = $row['register_as'];
                  //  echo $register_as;
                   if($register_as == "serpro"){
                    echo'
                    <a class="decorator_sp_form_link" href="decorator_sp_form.php">
                    <b>Advertise Your Business</b>
                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M11 13H5v-2h6V5h2v6h6v2h-6v6h-2z" />
                    </svg>
                    </a>';
                   }
                 }
               }
        ?>
        <hr class="mb-4">
        <div class="row">
            <?php
        $database = new Database();
        $cards = $database->getAllDecoratorCards();

        if ($cards) {
            foreach ($cards as $card) {
                ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <?php if (!empty($card['decor_sno'])) { ?>
                    <img src="images\decorator_images\Wedding-Decorator-<?php echo $card['decor_sno']; ?>.jpg"
                        class="card-img-top" alt="Card Image">
                    <?php } ?>
                    <div class="card-body">
                        <h5 class="card-title"><a class="decorator_detail_link"
                                href="decorator_detail.php?decor_sno=<?php echo $card['decor_sno']; ?>"><?php echo $card['decor_name']; ?></a>
                        </h5>
                        <p class="card-text">Location: <?php echo $card['decor_location']; ?></p>
                        <p class="card-text">Charges: <?php echo $card['decor_charges']; ?></p>
                        <p class="card-text">Email: <?php echo $card['email']; ?></p>
                        <p class="card-text">Contact Number: <?php echo $card['contact_number']; ?></p>
                        <a href="decorator_detail.php?decor_sno=<?php echo $card['decor_sno']; ?>"
                            class="btn btn-primary">View More</a>
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

    <!-- <div class="bride_groom_img">
	<img src="bride_groom.jpg" class="img-fluid img-custom">
	<div class="text-overlay">	
		<h1>Your Wedding palannig is now Our Responsibilites!</h1>
		<h3>find the best weddingd venue with the 100 reviews</h3>
		<div class="btn-group">
		  <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
		    Select vendor type
		  </button>
		  <ul class="dropdown-menu">
		    <li><a class="dropdown-item" href="#">Action</a></li>
		    <li><a class="dropdown-item" href="#">Another action</a></li>
		    <li><a class="dropdown-item" href="#">Something else here</a></li>
		    <li><hr class="dropdown-divider"></li>
		    <li><a class="dropdown-item" href="#">Separated link</a></li>
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
		    <li><hr class="dropdown-divider"></li>
		    <li><a class="dropdown-item" href="#">Separated link</a></li>
		  </ul>
		</div>
	</div>
</div> -->

    <!-- <nav>
		<h1>PureJoyWeddings</h1>
		<li>Home</li>
		<li>Photographer</li>
		<li>Decorater</li>
		<li>Catrace</li>
		<li>Dj</li>
		<li>Pandit</li>
	</nav>
 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>