<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "user_data";

	$conn = mysqli_connect($host,$user,$pass,$db);

	if(!$conn){
		echo "Failed to connect DB ".mysqli_connect_error($conn)."<br/>";
	}

?>