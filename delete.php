<?php
	
	$con=mysqli_connect("localhost","root","","laptopselling");

$a=$_GET['p_id'];

	$query="delete from add_product where p_id=$a";

mysqli_query($con,$query);

header('location:connect3.php');


?>