<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

 <?php
$prod_id=$_GET['editid'];
$ret=mysqli_query($con,"select * from add_product where p_id='$prod_id'");
while ($row=mysqli_fetch_array($ret)) {
?>

<div class="container">
	  	<h2>Add New Product</h2>
	  	<form action="edit.php" method="POST" onsubmit="return validate()">
		    <div class="form-group">
		      <label for="name">Product Name:</label>
		      <input type="text" class="form-control" id="name" name="productName" > <span id="pname"></span>
		    </div>
		    <div class="form-group">
		      <label for="description">Product Description:</label>
		      <textarea class="form-control" id="description" name="productDesc" rows="5" ></textarea><span id="pdesc"></span>
		    </div>
		    <div class="form-group">
		      <label for="company">Product Company:</label>
		      <input type="text" class="form-control" id="company" name="productComp" ></input><span id="pcompany"></span>
		    </div>
		    <div class="form-group">
		      <label for="price">Price:</label>
		      <input type="number" class="form-control" id="price" name="productPrice" ><span id="pamount"></span>
		    </div>
		    <div class="form-group">
		      <label for="image">Product Image:</label>
		      <input type="file" class="form-control-file" id="image" name="productImage" >
		    </div>
		    <input type="hidden" value="casubmit" name="casubmit">
		    <input type="submit" name="submit"class="btn btn-primary" value="Update Product">
	  	</form>
	</div>
</body>
</html>