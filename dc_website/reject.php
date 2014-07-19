<?php
$con = mysqli_connect('localhost','root','','dc');
$reject =$_GET['app'];
echo "<script>alert('Do you want to reject application');</script>";
$updateQuery = mysqli_query($con,"UPDATE `leave` SET approve=-1 WHERE id='$reject'") or die(mysqli_error($con));
if($updateQuery){	
		echo "<script> alert('Application rejected')</script>";
		echo "<script>window.open('leave.php?approve','_self')</script>";
	exit();
}

?>