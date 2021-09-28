<?php 
	
include('include/db_include_connect.php');
include_once 'header.php';

?>
<!--//HTML code here -->

<section class="contactus_hero">
	<div class="bg">
	<div class="GIT1">
	<div class="color1"><h1>Get in touch</h1>
	<p>Need help?</p>
	<p>You can use form below to send us an email<br><span style="color:#FCAF13">OR</span><br>Ping Us <span style="color:#FCAF13">+639111111111</span></p>
</div>
</div>
<div class="contact_form">
	<h2>CONTACT FORM</h2>
    <form input="POST" action="include/inc_contactus.php">
      <input type="text" name="fname" placeholder="Enter your name">
      <input type="email" name="email" placeholder="Email . . .">
      <input type="text" name="message" placeholder="Enter your message">
      <button class="btn" type="submit" name="submit">Send</button>
    </form>
</div>
<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506610.00973452744!2d125.17086405668141!3d7.253278882592453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96d9f519e327f%3A0xb53a24589f79c573!2sDavao%20City%2C%20Davao%20del%20Sur!5e0!3m2!1sen!2sph!4v1632845109863!5m2!1sen!2sph" width="1000" height="200" style="border-radius: 25px;" allowfullscreen="" loading="lazy"></iframe>

</div>

<div class="GIT">
		<div class="color">
					<p class="bold">Address:</p><p>  47 St. Floral Avenue, Davao City, Philippines</p>
						<p class="bold">Email: </p>
						<p>lynjk@gmail.com</p>
						<p class="bold"> Phone:</p>
						<p>+639111111111</p>
	</div>
	</div>
	</div>


</section>

  <?php 

  if (isset($_GET["error"])) {
    if($_GET["error"] == "emptyContact"){
      echo "<p>Details Required!</p>";
    }
   }

?>



