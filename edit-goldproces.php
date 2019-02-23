<?php
include_once "connection.php";
$id = $_REQUEST['id'];//echo $bankno.'<br>';
$name = $_REQUEST['name']; //echo $name.'<br>';
$about = $_REQUEST['about'];//echo $about.'<br>';
$rate = $_REQUEST['rate'];//echo $rate.'<br>';


$qry = "UPDATE `golddetails` SET `name`= '$name',`about`= '$about',`rate`= '$rate' WHERE `id`='$id'";
$qry_exec = mysqli_query($con,$qry);
if($qry_exec){
	echo 'Successfully Updated';
}else{
	echo 'Failed';
}
header('location:viewgolddetails.php');
?>