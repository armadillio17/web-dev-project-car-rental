<?php 

if(isset($_POST["submit"])){

	$email = $_POST['email'];
	$pwd = $_POST['password'];

	require_once 'db_inlcude_connect.php';
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

