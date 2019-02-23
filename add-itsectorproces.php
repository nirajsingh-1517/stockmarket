<?php
include_once('connection.php');
  
  
$name=$_REQUEST['name'];//echo $name.'<br>';
$about=$_REQUEST['about'];//echo $roll.'<br>';
$rate=$_REQUEST['rate'];//echo $pro.'<br>';

$qry="INSERT INTO `itsectordetails`(`name`, `about`, `rate`) VALUES ('$name','$about','$rate')";
$qry_exe = mysqli_query($con, $qry);
if($qry_exe){
	echo "<script>alert('successfully Inserted')</script>";
}
else{
	echo "<script>alert('Failed')</script>";
}

header('location:additsectordetails.php');

?>

