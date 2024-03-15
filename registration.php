<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Planner Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="registration.css"> -->
    <style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f5f5f5;
    }

    .registration-container {
        max-width: 40%;
        margin: 50px auto;
        /* background-color: #fff; */
        padding: 50px;
        box-shadow: 0px 0px 10px 0px rgba(255, 255, 0, 1);
        background-color: white;
        border-radius: 5px;
        margin-top: 8%;
    }

    h2 {
        color: #333;
        text-align: center;
    }

    label {
        display: block;
        margin-bottom: 8px;
        color: #333;
    }

    input {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
    }

    button {
        background-color: #333;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        background-color: #ffc107;
    }

    .gender_radio {
        /* display: flex; */

    }

    .registeras_radio {
        /* display: flex; */
    }
    </style>
</head>
<?php

    session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST"){

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "purejoyweddings";

    $conn = mysqli_connect($server,$username,$password,$database);

    if(!$conn){
      die("Error". mysqli_connect_error());
    } 

    $fullname = $_POST["name"];
    $email = $_SESSION['uname'];
    $gender = $_POST["gender"];
    $pnumber = $_POST["phone"];
    $register_as = $_POST["register_as"];

    $sql = "INSERT INTO `registration_detail` (`fullname`, `gender`, `email`, `pnumber`, `register_as`) 
    VALUES ('$fullname', '$gender', '$email', '$pnumber', '$register_as')";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Successfully</strong> Your entery has been submitted successfully!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        header("location: weddingplanner.php");
       }
       else{
           echo "error -->". mysqli_error($conn);
       }

}
?>


<body>
    <div class="registration-container">
        <h2>Registration Form</h2>
        <form id="weddingPlannerRegistrationForm" action="registration.php" method="post">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="gender">Gender:</label>
            <div class="form-check form-check-inline col-md-4">
                <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                <label class="form-check-label" for="gender">Male</label>
            </div>
            <div class="form-check form-check-inline col-md-4">
                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                <label class="form-check-label" for="gender">Female</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="other" value="other">
                <label class="form-check-label" for="gender">Other</label>
            </div>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="register_as">Register As:</label>
            <div class="form-check form-check-inline col-md-7">
                <input class="form-check-input" type="radio" name="register_as" id="user" value="user">
                <label class="form-check-label" for="inlineRadio1">User</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="register_as" id="serpro" value="serpro">
                <label class="form-check-label" for="inlineRadio2">Service Provider</label>
            </div>



            <button type="submit">Register</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>


</body>

</html>