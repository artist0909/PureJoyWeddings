
<?php
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
          <a href="weddingplanner.html"><img src="1024px-Home-icon.svg.png" height="20px"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="photographer.php">Photographer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#" role="button">
            Decorater
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active">Catrace</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active">Dj</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active">Pandit</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" href="registration.php">Registration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="aboutus.html">AboutUs</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
      	<img src="1024px-Search_Icon.svg.png" height="20px">
        <button class="form-control me-2" type="login"><a href="login.php">Login</a></button>
      </form>
    </div>
  </div>
</nav>';
?>