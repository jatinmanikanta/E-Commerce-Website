<?php
	$name = $_POST['name'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	// Database connection
	$conn = new mysqli('localhost','root', '','gcom');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(name, lname, email, password) values(?, ?, ?, ?)");
		$stmt->bind_param("sssi", $name, $lname, $email, $password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registered successfully...";
		$stmt->close();
		$conn->close();
	}
?>