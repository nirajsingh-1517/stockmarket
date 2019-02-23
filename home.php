<?php
session_start();
if(!isset($_SESSION['email'])){
	echo "<script>window.location.href= 'index.php'</script>";
}
?>
<?php include "header.php" ?>
<section id="content">
<header id="homeheader">
</header><br/>

<style>
	table{
		height:300px;
		width:900px;
		color:red;
		back-groundcolor:green;
	}
</style>



<?php include "bankingshare.php" ?>
<a href="bankingmore.php">
<input type="button" value="More" style="margin-left:120px;height:30px;width:80px;margin-top:30px;color:red"/></a><br/>

<?php include "goldshare.php" ?>

 <a href="goldmore.php">
 <input type="button" value="More" style="margin-left:120px;height:30px;width:80px;margin-top:30px;color:red"/></a><br/><br/>
 
 
 <?php include "itsector.php" ?>

 <a href="itsectormore.php">
 <input type="button" value="More" style="margin-left:120px;height:30px;width:80px;margin-top:30px;color:red"/></a><br/><br/>
 
 <?php include "cement.php" ?>

 <a href="cementmore.php">
 <input type="button" value="More" style="margin-left:120px;height:30px;width:80px;margin-top:30px;color:red"/></a><br/><br/>
 
 
 <?php include "telecom.php" ?>

 <a href="telecommore.php">
 <input type="button" value="More" style="margin-left:120px;height:30px;width:80px;margin-top:30px;color:red"/></a><br/><br/><br/>

<?php include "footer.php" ?>

<br/><br/>