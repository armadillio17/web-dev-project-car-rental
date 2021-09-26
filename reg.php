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
    
    <div >
      
    <!-- form -->
  <form  class="form_design" method="POST" action="inc_reg.php">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="email"><b>E-mail</b></label>
      <input type="email" name="email" placeholder="EMAIL...">
    <label for="pwd"><b>Password</b></label>
      <input type="password" name="pwd" placeholder="Password..." >
    <label for="fname"><b>First Name</b></label>
      <input type="text" name="fname" placeholder="First Name...">
    <label for="lname"><b>Last Name</b></label>
      <input type="text" name="lname" placeholder="Last Name...">
    <label for="street"><b>Street</b></label>
      <input type="text" name="street" placeholder="Street...">
    <label for="city"><b>City</b></label>
      <input type="text" name="city" placeholder="City...">
    <label for="country"><b>Country</b></label>
      <input type="text" name="country" placeholder="Country...">
    <button class="btn" type="submit" name="submit">Register</button>
    
<p class="signin"> Already have an account? <a href="login.php">LOGIN</a></p>
 

  </form>
  </div>
  
</div>
  
    


  

  <!-- footer -->
  <div class="footer-container">

  </div>
</body>
</html>