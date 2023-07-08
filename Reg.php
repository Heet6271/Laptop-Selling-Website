<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">l̥
<style>
.error {
color: red;
}
</style>
</head>
<body style="background-color: white;">


<?php
	$fnameErr = $lnameErr = $addErr = $emailErr = $passErr = $cpassErr = $phonoErr = "";
	if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			if(empty($_POST["username"]))
			{
				$fnameErr="First name is required";
			}else{
					if(!preg_match("/^[a-zA-Z ]*$/",$_POST["username"]))
				{
					$fnameErr="Only Alphabets and white space are allow";
				}
			}
			if(empty($_POST["lname"]))
			{
				$lnameErr="Last name is required";
			}else{
					if(!preg_match("/^[a-zA-Z ]*$/",$_POST["lname"]))
				{
					$lnameErr="Only Alphabets and white space are allow";
				}
			}
			if(empty($_POST["add"]))
				{
					$addErr="Address is required";
				}
			if(empty($_POST["email"]))
				{
					$emailErr="Email is required";
				}else{
						if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))
					{
						$emailErr="Invalid email format";
					}
				}
			if(empty($_POST["phno"]))
				{
					$pno1Err="Phone no is required";
				}else{
						if(!preg_match ("/^[0-9]*$/",$_POST["phno"]))
					{
						$phonoErr="Only numeric value is allowed";
					}
			if(strlen($_POST["phno"])!=10)
					{
						$phonoErr="Mobile no must contain 10 digits";
					}
				}
			if(empty($_POST["password"]))
					{
						$passErr="Password is required";
					}
			if(empty($_POST["cpasswprd"]))
				{
					$cpassErr="Confirm Password is required";
				}else{
			if($_POST["password"]!=$_POST["cpassword"])
				{
					$cpassErr="Password not match";
				}
			}
		}

?>

<div class="container">
<div class="row">
<div class="col-md-6 offset-md-3">
<div class="card">
<div class="card-body">
<h2 class="text-center text-success">Register</h2>
<form id="register" action="connect.php" method="post">
	<div class="mb-3">
		<label>First Name</label>
		<input name="username" type="text" class="form-control">
		<span id="username" class="error"><?php echo $fnameErr;?></span>
	</div>
	<div class="mb-3">
		<label>Last Name</label>
		<input name="lname" type="text" class="form-control">
		<span id="lname" class="error"><?php echo $lnameErr;?></span>
	</div>
	<div class="mb-3">
		<label>Address</label>
		<input name="add" type="text" class="form-control">
		<span id="add" class="error"><?php echo $addErr;?></span>
	</div>
	<div class="mb-3">
		<label> Email Address</label>
		<input name="email" type="text" class="form-control">
		<span id="email" class="error"><?php echo $emailErr;?></span>
	</div>
	<div class="mb-3">
		<label>Password</label>
		<input id="password" name="password" type="password" class="form-control">
		<span id="password" class="error"><?php echo $passErr;?></span>
	</div>
	<div class="mb-3">
		<label>Confirm Password</label>
		<input name="cpassword" type="text" class="form-control">
		<span id="cpassword" class="error"><?php echo $cpassErr;?></span>
	</div>
	<div class="mb-3">
		<label>Phno</label>
		<input name="phno" type="text" class="form-control">
		<span id="phno" class="error"><?php echo $phonoErr;?></span>
</div>
<button class="btn btn-primary col-md-4 offset-md-4">Register</button>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
</body>
</html