<?php

	$server = "localhost";
	$user = "root";
	$password = "";

	$conn = mysqli_connect($server, $user, $password);

	if($conn -> connect_error){
		die("Connection failed " . $conn->connect_error);
	}

	$ronak = "ronak";
?>