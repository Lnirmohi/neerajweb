<?php
$x=$_POST['username'];
$y=$_POST['password'];
$servername = "localhost";
$username  = "root";
$password = "";
$dbname = "signin-database";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
	die(" Conn Failed : " . $conn->connect_error);
}

echo "Conn Success";

$sql = "INSERT INTO `form` (`username`,`password`) VALUES ('$x','$y')";

if ($conn->query($sql) === TRUE) {
	echo "New rec created";
} else {
	echo "Error" . $sql . "<br>"  . $conn->error;
}

$conn->close();
?>