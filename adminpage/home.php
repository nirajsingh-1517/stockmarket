<head>
	<style>
		
	.dropbtn {
		background-color: #4CAF50;
		color: white;
		padding: 16px;
		font-size: 16px;
		border: none;
		cursor: pointer;
		width:200px;
	}

	.dropdown {
		position: relative;
		display: inline-block;
	}

	.dropdown-content {
		display: none;
		position: absolute;
		background-color: #f9f9f9;
		min-width: 160px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
		width:200px;
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
							
							
	#a{
		height:350px;
		width:650px;
		border:5px solid red;
		margin-left:300px;
	}
	</style>
	

</head>

<body>



<div class="dropdown">
  <button class="dropbtn">MENUBER</button>
		<div class="dropdown-content">
			<a href="#">Banking Share</a>
			<a href="#">Gold Share</a>
			<a href="#">Link 3</a>
		</div>
</div>

<div id="a">

</div>

</body>
