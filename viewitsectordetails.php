<?php
include_once('connection.php');
$qry="SELECT * FROM `itsectordetails`";
$qry_exe=mysqli_query($con,$qry);
?>
<a href="index.php"><h1 style="margin-left:1100px;margin-top:0px">Log out</h1></a>
<center>
<div style= "height:800px;width:1000px;background-color:#d35537; margin:60px; padding:20px;border-radius:25px;margin-top:50px">
<form method="post" onsubmit ="return val()">

<table border="5" cellspacing="10" cellpadding="5" style="width:900px;background-color:white;margin-top:20px">
<h1 style="color:white">***Itsector Details***</h1><br/>

<tr style="height:80px">
<th>Itsector Name</th>
<th>About Itsector</th>
<th>Share Value</th>
<th>Status</th>
<th>Action</th>
</tr>
<?php
	while($row=mysqli_fetch_array($qry_exe))
	{
?>
<tr style="height:50px">
<td><?=$row['name']?></td>
<td><?=$row['about']?></td>
<td><?=$row['rate']?></td>
<td><?=$row['status']?></td>
<td style="width:160px">
<a href='edititsector.php?id=<?=$row['id']?>'>Edit</a>
<a href='#'>Active</a>
<a href='delete.php'>Delete</a>
</td>
</tr>


<?php
	}
?>
</table>
</center>
</form>
</div>

</body>