<style>

	.sh{padding:10px;
    margin:6px;
	border-radius:8px;
	border:1px solid orange;}
	
.an{
	padding:15px 40px;
	margin:15px;
		border-radius:8px;
	border:3px solid orange;
	background-color:white;
	}
	
.an:hover{background-color:#d35537;
border:3px solid white;
color:red;
font-size:15px;	
}


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

<body>
<script src="valid.js"></script>

<div class="dropdown">
  <button class="dropbtn">BANK NAME</button>
		<div class="dropdown-content">
			<a href="#">ICICI BANK</a>
			<a href="#">HDFC BANK</a>
			<a href="#">CANARA BANK</a>
			<a href="#">PN BANK</a>
			<a href="#">AXIS BANK</a>
			<a href="#">HSBC BANK</a>
			<a href="#">SBI BANK</a>
			<a href="#">UNITED BANK</a>
			<a href="#">UCO BANK</a>
		</div>
</div>
<center>
<div style= "height:500px;width:500px;background-color:#d35537; margin:60px; padding:20px;border-radius:25px;margin-top:-10px">
<form action="a.html" method="post" onsubmit ="return val()">

<table border="0" cellspacing="10" cellpadding="5">
<h1 style="color:white">Add Bank Details</h1>
<tr>
<td style="color:white;font-size:30px">Bank Name:</td>
<td><input type="text" id="Name" onblur="validName()" onfocus="myFunction(this)" class="sh"></td>
<td><span id="valName" style="color:white"></span></td>
</tr>


<tr>
<td style="color:white;font-size:30px">About Bank:</td>
<td><input type="text" id="Cont" onblur="validCont()" onfocus="myFunction(this)" class="sh"></td>
<td><span id="valCont" style="color:white"></span></td>
</tr>


<tr>
<td style="color:white;font-size:30px">Share Value:</td>
<td><input type="number" id="rate" onblur="validEmail()" onfocus="myFunction(this)" class="sh"></td>
<td><span id="valEmail" style="color:white"></span></td>
</tr>


<tr>
<td style="color:white;font-size:30px">Bank Logo:</td>
<td><input type="file" id="image" onblur="validimage()" onfocus="myFunction(this)" class="sh" style="width:190px;background-color:white"></td>
<td><span id="valCard" style="color:white"></span></td>
</tr>




<tr>
<td><input type="Submit" value="SAVE" class="an"></td>
<td><input type="reset" value="Cancel" class="an"></td>
</tr>
</table>
</center>
</form>
</div>

</body>