<?php 

if (isset($_POST["submit"])){

	$fname = $_POST["fname"];
	$email = $_POST["email"];
	$message = $_POST["message"];

	require_once 'db_inlcude_connect.php';
	require_once 'functions.php';

if (emptyContact($fname, $email, $message) !== false){
	header("location: ../contact.php?error=emptycontact");
	exit();
}
	
	}else{
			header("location: ../contact.php");
	exit();

	}
