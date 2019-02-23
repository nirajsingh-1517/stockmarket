
<head>
<title>Login</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
	<style>
	
	#a{
			
			width:700px;
			margin-left:20px;
			font-size:20px;
			margin-top:-100px;
	}
	#a1{
		width:600px;
		height:500px;
		margin-top:30px;
		margin-left:20px;
	}
	</style>
	
</head>
<body>

<div id="a1">
	<img class="mySlides w3-animate-fading" src="images/f1.jpg" style="width:78.6%;border-radius:15px;height:500px;width:600px">
	<img class="mySlides w3-animate-fading" src="images/f2.jpg" style="width:78.6%;border-radius:15px;height:500px;width:600px">
	<img class="mySlides w3-animate-fading" src="images/f3.jpg" style="width:78.6%;border-radius:15px;height:500px;width:600px">
	<img class="mySlides w3-animate-fading" src="images/f4.jpg" style="width:78.6%;border-radius:15px;height:500px;width:600px">
	</div>
	<div class="container" style="border-radius:25px;border:1px solid blue;width:500px;height:350px;margin-left:800px;margin-top:-500px">
			<form method="post" action="login-proces.php">
				<center><h2> User Login</h2></center>
				<hr/>
					<div class="form-group" style="width:400px;margin-left:30px">
						<lable for="email" class="control-lable">Email</label>
						<input type="email" name="email" class="form-control" autocomplete="off">
					</div>
					<div class="form-group" style="width:400px;margin-left:30px">
						<lable for="password" class="control-lable">Password</label>
						<input type="password" name="password" class="form-control" autocomplete="off">
					</div>
					<div class="form-group">
					<input type="submit" value="Login" class="btn btn-primary" style="margin-left:25px;"> 
					<a href=#">/Forgot Password</a>
					</div>
					<a href="register.php" style="margin-left:25px;font-size:20px">New User</a>			
			</form>
	</div>
	
		
	<div class="container" style="border-radius:25px;border:1px solid blue;width:500px;height:300px;margin-left:800px">
			<form method="post" action="adminhome-proces.php">
				<center><h2> Admin Login</h2></center>
				<hr/>
					<div class="form-group" style="width:400px;margin-left:30px">
						<lable for="email" class="control-lable">Email</label>
						<input type="email" name="email" class="form-control" autocomplete="off">
					</div>
					<div class="form-group" style="width:400px;margin-left:30px">
						<lable for="password" class="control-lable">Password</label>
						<input type="password" name="password" class="form-control" autocomplete="off">
					</div>
					<div class="form-group">
					<input type="submit" value="Login" class="btn btn-primary" style="margin-left:25px;">
					</div>		
			</form>
	</div>
	<div id="a">
	<p>It's more than an account opening, it's the start of a relationship.

That is the reason we offer more. In fact, we don't even call ours a Demat account. We call it the Sharekhan investment account. In addition to an array of trading platforms, we offer a wide world of research-based investment advice, latest trends and techniques of trading. 

So what if you haven't invested or traded before? Our team of experts, along with online classroom education, self help videos, read-alongs, newsletter and regular updates will help you get better at the art.</p>
	</div>
</body>


<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
	
    setTimeout(carousel, 4000);    
}
</script>