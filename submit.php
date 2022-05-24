<?php
	$FirstName = $_post['FirstName'];
	$LastName = $_post['LastName'];
	$Email = $_post['Email'];
	$Password = $_post['Password'];
 	$ConfirmPassword = $_post['ConfirmPassword'];
 	//database connection
 	$conn = new mysqli('localhost','root','','project');
 	if($conn->connect_error){
 		die('connection failed : '.$conn->connect_error);
 	}
 	else
 	{
 		$stmt = $conn->prepare("insert into registration(FirstName,LastName,Email,Password,ConfirmPassword) values(?,?,?,?,?)");
 		$stmt->bind_param("sssss",$FirstName,$LastName,$Email,$Password,$ConfirmPassword);
 		$stmt->execute();
 		echo "registration successfully done....";
 		$stmt->close();
 		$conn->close();
 	}
?>