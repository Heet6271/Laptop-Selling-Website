<?php
	
	header("Location: http://localhost/LPSell/login.php");

	$username = $_POST['username'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$phno = $_POST['phno'];

	$conn = new mysqli('localhost' , 'root', '', 'laptopselling');
	if ($conn -> connect_error) {
		die('Connection Failed :' . $conn -> connect_error);
	}else
	{
		$stmt = $conn -> prepare("insert into user_register (u_name, l_name, u_email, u_password, u_cpassword, u_phonono) values(?, ?, ?, ?, ?, ?)");
		$stmt -> bind_param("sssssi", $username, $lname, $email, $password, $cpassword, $phno);
		$stmt -> execute();
		echo "Registration Successfully...";
		$stmt ->close();
		$conn -> close();
	}

?>