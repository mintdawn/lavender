<?php
// Start the session and redirect people who aren't logged in.
session_start();
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
    <title>Lavender Acres Essential Oils | Recipes</title>
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
                  <a href="logout.php" class="nav-link">Log Out</a>
              </li>
              <li class="nav-item">
                  <a href="reset-password.php" class="nav-link">Reset Password</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link nav-item" href="https://github.com/mintdawn/lavender">Project GitHub</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link nav-item" href="https://portfolio.unicornpoint.net/">Portfolio</a>
              </li>
          </ul>
      </div>
  </nav>

  <div class="container col-md-6 p-4 m-4 mx-auto">
    <h1>Essential Oil Recipes</h1>

    </div>

</body>
</html>
