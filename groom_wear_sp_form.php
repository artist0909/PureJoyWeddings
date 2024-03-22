<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>groom_wear_detail_sp_form - PureJoyWeddings</title>
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
        margin-top: 7%;
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

    $groomwearname = $_POST["groomwearname"];
    $location = $_POST["groomwearlocation"];
    $charges = $_POST["groomwearcharges"];
    $email = $_SESSION['uname'];
    $contact = $_POST["contactnumber"];

    $sql = "INSERT INTO `groomwear_detail` (`groomwear_name`, `groomwear_location`, `groomwear_charges`, `email`, `contact_number`) 
    VALUES ('$groomwearname','$location','$charges','$email','$contact')";
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
        <a href="groom_wear.php" class="back_button_of_login" style="color: black;">
            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24">
                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    <path d="M21 12H3.5" />
                    <path d="M3 12L10 19M3 12L10 5" />
                </g>
            </svg>
        </a>
        <h2>Add your bussiness to our website</h2>
        <form id="weddingPlannergroomwear_sp_Form" action="groom_wear_sp_form.php" method="post">
            <label for="groomwearname">Shop Name:</label>
            <input type="text" id="groomwearname" name="groomwearname" required>

            <label for="groomwearlocation">Location:</label>
            <input type="tel" id="groomwearlocation" name="groomwearlocation" required>

            <label for="groomwearcharges">Charges:</label>
            <input type="tel" id="groomwearcharges" name="groomwearcharges" required>

            <label for="contactnumber">Contact:</label>
            <input type="tel" id="contactnumber" name="contactnumber" required>

            <button type="submit">Add</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>


</body>

</html>