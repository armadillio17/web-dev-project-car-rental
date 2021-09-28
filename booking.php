<?php
include 'header.php';
?>

<div class="booking">
	<form method="post" action="booking.php">
		<input class="cusname" type="text" name="cusname" placeholder="Enter your name . .">
		<input class="email" type="text" name="email" placeholder="Enter your email . .">
		<select name="carmodel" size="1">
			<option>--Choose Model--</option>
			<option>Toyota Wigo</option>
			<option>Toyota Hi-Ace</option>
			<option>Nissan Urban Premuim</option>
			<option>Toyota Inova</option>
			<option>Toyota Fortuner</option>
		<input type="date" name="book">
		<button type="submit" name="submit">Book</button>
		</select>
	</form>
</div>

<?php


if(isset($_POST['submit'])){
	$cusname = $_POST["cusname"];
	$email = $_POST["email"];

	require_once 'include/db_inlcude_connect.php';

	createSuccess($conn, $cusname, $email);

	

}

function createSuccess($conn, $cusname,$email){

	$sql = "INSERT INTO booking (customer_name, email) VALUES (?,?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)){
	header("location: ../carrental/booking.php?error=stmtfailed2");
	exit();
	}

	mysqli_stmt_bind_param($stmt, "ss", $cusname,$email);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: ../carrental/booking.php?error=none");
	exit();
}


if($_GET["error"] == "none"){
      echo '<script type="text/javascript">';
echo ' alert("Car Booked Reserved!")';  //not showing an alert box.
echo '</script>';
    }

	?>

<?php 

include 'footer.php';

?>