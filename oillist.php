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
    <title>Welcome</title>
    <link rel="stylesheet" href="styles.css" />
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,700" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
  <img src="img/capstoneLogo.png" class="w-100" id="oil-logo" />
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="welcome.php">Lavender Acres</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link" href="oillist.php">Our Essential Oils</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="recipes.php">Recipes</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="about.php">More Information</a>
              </li>
              <li class="nav-item">
                  <a href="logout.php" class="nav-link">Log Out</a>
              </li>
              <li class="nav-item">
                  <a href="reset-password.php" class="nav-link">Reset Password</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="https://github.com/mintdawn/dsCapstone">Project GitHub</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="https://portfolio.unicornpoint.net/">Portfolio</a>
              </li>
          </ul>
      </div>
  </nav>

    <!-- List the Oils -->
    <div class="row" style="background-color: #f4e2f4;">

        <?php

        $host = 'capstoneserver.mysql.database.azure.com:3306';
        $username = 'mintdawn@capstoneserver';
        $password = 'Capstone!';
        $db_name = 'mydb';

        //Establishes the connection

        $conn = mysqli_init();
        mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
        if (mysqli_connect_errno($conn)) {
            die('Failed to connect to MySQL: '.mysqli_connect_error());
        }

        else
        {
            $result = $conn->query("SELECT * FROM oils");
            if (($result != 0) && ($result->num_rows > 0))
            {
                while($row = $result->fetch_assoc()) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $remedy = $row['remedy'];
                    $desc = $row['description'];
                    $image = $row['image'];
                    echo '<div class="col-md-4">';
                    echo '<div class="card result text-center m-2 p-4">';
                    echo '<h4 class="text-capitalize">'.$id.'.     '.$name.'</h4>';
                    echo '<img src="'.$image.'" class="oil-img mx-auto rounded" /><br>';
                    echo '<p><strong>Traditional Use:</strong>  '.$remedy.'</p>';
                    echo '<p><strong>Description:</strong>  '.$desc.'</p></div></div>';
                }
            }
            mysqli_close($conn);
        }

        ?>
    </div>
</body>
</html>
