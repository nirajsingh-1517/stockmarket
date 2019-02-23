<?php
include_once('connection.php');

$username=$_REQUEST['username'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];

$qry="INSERT INTO `register`(`username`, `email`, `password`) VALUES ('$username','$email','$password')";
$qry_exe = mysqli_query($con, $qry);
if($qry_exe){
	echo 'inserted';
}else{
	echo 'failed';
}



session_start();
	
	echo "<script>alert('WELCOME')</script>";
	echo "<script>window.location.href = 'home.php'</script>";
?>