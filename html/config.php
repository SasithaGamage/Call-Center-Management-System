<?php

	$severname = "localhost";
	$passwors = "";
	$username = "root";
	$dbname = "call center";

	$conn = mysqli_connect($severname , $username , $passwors , $dbname);

	if($conn -> connect_error)
	{
		die("Connection error : " . $conn -> connect_error);
	}

	else
		echo "Successfully connected";


?>