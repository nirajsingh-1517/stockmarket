<?php
session_start();
session_destroy();
echo "<script>alert('Logged Out')</script>";
	echo "<script>window.location.href = 'login.php'</script>";
?>