<head></head>
<meta charset="UTF-8" />
<title>Stock Market</title>
<link href="style.css" rel="stylesheet" type="text/css">
<body>
<div id="wrap">
<!-- Start TC2000 widget -->
<iframe width="1000" noresize="noresize" scrolling="no" height="20" frameborder="0" src="https://widgets.tc2000.com/WidgetServer.ashx?id=52360"></iframe>
<!-- END TC2000 Widget -->

<nav id="mainnav">

<h1 id="textlogo">
Stock<span> Market</span>
</h1>
<ul>

	<!--li class="active"-->
	
	<li><a href="home.php">Home</a></li>
    <li><a href="services.php">Services</a></li>
    <li><a href="clients.php">Clients</a></li>
    <li><a href="about.php">Team</a></li>
    <li><a href="contact.php">Contact</a></li>
	</ul>

</nav>

<?php
	include_once('connection.php');
	$qry="SELECT * FROM `cementdetails` WHERE `status`='Active'";
	$qry_exe=mysqli_query($con,$qry);
?>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
<section id="content">
<header id="homeheader">
</header><br/>
<style>
	#a{
		width:300px;
		height:300px;
		border:2px solid red;
		float:left;
		margin:15px;
		padding:5px;
	}
</style>

<center><h1 style="color:red;font-size:25px">***Cement Details***</h1></center><br/>
<div class="row">
<?php
	while($row=mysqli_fetch_array($qry_exe))
	{
?>
		
			<div class="col-md-4" style="border:2px solid red;padding:15px;margin:5px;width:332px">
				<div>
					<!--<span style="margin-left:200px">
					<?=$row['logo']?>
					</span>-->
					<span style="color:#d35537;font-family: 'TeXGyreAdventor', Arial, sans-serif;">
					<h3><?=$row['name']?></h3>
					</span>
					<br>
					<?=$row['about']?>
					<br/><br/>
					<span style="color:red">
					Rs <?=$row['rate']?>/- per share
					<span><br/>
					<input type="button" value="View More" style="width:80px;height:30px;">
					<a href="buy.php"><input type="button" value="BUY" style="width:80px;height:30px;margin-left:130px;color:red"></a>
					
				</div>
			</div>
		
<?php
	}
?>
</div>
<script src="bootstrap/jquery.js"></script> 
<script src="bootstrap/js/bootstrap.js"></script>

