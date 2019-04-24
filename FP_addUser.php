<?php
	$servername = "localhost";
	$username = "root";

	$conn = new mysqli($servername, $username);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	mysqli_select_db($conn, "fp_db") ;


	$sql = mysqli_query($conn, "SELECT userName FROM user WHERE user.userName='". $_POST["username"] . "';");
	if(mysqli_num_rows($sql) >= 1){
		echo"name already exists";
	}
	else{
	 $sql = "INSERT INTO user" .
	 "(name, userName, maxPrice, password, company)VALUES('" .
	 $_POST["name"] . "', '".$_POST["username"]. "', '". $_POST["price"] . "', '" .$_POST["password"] . "', '" .$_POST["cpuType"]. "');";
	mysqli_query($conn, $sql);
	header('Location: FP_GameSelect.html' . "?username=". $_POST["username"]);
	}
?>