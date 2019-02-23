
<?php include "header.php" ?>

<section id="content">
<header id="homeheader">
</header>

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
color:white;
font-size:15px;

	
}
	


</style>
<script src="valid.js"></script>
<center>
<div style= "height:600px;background-color:#d35537; margin:60px; padding:20px;border-radius:25px">
<form action="a.html" method="post" onsubmit ="return val()">

<table border="0" cellspacing="2" cellpadding="20" style="margin-top:50px">
<center style="background-color:White;font-size:40px">Customer Details</center>

<tr>
<td style="color:white">Name:</td>
<td><input type="text" id="Name" placeholder="Enter your Name" onblur="validName()" onfocus="myFunction(this)" class="sh"></td>
<td><span id="valName" style="color:white"></span></td>
</tr>

<tr>
<td style="color:white">Address:</td>
<td><input type="text" id="address" placeholder="Enter your Address" onblur="validName()" onfocus="myFunction(this)" class="sh"></td>
<td><span id="valName" style="color:white"></span></td>
</tr>




<tr>
<td style="color:white">Contact:</td>
<td><input type="text" id="Cont"placeholder="Enter your Number" onblur="validCont()" onfocus="myFunction(this)" class="sh"></td>
<td><span id="valCont" style="color:white"></span></td>
</tr>


<tr>
<td style="color:white">Email:</td>
<td><input type="email" id="Email"placeholder="Enter your email" onblur="validEmail()" onfocus="myFunction(this)" class="sh"></td>
<td><span id="valEmail" style="color:white"></span></td>
</tr>


<tr>
<td style="color:white">Card No:</td>
<td><input type="number" id="Cardno"placeholder="Enter your email" onblur="validCard()" onfocus="myFunction(this)" class="sh"></td>
<td><span id="valCard" style="color:white"></span></td>
</tr>


<tr>
<td style="color:white">Image:</td>
<td><input type="file" id="image" onblur="validimage()" onfocus="myFunction(this)" class="sh" style="width:190px;background-color:white"></td>
<td><span id="valCard" style="color:white"></span></td>
</tr>

<tr>
<td style="color:white;">City:</td>
<td><select id="city" name="city" onchange="Other()" class="sh" >
<option style="width:190px">Select City</option>
<option value = "kolkata">KOLKATA</option>
<option value = "banglore">DELHI</option>
<option value = "mumbai">MUMBAI</option>
<option value = "delhi">CHENNAI</option>
<option value = "Others">Others</option>
</select><input type="text" id="ot" style="display: none"></td>
<td><span id="valcity" style="color:white"></span></td>
</tr>


<tr>
<td><input type="Submit" value="Submit" class="an"></td>
<td><input type="reset" value="Cancel" class="an"></td>
</tr>
</table>
</center>
</form>
</div>







