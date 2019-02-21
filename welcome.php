<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lavender Acres Essential Oils | Welcome</title>
    <link rel="stylesheet" href="styles.css" />
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,700" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="icon" type="image/png" href="img/icon.png" />
</head>
<body>
  <img src="img/capstoneLogo.png" class="img-fluid" id="oil-logo" />

  <!-- navbar -->
  <nav class="nav navbar navbar-expand-lg navbar-light bg-light nav-fill">
    <a class="navbar-brand" href="welcome.php">
    <img src="img/icon.png" width="30" height="30" class="d-inline-block align-top">
    Lavender Acres</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav navbar-nav nav-fill">
              <li class="nav-item">
                  <a class="nav-link nav-item" href="oillist.php">Our Essential Oils</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link nav-item" href="recipes.php">Recipes</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link nav-item" href="about.php">More Information</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link nav-item" href="support.php">Support</a>
              </li>
              <li class="nav-item">
                  <a href="register.php" class="nav-link">Create Login</a>
              </li>
              <li class="nav-item">
                  <a href="index.php" class="nav-link">Log In</a>
              </li>
              <li class="nav-item">
                  <a href="logout.php" class="nav-link">Log Out</a>
              </li>
              <li class="nav-item">
                  <a href="reset-password.php" class="nav-link">Reset Password</a>
              </li>
          </ul>
      </div>
  </nav>

  <!-- image carousel -->
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="oillist.php"><img class="w-100" src="img/slides/slide01.jpg" alt="essential oils"></a>
                <div class="container-fluid text-center" id="slide">
                  <a  style="text-decoration: none;" class="text-light" href="oillist.php">20 oils you can't live without.</a>
                </div>
              </div>
              <div class="carousel-item">
                <a href="recipes.php"><img class="w-100" src="img/slides/slide02.jpg" alt="recipes"></a>
                <div class="container-fluid text-center" id="slide">
                  <a style="text-decoration: none;" class="text-light" href="recipes.php">Learn how to blend.</a>
                </div>
              </div>
              <div class="carousel-item">
                <a href="about.php"><img class="w-100" src="img/slides/slide03.jpg" alt="Third slide"></a>
                <div class="container-fluid text-center" id="slide">
                  <a style="text-decoration: none;" class="text-light" href="about.php">The story behind Lavender Acres</a>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="container-fluid bg-light p-2 text-center">
            <h4>What Oils are Right for Me?</h4>
          </div>
          <div class="container-fluid bg-dark mx-auto text-center">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Cfi8kNM2pEg" allowfullscreen></iframe>
            </div>
          </div>
          <img src="img/oils01.jpg" class="img-fluid" id="oil-logo" />

    <!-- page footer -->
    <footer class="page-footer text-light" style="background-color: darkviolet;">
      <div class="container-fluid mx-auto text-center">
        <div class="row">
          <div class="col p-4">
            <a href="https://www.unicornpoint.net" class="footer-links" target="_blank">Unicorn Point</a>
          </div>
          <div class="col p-4">
            <a href="https://github.com/mintdawn/lavender" class="footer-links" target="_blank">GitHub Repo</a>
          </div>
        </div>
      </div>
    </footer>
</body>
</html>
