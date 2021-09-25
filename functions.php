<?php

function emptyreg($email,$pwd,$fname,$lname,$street,$city,$country,$zip){
	$result;
	if (empty($email) || empty($pwd) || empty($fname) || empty($lname) || empty($street) || empty($city) || empty($country) || empty($zip))	{
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


function invalidpwd($pwd){
	$result;
	if (!preg_match("/^[a-z-A-Z0-9]*$/", $pwd)){
		$result = true;
	}else{
		$result = false;
	}	
	return $result;
}

function invalidzip($zip){
	$result;
	if (preg_match("/^[0-9]*$/", $zip)){
		$result = true;
	}else{
		$result = false;
	}	
	return $result;
}

function emailMatch($conn, $email){
	$sql = "SELECT * FROM registration WHERE email = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)){
	header("location: ../reg.php?error=stmtfailed1");
	exit();
	}

	mysqli_stmt_bind_param($stmt, "s", $email);
	mysqli_stmt_excute($stmt);

	$resultEmail = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultEmail)){
		return $row;
	}else{
		$result = false;
		return $result;
	}
	mysqli_stmt_close($stmt);
}

function createAccount($conn, $email,$pwd,$fname,$lname,$street,$city,$country,$zip){
	$sql = "INSERT INTO users (email, password, fname, lname, street, city, country, zip) VALUE (?,?,?,?,?,?,?,?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)){
	header("location: ../reg.php?error=stmtfailed2");
	exit();
	}

	$hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($stmt, "ssssssss", $email, $hashedpwd ,$fname,$lname,$street,$city,$country,$zip);
	mysqli_stmt_excute($stmt);
	mysqli_stmt_close($stmt);
	header("location: ../reg.php?error=none");
	exit();
}

