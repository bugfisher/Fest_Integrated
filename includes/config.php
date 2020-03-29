<?php
	$host = "localhost";
	$user = "mynamei3_root";
	$pass = "vivek";
	$db = "mynamei3_sports";
	
	$conn = new mysqli($host, $user, $pass, $db);
	if($conn->connect_error){
		echo "Failed:" . $conn->connect_error;
	}
?>
