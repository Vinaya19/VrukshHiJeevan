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
$a=$_POST['age'];
$c=$_POST['contact'];
$e=$_POST['em'];

$sql = "INSERT INTO volunteer (fname,lname,age,contact,email) VALUES ('$fn1','$ln1',$a,$c,'$e')";


/*if ($conn->query($sql) === TRUE) {
    //echo "Record inserted successfully";
	header("Location:form_valid.html");


} else {
    echo "Error creating table: " . $conn->error;
}*/


$conn->close();
?>
</body>
</html>
