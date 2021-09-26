<?php 
include 'db_conn.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Car Rental</title>
</head>
<body>
  <!-- navbar -->
  <div class="navbar-container">
    <div class="logo"><a href="index.php"><img src="images/LOGO.png" alt="Car Rental"></a></div>
    <div class="nav-menu">
      <ul>
        <li><a  class="active" href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="contact.php">Contact</a></li>
        <div class="login"><a href="login.php">Membership Login</a></div>
      </ul>
    </div>
  </div>

  <!-- hero -->
  <div class="hero-container">
    <!-- form -->
  <form class="form_design" method="POST" action="">
    <h1>Log-in</h1>
    <hr>
    <input type="email" name="email" placeholder="EMAIL...">
    <input type="password" name="pwd" placeholder="Password...">
    <button class="btn" type="submit" name="submit">Login</button>
      <div class="signin">
    <p> Don't have an account? <a href="reg.php">Register</a></p>
  </div>
  </form>


    
  </div>
  

  <!-- footer -->
  <div class="footer-container">

  </div>
</body>
</html>