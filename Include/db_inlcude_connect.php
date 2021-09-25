<?php 

	//connect to database
	$conn = mysqli_connect('localhost', 'carrental', '', 'carrental');

	// check the data base
	if(!$conn){
		die('error: ' . mysqli_connect_error());
	}


?>
