<?php 
	
include('include/db_inlcude_connect.php');

//login form variable
$email ='';
$pass ='';


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
    <div class="logo"><a href="index.html"><img src="images/LOGO.png" alt="Car Rental"></a></div>
    <div class="nav-menu">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Services</a></li>
        <li><a href="">Contact</a></li>
        <div class="login"><a href="login.php">Membership Login</a></div>
      </ul>
    </div>
  </div>

  <!-- hero -->
  <div class="hero-container">

  </div>
  <!-- about -->
  <div class="about-container">

  </div>
  <!-- services/products -->
  <div class="services-container">
    
  </div>

  <!-- Login form -->
  <!-- function of htmlspecialchars is para dli maka run unwanted program once ma submit ang info sa server-->
  <form class="login_form" method="POST" action="">
  <input class="email" type="text" name="email" placeholder="Email" value="<?php echo htmlspecialchars($email)?>">
  <input class="pass" type="password" name="password" placeholder="Password" value="<?php echo htmlspecialchars($pass)?>">
  </form>

  <!--button-->
  <div class="btn">
  <button value="submit" class="btn_1">Login</button>
  <p class="reg">Don't have an account? <a href="reg.php">Register</a></p>
  </div>
  </div>

  <!-- footer -->
  <div class="footer-container">

  </div>
</body>
</html>