<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photographer_sp_form</title>
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

    $foodname = $_POST["foodname"];
    $location = $_POST["foodlocation"];
    $charges = $_POST["foodcharges"];
    $foodmax = $_POST["foodmax"];
    $foodmin = $_POST["foodmin"];
    $email = $_SESSION['uname'];
    $contact = $_POST["contactnumber"];

    $sql = "INSERT INTO `food_detail` (`food_name`, `food_location`, `food_charges`, `food_max`,`food_min`,`email`, `contact_number`) 
    VALUES ('$foodname','$location','$charges','$foodmax','$foodmin','$email','$contact')";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Successfully</strong> Your entery has been submitted successfully!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
       }
       else{
           echo "error -->". mysqli_error($conn);
       }

}
?>


<body>
    <div class="registration-container">
        <h2>Add your bussiness to our website</h2>
        <form id="weddingPlannerfood_sp_Form" action="food_sp_form.php" method="post">
            <label for="foodname">Full Name:</label>
            <input type="text" id="foodname" name="foodname" required>

            <label for="foodlocation">Location:</label>
            <input type="tel" id="foodlocation" name="foodlocation" required>

            <label for="foodcharges">Charges:</label>
            <input type="tel" id="foodcharges" name="foodcharges" required>

            <label for="foodmax">Maximum Pepole:</label>
            <input type="tel" id="foodmax" name="foodmax" required>

            <label for="foodmin">Minimum Pepole:</label>
            <input type="tel" id="foodmin" name="foodmin" required>

            <label for="contactnumber">Contact:</label>
            <input type="tel" id="contactnumber" name="contactnumber" required>

            <button type="submit">Register</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>


</body>

</html>