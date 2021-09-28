<?php 

if(isset($_POST["submit"])){

	$email = $_POST["email"];
	$pwd = $_POST["pwd"];
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$street = $_POST["street"];
	$city = $_POST["city"];
	$country = $_POST["country"];

	require_once 'db_include_connect.php';
	require_once 'functions.php';


	if(emptyEmail($email) !== false){
		header("location: ../reg.php?error=email");
		exit();
	}

	if(emptyPwd($pwd) !== false){
		header("location: ../reg.php?error=pwd");
		exit();
	}
	if(emptyFname($fname) !== false){
		header("location: ../reg.php?error=firstname");
		exit();
	}

	if(emptyLname($lname) !== false){
		header("location: ../reg.php?error=lastname");
		exit();
	}
	if(emptyStreet($street) !== false){
		header("location: ../reg.php?error=street");
		exit();
	}

	if(emptyCity($city) !== false){
		header("location: ../reg.php?error=city");
		exit();
	}

	if(emptyCountry($country) !== false){
		header("location: ../reg.php?error=country");
		exit();
	}



	if(invalidemail($email) !== false){
		header("location: ../reg.php?error=invalidemail");
		exit();
	}


	if(emailMatch($conn, $email) !== false){
		header("location: ../reg.php?error=emailtaken");
		exit();
	}

  
  createAccount($conn, $email,$pwd,$fname,$lname,$street,$city,$country);


}else{
  header("location: ../reg.php");
  exit();
}

