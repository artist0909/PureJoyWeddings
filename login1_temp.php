<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Login Page</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>  
  <!-- <img src="E:\Final project\bride_groom-2.jpg"> -->

<?php 
   if($_SERVER['REQUEST_METHOD'] == 'POST')
   {
    $u= $_POST['uname'];
    $p= $_POST['pass'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "login";

    $conn = mysqli_connect($servername, $username, $password , $database);
    // bool a = false;
   //connection of db
  //  if($p=="" || $u==""){
  //   echo 'null';
  //   // return;
  //  } 
  //  echo $p,$u;
   if(!$conn && ($u=="" || $p=="")){
     die("Soory we faild to connect: ". mysqli_connect_error());
    }
    else{
      //submit this to the db
      // echo $u,$p;
      if($u!='' && $p!=''){
        $u = trim($u);
        $p = trim($p);
        if($u!='' && $p!=''){
          $sql = "INSERT INTO `user` (`uname`, `pass`) VALUES ('$u', '$p')";
          $result = mysqli_query($conn, $sql);
          if($result){
           echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
           <strong>Successfully</strong> Your entery has been submitted successfully!
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div>';
          //  a = true;
          }
          else{
              echo "the record was not inserted successfully becuase of this  error -->". mysqli_error($conn);
          }
          // if(a == true){

          // }
        }
       $u = "";
       $p = "";
      }
 
    }
    mysqli_close($conn);
    // exit();
  }
?>
  <div class="login-container">
    <span class="material-symbols-outlined">
      <a href="weddingplanner.html">arrow_back</a>
    </span>
    <!-- <button type="submit" class="btn btn-warning btn-block">back</button> -->
    <h2 class="text-center mb-4">Login</h2>
    <form action="/login_php/login.php" method="POST">
      <div class="form-group mb-4">
        <label for="uname">Username</label>
        <input type="text" class="form-control" id="uname" name="uname" placeholder="Enter your username" value="">
      </div>
      <div class="form-group mb-4">
        <label for="pass">Password</label>
        <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter your password" value="">
      </div>
      <button type="submit" class="btn btn-warning btn-block">Login</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>