<?php
	// $firstName = $_POST['firstName'];
	// $lastName = $_POST['lastName'];
	// $gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	

	// Database connection
	$conn = new mysqli('localhost','root','1904','login');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into login(email, password) values(?,?)");
		$stmt->bind_param("ss", $email, $password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Login successfully...";
		$stmt->close();
		$conn->close();
	}
?>