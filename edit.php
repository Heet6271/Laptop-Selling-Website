<?php 

if(isset($_POST['submit']) && isset($_POST['casubmit']))
  {
  	$prod_id=$_GET['editid'];
  	//Getting Post Values
    $productName = mysqli_real_escape_string($conn, $_POST['productName']);
    $productDesc = mysqli_real_escape_string($conn, $_POST['productDesc']);
    $productPrice = mysqli_real_escape_string($conn, $_POST['productPrice']);
    $productComp = mysqli_real_escape_string($conn, $_POST['productComp']);
    $productImg = mysqli_real_escape_string($conn, $_POST['productImage']);

$query=mysqli_query($con, "update  add_product set p_name='$productName',p_desc='$productDesc', p_company='$productComp', p_price='$productPrice', p_img='$productImage' where ID='$p_id'");
     
    if ($query) {
    echo "<script>alert('You have successfully update the data');</script>";
    echo "<script type='text/javascript'> document.location ='connect3.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }$query=mysqli_query($con, "update  add_product set p_name='$productName',p_desc='$productDesc', p_company='$productComp', p_price='$productPrice', p_img='$productImage' where ID='$p_id'");

    if ($query) {
    echo "<script>alert('You have successfully update the data');</script>";
    echo "<script type='text/javascript'> document.location ='connect3.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }

?>