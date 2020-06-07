<?php

$username= $_POST['username'];

$password=$_POST['password'];


if(!empty($username)){

	if(!empty($password)){

		$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="signin-database";

		$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

		if(mysqli_connect_error()){

				die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());

		}else {
			$sql = "INSERT INTO `form` (`username`,`password`) VALUES ('$username','$password')";

			if($conn->query($sql)===TRUE)
			{
				echo "New record is inserted sucessfully";
			} else {

				echo "Error: ". $sql ."".$conn->errror;
			}

			$conn->close();
		}
	} else{
		echo"Password should not be empty";
		die();
	}
} else {
	echo"Username should not be empty";
	die();
}
?>