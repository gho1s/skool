<?php
	$servername = "localhost";
	$username = "";
	$password = "";

	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	echo "<h3 style = \"color:lime;\">Connected successfully</h3>";
?>