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
    <title>Welcome</title>
    <link rel="stylesheet" href="styles.css" />
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,700" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Laila:400,700" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/icon.png" />
</head>
<body>
  <img src="img/capstoneLogo.png" class="img-fluid" id="oil-logo" />

  <!-- navbar -->
  <nav class="nav navbar navbar-expand-lg navbar-light nav-fill">
    <a class="navbar-brand p-2" href="welcome.php">
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

  <!-- section header -->
  <div class="container-fluid section-head text-center">
    <h2>20 Oils to Kickstart Your Oil Collection</h2>
  </div>

    <!-- List the Oils -->
        <div class="container-fluid p-4 text-center text-secondary">
        <div class="row">

          <?php
          // show a neat list of the essential oils
              include 'config.php';
              $result = $link->query("SELECT * FROM oils");
              if (($result != 0) && ($result->num_rows > 0))
              {
                  while($row = $result->fetch_assoc()) {
                      $id = $row['id'];
                      $name = $row['name'];
                      $remedy = $row['remedy'];
                      $desc = $row['description'];
                      $image = $row['image'];
                      echo '<div class="col-md-3">';
                      echo '<div class="result text-center p-4">';
                      echo '<h4 class="text-capitalize">'.$name.'</h4>';
                      echo '<img src="'.$image.'" class="oil-img mx-auto rounded-circle m-2 p-2" /><br>';
                      echo '<p><strong>Traditional Use:</strong>  '.$remedy.'</p>';
                      echo '<p><strong>Description:</strong>  '.$desc.'</p></div></div>';
                  }
              }
              mysqli_close($link);
          ?>
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
  </footer>
</body>
</html>
