<!doctype html>
<html>
<body>
<?php
$servername = "localhost";
$username = "id11463487_root";
$password = "mahima";
$db="id11463487_kalpvruksh";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = " select SUM(amt) as total_amt from donate ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
 
echo $row["total_amt"];






$conn->close();
?>
</body>
</html>
