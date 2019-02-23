<?php

include_once "connection.php";

$email = $_REQUEST['email']; //echo $email.'<br>';
$password = $_REQUEST['password']; //echo $password.'<br>';

$qry = "SELECT * FROM `adminlogin` WHERE `email` = '$email' AND `password` = '$password'";

$qry_exec = mysqli_query($con, $qry);
$num = mysqli_num_rows($qry_exec);
if($num == 1){
	session_start();
	$_SESSION['email'] = $email;
	echo "<script>alert('Logged In')</script>";
	echo "<script>window.location.href = 'admingallary.php'</script>";
}else{
	echo "<script>alert('email or password incorrect')</script>";
	echo "<script>window.location.href= 'adminhome.php'</script>";
}

?>

