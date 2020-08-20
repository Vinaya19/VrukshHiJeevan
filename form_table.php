<!doctype html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="kalpvruksh";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Create table
$sql="CREATE TABLE volunteer(ID int(10) AUTO_INCREMENT  PRIMARY KEY, fname varchar(30) , lname varchar(30),  age int(10), contact int(20) , email varchar(30))";

if ($conn->query($sql) === TRUE) {
    echo "Table volunteer created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();
?>
</body>
</html>
