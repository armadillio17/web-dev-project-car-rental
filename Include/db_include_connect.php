<?php 

	//connect to database
	$conn = mysqli_connect('localhost', 'lynjk', '', 'lynjk');

	// check the data base
	if(!$conn){
		die('error: ' . mysqli_connect_error());
	}


?>
