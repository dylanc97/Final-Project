<?php
$servername = "localhost";
	$username = "root";

	$conn = new mysqli($servername, $username);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	mysqli_select_db($conn, "fp_db") ;

if ($_GET) {
    $gamename = $_GET['gname'];

    $response = ['game_name' => $gamename];

    $sql = "INSERT INTO game" .
    "(name, genre, link)VALUES('" .
    $_GET[gname] . "', '".$_GET[genre]. "', 'pc-builder-recfit.png');";
    
    mysqli_query($dbname, $sql);
    
    //header('Content-type: application/json');
    //echo json_encode($response);

} 

?>