<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PureJoyWeddings - Food</title>
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

    .food_detail_link {
        text-decoration: none;
        color: black;
    }

    .add_serpro {
        display: inline;
        margin-right: 66%;
    }

    .food_sp_form_link{
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
        <h2 class="add_serpro">Wedding Food</h2>
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
                    <a class="food_sp_form_link" href="food_sp_form.php">
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
        $cards = $database->getAllFoodCards();

        if ($cards) {
            foreach ($cards as $card) {
                ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <?php if (!empty($card['food_sno'])) { ?>
                    <img src="images\food_images\Wedding-Food-<?php echo $card['food_sno']; ?>.jpg" class="card-img-top"
                        alt="Card Image">
                    <?php } ?>
                    <div class="card-body">
                        <h5 class="card-title"><a class="food_detail_link"
                                href="food_detail.php?food_sno=<?php echo $card['food_sno']; ?>"><?php echo $card['food_name']; ?></a>
                        </h5>
                        <p class="card-text">Location: <?php echo $card['food_location']; ?></p>
                        <p class="card-text">Charges: <?php echo $card['food_charges']; ?></p>
                        <p class="card-text">Maximum Pepole: <?php echo $card['food_max']; ?></p>
                        <p class="card-text">Minimum People: <?php echo $card['food_min']; ?></p>
                        <p class="card-text">Email: <?php echo $card['email']; ?></p>
                        <p class="card-text">Contact Number: <?php echo $card['contact_number']; ?></p>
                        <a href="food_detail.php?food_sno=<?php echo $card['food_sno']; ?>" class="btn btn-primary">View
                            More</a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>