<?php 
include 'db_conn.php';
include_once 'header.php';

?>
<!-- hero -->
  <div class="hero-container">
  
    <!-- form -->
  <form class="form_design_Login" method="POST" action="">
    <h1>Log-in</h1>
    <hr>
    <label for="email"><b>E-mail</b></label>
    <input type="email" name="email" placeholder="EMAIL...">
    <label for="pwd"><b>Password</b></label>
    <input type="password" name="pwd" placeholder="Password...">
    <button class="btn" type="submit" name="submit">Login</button>
      <div class="signin">
    <p> Don't have an account? <a href="reg.php">Register</a></p>
  </div>
  </form>
</div>

    
 <?php 

  if (isset($_GET["error"])) {
    if($_GET["error"] == "emptylogin"){
      echo "<p>Email and Password Required!</p>";
    }
    else if($_GET["error"] == "wronglogin"){
      echo "<p>Wrong Email and Password!</p>";
    }

    else if($_GET["error"] == "wrongpassword"){
      echo "<p>Wrong Password!</p>";
    }
    
  }
include_once 'footer.php';
?>
