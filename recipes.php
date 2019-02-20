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

  <div class="container-fluid p-md-4 mx-auto text-center text-secondary" style="background-color: #f0f0f0;">
    <div class="container p-md-4 bg-light text-center text-secondary">
    <h1>Random Essential Oil Recipe</h1>
    <br>
      <p>Add 6 drops of each oil into either a difuser with water or a carrier oil such as grape seed or jojoba oil. Difuser blends should be difused into a room and inhaled to provide desired effects. Oils blended into a carrier oil should be massaged into the bottoms of the feet or placed on the affected area for best results.</p>

      <?php
      // draw 3 random oils and put them on a card.
        require_once "config.php";
        $result = $link->query("SELECT name, remedy FROM oils order by RAND() LIMIT 3");
            if (($result != 0) && ($result->num_rows > 0))
              {
                while($row = $result->fetch_assoc()) {
                      $name = $row['name'];
                      $remedy = $row['remedy'];
                      echo '<p style="color: violet;"><strong>'.$name.' is good for '.$remedy.'</strong></p>';
                }
              }
            mysqli_close($link);
        ?>
        <!-- use a drop down menu to list all oils used for a specific treatment -->
        <hr>
        <h3>View all the oils used for a certain purpose</h3>
        <br>
        <form method="post" enctype="multipart/form-data">
        <div class="col-md-6 mx-auto form-group">
          <select class="form-control" name="remedy-select" id="remedy-select">
            <option value="" selected>Please select a problem.</option>
            <option value="nausea">nausea</option>
            <option value="female issues">female issues</option>
            <option value="grounding">grounding</option>
            <option value="colds">colds</option>
            <option value="pain">pain</option>
            <option value="skin issues">skin issues</option>
            <option value="uplifting">uplifting</option>
            <option value="antibacterial">anti-bacterial</option>
            <option value="focus">focus</option>
            <option value="anxiety">anxiety</option>
            <option value="depression">depression</option>
            <option value="stress">stress</option>
          </select>
          <br>
          <button type="submit" class="btn btn-dark">Submit</button>
        </div>
      </form>

      <div class="container mx-auto text-center bg-light p-md-4">
        <div class="row justify-content-center">
        <?php
      // display particular oils based on drop down choice.
      if(isset($_POST)){
      include 'config.php';
      $remedy = $_POST['remedy-select'];
      $result = $link->query("SELECT * FROM oils WHERE remedy = '$remedy' ORDER BY name ASC");
      if (($result != 0) && ($result->num_rows > 0))
        {
          while($row = $result->fetch_assoc()) {
              $name = $row['name'];
              $treat = $row['remedy'];
              $desc = $row['description'];
              $image = $row['image'];
              echo '<div class="col-md-4">';
              echo '<div class="result text-center p-md-2">';
              echo '<h4 class="text-capitalize">'.$name.'</h4>';
              echo '<img src="'.$image.'" class="oil-img mx-auto rounded-circle p-2" /><br>';
              echo '<p><strong>Traditional Use:</strong>  '.$treat.'</p>';
              echo '<p><strong>Description:</strong>  '.$desc.'</p></div></div>';
          }
        }
      mysqli_close($link);
    }
      ?>
        </div>
      </div>
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
