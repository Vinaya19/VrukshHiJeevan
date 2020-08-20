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

$fn1=$_POST['fn'];
$ln1=$_POST['ln'];
$e=$_POST['em'];
$a=$_POST['da'];

$sql = "INSERT INTO donate (fname,lname,email,amt) VALUES ('$fn1','$ln1','$e',$a)";

/*if ($conn->query($sql) === TRUE) {
    //echo "Database created successfully";
    header("Location:new_thanks.html");

} else {
    echo "Error in inserting: " . $conn->error;
}*/




$conn->close();
?>
</body>
</html>
