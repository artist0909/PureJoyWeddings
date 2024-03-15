<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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

    .logout {
        width: 100px;
        text-decoration: none;
    }

    .profile_icon {
        margin-right: 1%;
        color: white;
    }

    .card {
        display: flex;
        float: left;
        margin-right: 7%;
    }

    footer {
        background-color: #ffc107;
        color: #fff;
        text-align: center;
        padding: 10px;
        /*    position: fixed;*/
        bottom: 0;
        width: 100%;
        margin-top: 30%;
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
    <div class="container mt-4">
        <h2>Wedding Categories</h2><br>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <a href="photographer.php">
                        <img src="images\photographer_images\Wedding-Photographer-1.jpg"
                            class="img-fluid rounded-start">
                    </a>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <a href="photographer.php" style="text-decoration: none; color: black;">
                            <h5 class="card-title">Photographer</h5>
                            <p class="card-text">Photographer</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <a href="decorator.php">
                        <img src="images\decorator_images\Wedding-Decorator-1.jpg" class="img-fluid rounded-start">
                    </a>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <a href="decorator.php" style="text-decoration: none; color: black;">
                            <h5 class="card-title">Decorater</h5>
                            <p class="card-text">Wedding Planner,Decoraters</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <a href="venue.php">
                        <img src="images\venue_images\Wedding-Venue-1.jpg" class="img-fluid rounded-start">
                    </a>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <a href="venue.php" style="text-decoration: none; color: black;">
                            <h5 class="card-title">Venues</h5>
                            <p class="card-text">Banquet Halls, Farm Hous</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <a href="food.php">
                        <img src="images\food_images\Wedding-Food-1.jpg" class="img-fluid rounded-start">
                    </a>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <a href="food.php" style="text-decoration: none; color: black;">
                            <h5 class="card-title">Food</h5>
                            <p class="card-text">Wedding Foods, caterign service</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <a href="dj.php">
                        <img src="images\dj_images\Wedding-Dj-1.jpg" class="img-fluid rounded-start">
                    </a>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <a href="dj.php" style="text-decoration: none; color: black;">
                            <h5 class="card-title">Dj</h5>
                            <p class="card-text">Wedding Djs</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <a href="pandit.php">
                        <img src="images\pandit_images\Wedding-Pandit-1.jpg" class="img-fluid rounded-start">
                    </a>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <a href="pandit.php" style="text-decoration: none; color: black;">
                            <h5 class="card-title">Pandit</h5>
                            <p class="card-text">Wedding Pandits</p>
                        </a>
                    </div>
                </div>
            </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>