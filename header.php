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
    <div class="logo"><a href="index.html"><img src="images/LOGO.png" alt="Car Rental"></a></div>
    <div class="nav-menu">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a href="contact.html">Contact</a></li>
        <?php 
          if (isset($_SESSION["id"])) {
            echo "<div><a href='index.php'>Profile Page</a></div>";
            echo "<div><a href='index.php'>Log out</a></div>";
          } else {
            echo "<div><a href='login.php'>Membership Login</a></div>";
          }
        ?>
         </ul>
    </div>
  </div>

  <!-- hero -->
  <div class="hero-container">

  </div>