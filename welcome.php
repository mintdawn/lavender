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

    <div class="container-fluid p-md-4 p-2 mx-auto text-center text-secondary" style="background-color: #f0f0f0;">
      <div class="container-fluid bg-light text-center text-secondary">
      <h1>Welcome to Lavender Acres</h1>
        <div class="row p-2 rounded bg-light text-left">
          <h5>Account info for: <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h5>
          <br>
          <p>I am thinking about putting a sort of dashboard here with the various account functions prominently featured on the page. I could also make a link to a page that is a combination of FAQ on how to use the site and screen shots of how to use the login, create account, change password and logout features. It could be named support.php and it could be viewable without being logged in.</p>
        </div>
      </div>
    </div>
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
