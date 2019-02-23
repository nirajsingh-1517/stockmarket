<html>
<head>
<title>Registration</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
</head>
<body>
	<div class="container">
		<div style="width:500px;margin:50px auto;">
			<form method="post" action="register-proces.php">
				<center><h2>Register</h2></center>
				<hr/>
				<div class="form-group">
						<lable for="username" class="control-lable">Username</label>
						<input type="text" name="username" class="form-control" autocomplete="off">
					</div>
					<div class="form-group">
						<lable for="email" class="control-lable">Email</label>
						<input type="email" name="email" class="form-control" autocomplete="off">
					</div>
			
					<div class="form-group">
						<lable for="password" class="control-lable">Password</label>
						<input type="password" name="password" class="form-control" autocomplete="off">
					</div>
					<div class="form-group">
					<center><input type="submit" name="btn-register" value="Submit" class="btn btn-primary"></center>
					</div>
					<hr/>
					<a href="index.php">Login</a>
			
			</form>
		</div>
	</div>
</body>


</html>