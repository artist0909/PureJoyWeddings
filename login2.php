<?php

  $login = false;
  $showError = false;
  if($_SERVER["REQUEST_METHOD"] == "POST"){

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "purejoyweddings";

    $conn = mysqli_connect($server,$username,$password,$database);

    if(!$conn){
      die("Error". mysqli_connect_error());
    } 

    $uname = $_POST["uname"];
    $pass = $_POST["pass"];

    // $sql = "SELECT * FROM user WHERE uname = '$uname' AND password = '$pass'";
        $sql = "SELECT * FROM user WHERE uname = '$uname'";
    $result= mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
      while($row = mysqli_fetch_assoc($result)){
        if(password_verify($pass, $row['password'])){
          $login = true;
          session_start();
          $_SESSION['loggedin'] = true;
          $_SESSION['uname'] = $uname;
          header("location: registration.php");
        }
        else{
          $showError=" Invalid Credentials";
        }
      }
    }
    else{
      $showError=" Invalid Credentials";
    }
  }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PureJoyWeddings - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    * {
        margin: 0px 0px;
        padding: 0px 0px;
    }

    body {
        background-image: url('images/login_page_backgraound/login_backgraound.jpg');
        background-size: 100%;
    }
    </style>
</head>
<?php
  if($login){
  echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Successfully!</strong> You are logged in
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';}

if($showError){
  echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong>' . $showError . '
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';}
?>

<body>
    <div class="login container col-md-4">
      <form action="/purejoyweddings/login2.php" method="post">
        <a href="weddingplanner.php" class="back_button_of_login">
          <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24">
            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2">
            <path d="M21 12H3.5" />
            <path d="M3 12L10 19M3 12L10 5" />
          </g>
        </svg>
      </a>
      <h1 class="text-center">Login to our website</h1>
            <div class="mb-3">
                <label for="uname" class="form-label">Username:</label>
                <input type="email" class="form-control" id="uname" name="uname" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Password:</label>
                <input type="password" class="form-control" id="pass" name="pass">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>