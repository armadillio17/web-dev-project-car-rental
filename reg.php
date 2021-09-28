<?php 
include 'include/db_include_connect.php';
include_once 'header.php';

?>
<!-- hero -->
  <div class="hero-container">
    <!-- form -->
  <form  class="form_design" method="POST" action="include/inc_reg.php">
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
  

<?php 

  if (isset($_GET["error"])) {
    if($_GET["error"] == "email"){
      echo "<p>Email Required!</p>";
    }
    else if ($_GET["error"] == "password") {
     echo "<p>Password Required!</p>";
    }
    else if ($_GET["error"] == "firstname") {
     echo "<p>Firstname Required!</p>";
    }
    else if ($_GET["error"] == "lastname") {
     echo "<p>Lastname Required!</p>";
    }
    else if ($_GET["error"] == "street") {
     echo "<p>Street Required!</p>";
    }
    else if ($_GET["error"] == "city") {
     echo "<p>City Required!</p>";
    }
    else if ($_GET["error"] == "country"){
     echo "<p>Country Required!</p>";
    }
     else if ($_GET["error"] == "invalidemail") {
     echo "<p>Wrong Email!</p>";
    }
     else if ($_GET["error"] == "emailtaken") {
     echo "<p>Email is already taken!</p>";
    }
      else if ($_GET["error"] == "stmtfailed2") {
     echo "<p>Something went wrong!</p>";
    }
     else if ($_GET["error"]== "none") {
     echo "<p>You have sign up!</p>";
    }

  }

?>
  
<?php
include_once 'footer.php';
?>
