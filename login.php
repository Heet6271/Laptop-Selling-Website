<html>
<head>
	<title>Login Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card mt-5">
				<div class="card-body">
					<h3 class="text-center mb-4">Login</h3>
					<form action="connect1.php" method="post">
						<div class="form-group">
							<label>Email:</label>
							<input type="email" name="emailadd" class="form-control" placeholder="Enter email">
						</div>
						<div class="form-group">
							<label>Password:</label>
							<input type="password" name="u_password" class="form-control" placeholder="Enter password">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block">Login</button>
						</div>
						<div class="form-group text-center">
							<a href="forgotpass.html">Forgot password?</a>
						</div>
					</form>
					<div class="text-center">
						Don't have an account? <a href="signup.html">Sign up</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>