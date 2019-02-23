<?php

include_once "connection.php";

$name = $_REQUEST['name']; //echo $name.'<br>';
$email = $_REQUEST['email']; //echo $email.'<br>';
$password = $_REQUEST['password']; //echo $password.'<br>';
$pro = $_REQUEST['pro']; //echo $pro.'<br>';


$qry = "INSERT INTO `register`(`name`, `email`, `password`, `project`) VALUES ('$name','$email','$password','$pro');"; //die();
$qry_exec = mysqli_query($con,$qry);
if($qry_exec){
	echo 'Successfully Inserted';
}else{
	echo 'Failed';
}
?>
<a href="login.php">login Here</a>



