<?php
// Start the session and redirect people who aren't logged in.
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
require_once "config.php";

// reset the user's password
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    if(empty($new_password_err) && empty($confirm_password_err)){
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            if(mysqli_stmt_execute($stmt)){
                session_destroy();
                header("location: index.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lavender Acres Essential Oils | Reset Password</title>
    <link rel="stylesheet" href="styles.css" />
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,700" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="icon" type="image/png" href="img/icon.png" />
</head>
<body id="index-body">

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

<!-- Reset Password Form -->
<div class="row m-2 justify-content-center">
    <div class="container bg-light col-md-6 m-md-4 p-md-4 rounded mx-auto">
        <h2>Change Your Password</h2>
        <p>Enter a new password and confirm it to change your password.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
                <label>New Password</label>
                <input type="password" name="new_password" class="form-control" value="<?php echo $new_password; ?>" required>
                <span class="help-block"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" required>
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a class="btn btn-link" href="welcome.php">Cancel</a>
            </div>
        </form>
    </div>
  </div>
</body>
</html>
