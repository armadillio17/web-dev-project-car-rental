<?php


function emptyEmail($email){
	$result;
	if (empty($email)){
		$result = true;
	}else{
		$result = false;
	}	
	return $result;
}

function emptyPwd($pwd){
	$result;
	if (empty($pwd)){
		$result = true;
	}else{
		$result = false;
	}	
	return $result;
}

function emptyFname($fname){
	$result;
	if (empty($fname)){
		$result = true;
	}else{
		$result = false;
	}	
	return $result;
}

function emptyLname($lname){
	$result;
	if (empty($lname)){
		$result = true;
	}else{
		$result = false;
	}	
	return $result;
}

function emptyStreet($street){
	$result;
	if (empty($street)){
		$result = true;
	}else{
		$result = false;
	}	
	return $result;
}

function emptyCity($city){
	$result;
	if (empty($city)){
		$result = true;
	}else{
		$result = false;
	}	
	return $result;
}

function emptyCountry($country){
	$result;
	if (empty($country)){
		$result = true;
	}else{
		$result = false;
	}	
	return $result;
}



function invalidemail($email){
	$result;
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$result = true;
	}else{
		$result = false;
	}	
	return $result;
}



function emailMatch($conn, $email){
	$sql = "SELECT * FROM users WHERE email = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)){
	header("location: ../reg.php?error=stmtfailed1");
	exit();
	}

	mysqli_stmt_bind_param($stmt, "s", $email);
	mysqli_stmt_execute($stmt);

	$resultEmail = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultEmail)){
		return $row;
	}else{
		$result = false;
		return $result;
	}
	mysqli_stmt_close($stmt);
}

//function create account 

function createAccount($conn, $email,$pwd,$fname,$lname,$street,$city,$country){

	$sql = "INSERT INTO users (email, pass, fname, lname, street, city, country) VALUES (?,?,?,?,?,?,?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)){
	header("location: ../reg.php?error=stmtfailed2");
	exit();
	}

	$hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($stmt, "sssssss", $email, $hashedpwd ,$fname,$lname,$street,$city,$country);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: ../reg.php?error=none");
	exit();
}

function emptyLogin($email,$pwd){
	$result;
	if (empty($email) || empty($pwd)){
		$result = true;
	}else{
		$result = false;
	}
	return $result;
}

function loginUser($conn, $email, $pwd){
	$userExist = emailMatch($conn, $email);

	if ($userExist === false) {
		header("location: ../login.php?error=wronglogin");
		exit();
	}

	$pwdHashed = $userExist["pass"];
	$checkPwd = password_verify($pwd, $pwdHashed);

	if ($checkPwd == false) {
		header("location: ../login.php?error=wrongpassword");
		exit();
	}

	else if ($checkPwd == true){
		session_start();
		$_SESSION["id"] = $userExist["id"];
		$_SESSION["email"] = $userExist["email"];
		header("location: ../index.php");
		exit();
	}
}


