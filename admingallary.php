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
							
							
	
</style>

<center><h1 style="color:Red;margin-top:80px">Admin Gallary</h1></center>

<div class="dropdown" style="margin-left:100px;margin-top:100px">
  <button class="dropbtn">BANK INFORMATION</button>
		<div class="dropdown-content">
			<a href="addbankdetails.php">ADD BANK DETAILS</a>
			<a href="viewbankdetails.php">VIEW BANK DETAILS</a>
			
		</div>
</div>

<div class="dropdown" style="margin-left:30px;margin-top:100px">
  <button class="dropbtn">GOLD INFORMATION</button>
		<div class="dropdown-content">
			<a href="addgolddetails.php">ADD GOLD DETAILS</a>
			<a href="viewgolddetails.php">VIEW GOLD DETAILS</a>
			
		</div>
</div>

<div class="dropdown" style="margin-left:30px;margin-top:100px">
  <button class="dropbtn">ITSECTOR INFORMATION</button>
		<div class="dropdown-content">
			<a href="additsectordetails.php">ADD ITSECTOR DETAILS</a>
			<a href="viewitsectordetails.php">VIEW ITSECTOR DETAILS</a>
			
		</div>
</div>

<div class="dropdown" style="margin-left:30px;margin-top:100px">
  <button class="dropbtn">CEMENT INFORMATION</button>
		<div class="dropdown-content">
			<a href="addcementdetails.php">ADD CEMENT DETAILS</a>
			<a href="viewcementdetails.php">VIEW CEMENT DETAILS</a>
			
		</div>
</div>

<div class="dropdown" style="margin-left:30px;margin-top:100px">
  <button class="dropbtn">TELECOM SECTOR INFORMATION</button>
		<div class="dropdown-content">
			<a href="addtelecomdetails.php">ADD TELECOM DETAILS</a>
			<a href="viewtelecomdetails.php">VIEW TELECOM DETAILS</a>
			
		</div>
</div>
