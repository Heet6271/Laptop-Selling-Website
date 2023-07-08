<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "laptopselling";

$data = mysqli_connect($host, $user, $password , $db);
if ($data === false) {
	die("connection error");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$useremail = $_POST["emailadd"];
	$userpass = $_POST['u_password'];

	$sql = "select * from user_register where u_email = '".$useremail."' AND u_password = '".$userpass."'";

	$result = mysqli_query($data, $sql);

	$row = mysqli_fetch_array($result);

		if($row["usertype"] == "user"){

			header("Location: http://localhost/LPSell/homepage.php");
		}


	elseif($row["usertype"] == "admin"){

		header("Location: http://localhost/LPSell/admindashboard.php");
	}

	else {
		header("Location: http://localhost/LPSell/reg.php");
	}
}



?>