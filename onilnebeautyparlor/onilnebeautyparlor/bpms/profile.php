<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$name = $_POST['name'];

	// Save the user's information to a database
	// You'll need to replace the values for your specific database
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "bpmsdb";

	// Create connection
	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO users (user_name, password, email, name)
	VALUES ('$username', '$password', '$email', '$name')";

	if ($conn->query($sql) === TRUE) {
	  echo "User profile created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}
?>