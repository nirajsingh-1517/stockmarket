<?php
include_once "connection.php";
$qry = "SELECT * FROM `itsectordetails` WHERE id=".$_REQUEST['id'];
$qry_exec = mysqli_query($con,$qry);
$row=mysqli_fetch_array($qry_exec);
?>


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
<center>
<div style= "height:500px;width:500px;background-color:#d35537; margin:60px; padding:20px;border-radius:25px;margin-top:-10px">
<form action="edit-itsectorproces.php" method="post" onsubmit ="return val()">

<table border="0" cellspacing="10" cellpadding="5">
<h1 style="color:white">Edit Itsector Information</h1>
<input type="hidden" id="id" name="id" value="<?=$_REQUEST['id']?>">
<tr>
<td style="color:white;font-size:30px">Itsector Name:</td>
<td><input type="text" id="name" name="name" value="<?=$row['name']?>" onblur="validName()" onfocus="myFunction(this)" class="sh"></td>
<td><span id="valName" style="color:white"></span></td>
</tr>


<tr>
<td style="color:white;font-size:30px">About Itsector:</td>
<td><input type="text" id="about" name="about" value="<?=$row['about']?>" onblur="validCont()" onfocus="myFunction(this)" class="sh"></td>
<td><span id="valCont" style="color:white"></span></td>
</tr>


<tr>
<td style="color:white;font-size:30px">Share Value:</td>
<td><input type="number" id="rate" name="rate" value="<?=$row['rate']?>" onblur="validEmail()" onfocus="myFunction(this)" class="sh"></td>
<td><span id="valEmail" style="color:white"></span></td>
</tr>


<tr>
<td><input type="Submit" value="SAVE" class="an"></td>
<td><input type="reset" value="CANCEL" class="an"></td>
</tr>
</table>
</center>
</form>
</div>

</body>