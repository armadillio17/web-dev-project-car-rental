<?php 
include 'db_conn.php';
include_once 'header.php';

?>

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
