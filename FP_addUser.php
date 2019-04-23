// User insert php
<?php
$servername = "127.0.0.1";
$username = "root@localhost";
$password = "Mysql29";

$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

mysqli_select_db($dbname, "fp_db") ;

$sql = "INSERT INTO user" .
 "(name, userName, maxPrice, password, company)VALUES('" .
 $_POST[name] . "', '".$_POST[username]. "', '". $_POST[price] . "', '" .$_POST[password] . "', '" .$_POST[cpuType]. "');";

mysqli_query($dbname, $sql);
?>