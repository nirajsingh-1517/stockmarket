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
<div style= "height:400px;width:1000px;background-color:#d35537; margin:60px; padding:20px;border-radius:25px;margin-top:50px">
<form action="a.html" method="post" onsubmit ="return val()">

<table border="5" cellspacing="10" cellpadding="5" style="width:900px;background-color:white;margin-top:20px">
<h1 style="color:white">***Bank Details***</h1><br/>
<tr style="height:80px">
<th>Bank Name</th>
<th>Bank Logo</th>
<th>About Bank</th>
<th>Share Value</th>
<th>Action</th>
</tr>
<tr style="height:50px">
<td></td>
<td></td>
<td></td>
<td></td>
<td style="width:160px"><input type="button" value="Edit"/><input type="button" value="Active" style="margin-left:5px"/> <input type="button" value="Delete"/></td>
</tr>



</table>
</center>
</form>
</div>

</body>