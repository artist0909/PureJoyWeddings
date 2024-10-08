<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Photographer_detail - PureJoyWeddings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    * {
        margin: 0;
        padding: 0;
    }

    img{
        padding: 0 10px;
        margin: 9px 0;
    }

    /* .search-icon{
      padding: 0 10px;
      margin: 9px 0;
    } */

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

    .back_button_of_login {
        color: black;
    }

    .profile_icon {
        margin-right: 1%;
        color: white;
    }

    .feedback-container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
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

    @media screen and (max-width: 600px) {

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
        }
    }
    section .card .image{
      height: 140px;
      width: 140px;
    }

    section .card .image img{
      height: 100%;
      width: 100%;
      
    }

    .venue_link_arrow {
        display: inline;
        margin-right: 69%;
    }

    .decor_link_arrow{
      display: inline;
      margin-right: 62%;
      text-decoration: none;
    }

    .venue_link{
      text-decoration: none;
      color:black;
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
          <a href="weddingplanner.php"><img class="home-icon" src="images\1024px-Home-icon.jpg" height="20px"></a>
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
          <a class="nav-link active" href="food.php">Food</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="dj.php">Dj</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="pandit.php">Pandit</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="groom_wear.php">Groom Wear</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="bride_wear.php">Bride Wear</a>
      </li>
        <li class="nav-item">
          <a class="nav-link active" href="aboutus.php">AboutUs</a>
        </li>
      </ul>';
      if(!$loggedin){
      echo'
      <form class="d-flex" role="search">
        <button class="form-control me-2" type="login"><a href="login2.php" class="loginanchor">Login</a></button>
        <button class="form-control me-2" type="login"><a href="signup.php" class="signupanchor">Signup</a></button>';
      }
      if($loggedin){
        echo'
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
        <a href="photographer.php" class="back_button_of_login">
            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24">
                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    <path d="M21 12H3.5" />
                    <path d="M3 12L10 19M3 12L10 5" />
                </g>
            </svg>
        </a>
        <h1>Wedding Photographers</h1>
        <hr class="mb-4">
        <div class="row">
            <?php
            $database = new Database();
            $cards = $database->getAllPhotographerDetailCards();

        if ($cards) {
            foreach ($cards as $card) {
                ?>
            <div class="col-md-5 mb-4">
                <div class="card">
                    <?php if (!empty($card['photo_sno'])) { ?>
                    <img src="images\photographer_images\Wedding-Photographer-<?php echo $card['photo_sno']; ?>.jpg"
                        class="card-img-top" alt="Card Image">
                    <?php } ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $card['photo_name']; ?></h5>
                        <p class="card-text">Location: <?php echo $card['photo_location']; ?></p>
                        <p class="card-text">Charges: <?php echo $card['photo_charges']; ?></p>
                        <p class="card-text">Email: <?php echo $card['email']; ?></p>
                        <p class="card-text">Contact Number: <?php echo $card['contact_number']; ?></p>
                        <?php
                          // if($_SESSION['uname'] == $card['email']){
                          //   echo'
                          //   <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                          //   <path fill="#ff0000" d="M16 9v10H8V9zm-1.5-6h-5l-1 1H5v2h14V4h-3.5zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2z"/>
                          //   </svg>
                          //   </a>';
                          // }
                          
                        ?>

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
    <div class="container mt-4">
        <h2 class="venue_link_arrow">Populer Venues</h2>
        <a class="venue_link" href="venue.php">
            <b>View all Venues
                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24">
                    <g transform="translate(24 0) scale(-1 1)">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2">
                            <path d="M21 12H3.5" />
                            <path d="M3 12L10 19M3 12L10 5" />
                        </g>
                    </g>
                </svg>
            </b>
        </a>
        <hr class="mb-4">
        <div class="row">
            <?php
        $database = new Database();
        $cards = $database->getAllVenueCards();

        if ($cards) {
            $count = 0;
            foreach ($cards as $card) {
                if($count == 4){
                    break;
                }
                $count = $count + 1;
                ?>
            <div class="card mb-3" style="max-width: 540px; margin-right: 9%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <a href="venue.php" style="text-decoration: none; color: black;">
                            <?php if (!empty($card['venue_sno'])) { ?>
                            <img src="images\venue_images\Wedding-Venue-<?php echo $card['venue_sno']; ?>.jpg"
                                class="img-fluid rounded-start">
                            <?php } ?>
                        </a>
                    </div>
                    <div class="col-md-8">
                        <a href="venue.php" style="text-decoration: none; color: black;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $card['venue_name']; ?></h5>
                                <p class="card-text">Location: <?php echo $card['venue_place']; ?></p>
                            </div>
                        </a>
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
      <div class="container mt-4">
        <h2 class="decor_link_arrow">Wedding Decoraters</h2>
        <a class="venue_link" href="venue.php">
            <b>View all Decorater
                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24">
                    <g transform="translate(24 0) scale(-1 1)">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2">
                            <path d="M21 12H3.5" />
                            <path d="M3 12L10 19M3 12L10 5" />
                        </g>
                    </g>
                </svg>
            </b>
        </a>
        <hr class="mb-4">
        <div class="row">
            <?php
        $database = new Database();
        $cards = $database->getAllDecoratorCards();

        if ($cards) {
            $count = 0;
            foreach ($cards as $card) {
                if($count == 4){
                    break;
                }
                $count = $count + 1;
                ?>
            <div class="card mb-3" style="max-width: 540px; margin-right: 9%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <a href="decorator.php" style="text-decoration: none; color: black;">
                            <?php if (!empty($card['decor_sno'])) { ?>
                            <img src="images\decorator_images\Wedding-Decorator-<?php echo $card['decor_sno']; ?>.jpg"
                                class="img-fluid rounded-start">
                            <?php } ?>
                        </a>
                    </div>
                    <div class="col-md-8">
                        <a href="decorator.php" style="text-decoration: none; color: black;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $card['decor_name']; ?></h5>
                                <p class="card-text">Location: <?php echo $card['decor_location']; ?></p>
                            </div>
                        </a>
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
      <p>Your Wedding palannig is now our Responsibilites! find the best weddingd venue with us</p>
      <p>Email: info@purejoyweddings.com</p>
      <p>Phone: 9876543210</p>
      <p>&copy; 2024 <a href="weddingplanner.php" style="text-decoration: none; color:white;">PureJoyWeddings.</a> All
      rights reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>