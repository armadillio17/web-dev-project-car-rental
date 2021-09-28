<?php 

if(isset($_POST["submit"])){

	$email = $_POST['email'];
	$pwd = $_POST['pwd'];

	require_once 'db_include_connect.php';
	require_once 'functions.php';


	if(emptyLogin($email,$pwd) !== false){
		header("location: ../login.php?error=emptylogin");
		exit();
	}

	loginUser($conn, $email, $pwd);

} else {
	header("location: ../login.php");
	exit();
}

