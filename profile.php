<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <!-- <link rel="stylesheet" type="text/css" href="profile.css"> -->
    <style>
    * {
        margin: 0px 0px;
        padding: 0px 0px;
    }

    .navbar {
        background-color: #333;
        padding: 15px;
        color: white;
        position: relative;
        width: 100%;
        /*    top: 0;*/
        /*    z-index: 1000;*/
    }

    .container {
        /*    background-color: green;*/
        width: 35%;
        /*    height: 400px;*/
        padding: 50px;
        position: relative;
        box-shadow: 0px 0px 10px 0px rgba(255, 255, 0, 0.5);
        background-color: white;
        border-radius: 5px;
        margin-top: 40px;

    }

    .row {
        /*    padding: 80px;*/
        position: relative;
        top: 25%;
        left: 25%;
        /*margin: auto;
    display: block;*/
        /*display: flex;
    justify-content: center;
    align-items: center;*/
    }

    .loginpage {
        text-decoration: none;
        color: black;
    }

    .images {
        display: block;
        width: 250px;
        height: 250px;
        /*    background-color: red;  */
    }

    .profile-detail {
        /*    background-color: red;*/
        position: relative;
        width: 500px;
        top: 7%;
        left: 7%;
    }

    .btn {
        position: relative;
        /*    width: 500px;*/
        top: 7%;
        left: 6%;
        /*    background-color: red;*/
    }

    .logout {
        width: 100px;
        height: 40px;
        text-decoration: none;
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
        <button class=" logout form-control me-2" type="login"><a href="logout.php" class="logoutanchor">Logout</a></button>
      </form>';
      }
      echo'
    </div>
  </div>
</nav>';
?>
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
    
    $sql = "SELECT * FROM `registration_detail` where email = '" . $_SESSION['uname'] . "'";
   $result = mysqli_query($conn,$sql);
   $num = mysqli_num_rows($result);
   if($num == 1){
       while($row = mysqli_fetch_assoc($result)){
           $fullname = $row['fullname'];
           $gender = $row['gender'];
           $pnumber = $row['pnumber'];
           $register_as = $row['register_as'];
          //  if($register_as == "serpro"){

          //   code of plus
          //  }
         }
       }
       echo '<div class="container">
          <div class="row">
              <div class="col-md-8 images">
                  <img src="images\user_profile.png" alt="User Profile Photo" class="img-fluid rounded-circle">
              </div>
              <div class="col-md-8 profile-detail">
                  <h2>User Profile</h2>
                  <p><b>Username:</b>' . $fullname . '</p>
                  <p><b>Email:</b> ' . $_SESSION['uname'] . '</p>
                  <p><b>Gender:</b>' . $gender . '</p>
                  <p><b>Contact:</b>' . $pnumber . '</p>
                  <p><b>Register_As:</b>' . $register_as . '</p>
                  <div class="btn-group" role="group" aria-label="Basic outlined example">
                      <button type="button" class="btn btn-outline-warning">Male</button>
                      <button type="button" class="btn btn-outline-warning">Female</button>
                  </div>
                  <br>
                  <a href="#" class="btn btn-warning">Edit Profile</a>
              </div>
          </div>
      </div>'
?>

    <!-- Bootstrap JS and Popper.js -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>