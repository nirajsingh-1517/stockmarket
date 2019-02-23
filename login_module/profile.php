<?php
include_once "connection.php";
session_start();
if($_SESSION['email'] == null){
	die('Unauthorized Access');
}
$user_email = $_SESSION['email'];

$qry = "SELECT * FROM `register` WHERE `email` = '$user_email'";

$qry_exec = mysqli_query($con, $qry);
$row = mysqli_fetch_array($qry_exec);
?>

Name : <?=$row['name']?><br><br>
Email : <?=$row['email']?><br><br>
Project : <?=$row['project']?><br><br>
Password : <?=$row['password']?><br><br>

<a href="logout.php">Logout</a>