<?php
	$first_name = $_POST['first_name'];
	$district = $_POST['district'];
	$mob_no = $_POST['mob_no'];
	$blood_group = $_POST['blood_group'];

	// Database connection
	$conn = new mysqli('localhost','root','','main_blood_bank');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into donors(first_name, district, mob_no, blood_group) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $first_name, $district, $mob_no, $blood_group);
		$execval = $stmt->execute();
		echo $execval;
		header("location:add_success.html");
		$stmt->close();
		$conn->close();
	}
?>