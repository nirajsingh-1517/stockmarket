<meta charset="UTF-8" />
<title>Stock Market</title>
<link href="style.css" rel="stylesheet" type="text/css">
<style>
	.dropbtn {
		background-color: #4CAF50;
		color: white;
		padding: 5px;
		font-size: 15px;
		border: none;
		cursor: pointer;
		width:80px;
		
	}

	.dropdown {
		position: relative;
		display: inline-block;
	}

	.dropdown-content {
		display: none;
		position: absolute;
		background-color: #f9f9f9;
		min-width: 80px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
		width:80px;
		font-size: 10px;
	}

	.dropdown-content a {
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
	}

	.dropdown-content a:hover {
							background-color: #f1f1f1;
							}

	.dropdown:hover .dropdown-content {
									display: block;
									}

	.dropdown:hover .dropbtn {
							background-color: #3e8e41;
							}


</style>
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
    <li><a href="team.php">Team</a></li>
    <li><a href="contact.php">Contact</a></li>
	<li><div class="dropdown">
  <button class="dropbtn">Settings</button>
		<div class="dropdown-content">
			<a href="logout.php">Log out</a>
			<a href="adminhome.php">Admin Section</a>
		</div>
</div></li>

</ul>

</nav>






