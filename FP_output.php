
$servername = "localhost";
$username = "root";
$password = "Mysql29";
$dbname = "fp_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT name, price, link FROM parts";
$result = $conn->query($sql);

if(