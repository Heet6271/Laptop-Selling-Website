<!DOCTYPE html>
<html>
<head>
	<title>Admin View Product Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<style>
		/* Style for the view product page */
		body {
			background-color: #f8f9fa;
		}
		.container {
			margin-top: 30px;
		}
		.card {
			margin-bottom: 30px;
		}
		.card-header {
			background-color: #343a40;
			color: white;
			font-size: 18px;
			font-weight: bold;
		}
		.card-body {
			padding: 30px;
		}
		.product-img {
			width: 100%;
			max-width: 500px;
			height: auto;
		}
		.product-info {
			margin-top: 30px;
		}
		.product-info h2 {
			font-size: 24px;
			font-weight: bold;
			margin-bottom: 0;
		}
		.product-info p {
			font-size: 16px;
			margin-bottom: 0;
		}
		.product-info .price {
			font-size: 24px;
			font-weight: bold;
			color: #007bff;
			margin-top: 15px;
			margin-bottom: 0;
		}

				.btn-primary {
			background-color: #007bff;
			border-color: #007bff;
			color: #fff;
			font-size: 16px;
			font-weight: bold;
			padding: 12px 24px;
			border-radius: 4px;
			text-transform: uppercase;
			transition: background-color 0.3s ease, border-color 0.3s ease;
		}
		.btn-primary:hover {
			background-color: #0069d9;
			border-color: #0062cc;
			cursor: pointer;
		}
		<style type="text/css">
		.container {
		  margin-top: 50px;
		}

		form {
		  max-width: 500px;
		  margin: 0 auto;
		}

		form label {
		  font-weight: bold;
		}

		form .form-group {
		  margin-bottom: 20px;
		}

		form button {
		  margin-top: 20px;
		}
		
		span{
			color: red;
		}
	</style>
</head>
<body>

	<div class="container">
	  	<h2>Add New Product</h2>
	  	<form action="connect3.php" method="POST" onsubmit="return validate()">
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
		    <input type="submit" class="btn btn-primary" value="Add Product">
	  	</form>
	</div>
	<div class="container">
		
		<div class="card">
			<div class="card-header">
				List of Product
			</div>
			<button type="button" class="btn btn-primary"><a href="addProduct.html">Add Product</a></button>
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<img src="img/lp1.jpg" alt="Dell XPS 15" class="product-img">
					</div>
					<div class="col-md-6 product-info">
						<h2>Dell XPS 15</h2>
						<p>15.6-inch laptop with a stunning 4K OLED display.</p>
						<p>Intel Core i7-10750H processor, 16GB RAM, 512GB SSD.</p>
						<p class="price">$1,499</p>
						<div>
							<a href="#" class="btn btn-primary mr-2">Edit</a>
							<a href="delete.php" class="btn btn-danger">Delete</a>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<img src="img/lp2.jpg" alt="Dell XPS 15" class="product-img">
					</div>
					<div class="col-md-6 product-info">
						<h2>Dell XPS 15</h2>
						<p>15.6-inch laptop with a stunning 4K OLED display.</p>
						<p>Intel Core i7-10750H processor, 16GB RAM, 512GB SSD.</p>
						<p class="price">$1,499</p>
						<div>
							<a href="#" class="btn btn-primary mr-2">Edit</a>
							<a href="#" class="btn btn-danger">Delete</a>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<img src="img/lp3.jpg" alt="Dell XPS 15" class="product-img">
					</div>
					<div class="col-md-6 product-info">
						<h2>Dell XPS 15</h2>
						<p>15.6-inch laptop with a stunning 4K OLED display.</p>
						<p>Intel Core i7-10750H processor, 16GB RAM, 512GB SSD.</p>
						<p class="price">$1,499</p>
						<div>
							<a href="#" class="btn btn-primary mr-2">Edit</a>
							<a href="#" class="btn btn-danger">Delete</a>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<img src="img/lp1.jpg" alt="Dell XPS 15" class="product-img">
					</div>
					<div class="col-md-6 product-info">
						<h2>Dell XPS 15</h2>
						<p>15.6-inch laptop with a stunning 4K OLED display.</p>
						<p>Intel Core i7-10750H processor, 16GB RAM, 512GB SSD.</p>
						<p class="price">$1,499</p>
						<div>
							<a href="#" class="btn btn-primary mr-2">Edit</a>
							<a href="#" class="btn btn-danger">Delete</a>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<img src="img/dell2.jpg" alt="Dell XPS 15" class="product-img">
					</div>
					<div class="col-md-6 product-info">
						<h2>Dell XPS 15</h2>
						<p>15.6-inch laptop with a stunning 4K OLED display.</p>
						<p>Intel Core i7-10750H processor, 16GB RAM, 512GB SSD.</p>
						<p class="price">$1,499</p>
						<div>
							<a href="#" class="btn btn-primary mr-2">Edit</a>
							<a href="#" class="btn btn-danger">Delete</a>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<img src="img/macbook.jpg" alt="Dell XPS 15" class="product-img">
					</div>
					<div class="col-md-6 product-info">
						<h2>Dell XPS 15</h2>
						<p>15.6-inch laptop with a stunning 4K OLED display.</p>
						<p>Intel Core i7-10750H processor, 16GB RAM, 512GB SSD.</p>
						<p class="price">$1,499</p>
						<div>
							<a href="#" class="btn btn-primary mr-2">Edit</a>
							<a href="#" class="btn btn-danger">Delete</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function validate() {
			var productname = document.getElementById("name"); 
			var productdescription = document.getElementById("description");
			var productcomapany = document.getElementById("company");
			var productamount = document.getElementById("price");
			
			if (productname.value == "") {
				document.getElementById("pname").innerHTML = "Please enter product name";
				return false;
			}
			if (!isNaN(productname.value)) {
				document.getElementById("pname").innerHTML = "Please enter valid product name";
				return false;
			}
			if (productdescription.value == "") {
				document.getElementById("pdesc").innerHTML = "Please enter product description";
				return false;
			}
			if (!isNaN(productdescription.value)) {
				document.getElementById("pdesc").innerHTML = "Please enter valid product description";
				return false;
			}
			if (productcomapany.value == "") {
				document.getElementById("pcompany").innerHTML = "Please enter company name";
				return false;
			}
			if (!isNaN(productcomapany.value)) {
				document.getElementById("pcompany").innerHTML = "Please enter company name";
				return false;
			}
			if (productamount.value == "") {
				document.getElementById("pamount").innerHTML = "Please enter product price";
				return false;
			}
			if (isNaN(productamount.value)) {
				document.getElementById("pamount").innerHTML = "Please enter valid product price";
				return false;
			}
		}
	</script>
</body>
</html>
