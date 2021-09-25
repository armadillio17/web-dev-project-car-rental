<?php 

if(isset($_POST["submit"])){

	$email = $_POST["email"];
	$pwd = $_POST["password"];
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$street = $_POST["street"];
	$city = $_POST["city"];
	$country = $_POST["country"];
	$zip = $_POST["zip"];

	require_once 'db_inlcude_connect.php';
	require_once 'functions.php';
//error handlers - errors
	if(emptyreg($email,$pwd,$fname,$lname,$street,$city,$country,$zip) !== false){
		header("location: ../reg.php?error=empty");
		exit();
	}

	if(invalidemail($email) !== false){
		header("location: ../reg.php?error=invalidemail");
		exit();
	}

	if(invalidpwd($pwd)!== false){
		header("location: ../reg.php?error=invalidpassword");
		exit();
	}

	if(emailMatch($conn, $email)!== false){
		header("location: ../reg.php?error=emailtaken");
		exit();
	}

	if(invalidzip($zip) !== false){
		header("location: ../reg.php?error=emptyinput");
		exit();
	}
  
  createAccount($email,$pwd,$fname,$lname,$street,$city,$country,$zip);


}else{
  header("location: ../reg.php");
  exit();
}

