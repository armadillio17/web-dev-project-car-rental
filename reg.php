<?php 

//form registration variables
$email ='';
$pass ='';
$fname = '';
$lname = '';
$street ='';
$city ='';
$country = '';
$zip = '';



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
  <!--signup--> 
  <!-- form -->
  <div class="signup-container"></div>
  <h2 class="signup">Sign Up</h2>

  <form class="reg_form" method="POST" action="login.php">
  <input class="email" type="text" name="email" placeholder="Email" value="<?php echo htmlspecialchars($email)?>">
  <input class="pass" type="password" name="password" placeholder="Password" value="<?php echo htmlspecialchars($pass)?>">
  <input class="fname" type="text" name="fname" placeholder="First Name" value="<?php echo htmlspecialchars($fname)?>">
  <input class="lname" type="text" name="lname" placeholder="Last Name" value="<?php echo htmlspecialchars($lname)?>">
  <input class="street" type="text" name="street" placeholder="Street" value="<?php echo htmlspecialchars($street)?>">
  <input class="city" type="text" name="city" placeholder="City" value="<?php echo htmlspecialchars($city)?>">
  <input class="country" type="text" name="country" placeholder="Country" value="<?php echo htmlspecialchars($country)?>">
  <input class="zip" type="text" name="zip" placeholder="Zip Code" value="<?php echo htmlspecialchars($zip)?>">
  </form>

  <!--button-->
  <div class="btn">
  <button value="submit" class="btn_2">Register</button>
  <p class="reg">Already have an account? <a href="login.php">Login</a></p>
  </div>


  <!-- footer -->
  <div class="footer-container">

  </div>
</body>