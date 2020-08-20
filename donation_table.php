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
$sql="CREATE TABLE  donate(ID int(10) AUTO_INCREMENT  PRIMARY KEY, fname varchar(30) , lname varchar(30), email varchar(30),amt int(50)  )";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();
?>
</body>
</html>
