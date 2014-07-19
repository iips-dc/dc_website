<?php
$con = mysqli_connect('localhost','root','','dc');
$approve =$_GET['app'];

$updateQuery = mysqli_query($con,"UPDATE `leave` SET approve=1 WHERE id='$approve'") or die(mysqli_error($con));
if($updateQuery){	
	echo "<script>window.open('leave.php?approve','_self')</script>";
	exit();
}

?>