<?php
	$servername = "localhost";
	$username = "root";

	$conn = new mysqli($servername, $username);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	mysqli_select_db($conn, "fp_db") ;

	$sql = mysqli_query($conn, "SELECT userName FROM user WHERE user.userName='". $_POST["username"] . "' AND user.password='" . $_POST["password"] . "';");
	if(mysqli_num_rows($sql) == 1){
		echo"Login Successfull";
	}
	else{
		echo"ERROR incorrect username or password";
	}
?>