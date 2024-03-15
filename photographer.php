<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PureJoyWeddings - Photographer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="">
    <style>
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

    .photographer_detail_link {
        text-decoration: none;
        color: black;
    }

    .add_serpro {
        display: inline;
        margin-right: 55%;
    }

    .photographer_sp_form_link {
        text-decoration: none;
        color: black;
    }

    .profile_icon {
        margin-right: 1%;
        color: white;
    }

    footer {
        background-color: #ffc107;
        color: #fff;
        text-align: center;
        padding: 10px;
        /*    position: fixed;*/
        bottom: 0;
        width: 100%;
        margin-top: 25%;
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
				<a class="nav-link active" href="vendor.php">Vendor</a>
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
          <a class="nav-link active" href="aboutus.php">AboutUs</a>
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
        <a class="profile_icon" href="profile.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                <path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10s10-4.477 10-10S17.523 2 12 2"/>
                <path d="M4.271 18.346S6.5 15.5 12 15.5s7.73 2.846 7.73 2.846M12 12a3 3 0 1 0 0-6a3 3 0 0 0 0 6"/>
                </g>
                </svg>
                </a>
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
        <h2 class="add_serpro">Wedding Photographers</h2>
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
            if(isset($_SESSION['uname'])){
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
                    <a class="photographer_sp_form_link" href="photographer_sp_form.php">
                    <b>Advertise Your Business</b>
                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M11 13H5v-2h6V5h2v6h6v2h-6v6h-2z" />
                    </svg>
                    </a>';
                   }
                 }
               }
              }
        ?>
        <hr class="mb-4">
        <div class="row">
            <?php
        $database = new Database();
        $cards = $database->getAllPhotographerCards();

        if ($cards) {
            foreach ($cards as $card) {
                ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <?php if (!empty($card['photo_sno'])) { ?>
                    <a href="photographer_detail.php?photo_sno=<?php echo $card['photo_sno']; ?>">
                        <img src="images\photographer_images\Wedding-Photographer-<?php echo $card['photo_sno']; ?>.jpg"
                            class="card-img-top" alt="Card Image">
                        <?php } ?>
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><a class="photographer_detail_link"
                                href="photographer_detail.php?photo_sno=<?php echo $card['photo_sno']; ?>"><?php echo $card['photo_name']; ?></a>
                        </h5><hr>
                        <p class="card-text">Location: <?php echo $card['photo_location']; ?></p>
                        <p class="card-text">Charges: <?php echo $card['photo_charges']; ?></p>
                        <p class="card-text">Email: <?php echo $card['email']; ?></p>
                        <p class="card-text">Contact Number: <?php echo $card['contact_number']; ?></p>
                        <a href="photographer_detail.php?photo_sno=<?php echo $card['photo_sno']; ?>"
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
    <footer>
        <h2>Contact Us</h2>
        <p>We'd love to hear from you! Reach out for a consultation or any inquiries:</p>
        <p>Email: info@purejoyweddings.com</p>
        <p>Phone: (123) 456-7890</p>
        <p>&copy; 2024 <a href="weddingplanner.php" style="text-decoration: none; color:white;">PureJoyWeddings.</a> All
            rights reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>