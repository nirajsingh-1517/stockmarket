<?php include "header.php" ?>

<?php
include_once('connection.php');
$qry="SELECT * FROM `bankdetails` WHERE `status`='Active'";
$qry_exe=mysqli_query($con,$qry);
?>

<section id="content">
<header id="homeheader">
</header><br/>

<center><h1 style="color:red;font-size:25px">***Bank Details***</h1></center><br/>
<div style= "height:800px;width:1000px;background-color:#d35537; margin:60px; padding:20px;border-radius:25px;margin-top:20px;margin-left:-21px">
<center>

<table border="5px" cellspacing="5px" cellpadding="5px"  style="width:900px;background-color:white;margin-top:20px">



<tr>
	<th><h1>Bank Name:</h1></th>
	<th><h1>About Bank:</h1></th>
	<th><h1>Rate per share:</h1></th>
	
</tr>


<?php
	while($row=mysqli_fetch_array($qry_exe))
	{
?>
<tr style="height:50px">
<td><?=$row['name']?></td>
<td><?=$row['about']?></td>
<td><?=$row['rate']?></td>
</tr>

<?php
	}
?>
</table>
</center>
</div>
