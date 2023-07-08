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
						$pno1Err="Only numeric value is allowed";
					}
			if(strlen($_POST["phno"])!=10)
					{
						$pno1Err="Mobile no must contain 10 digits";
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