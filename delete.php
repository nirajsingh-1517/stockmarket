<?php

include_once "connection.php";
$id = $_REQUEST['id'];

$qry = "UPDATE `bankdetails` SET `status`= 'Deactive' WHERE `id`='$id'";
$qry_exec = mysqli_query($con,$qry);
if($qry_exec){
	echo 'Successfully Deleted';
}else{
	echo 'Failed';
}
header('location:viewbankdetails.php');

?>