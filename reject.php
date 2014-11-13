<?php
echo OK;
$con = mysqli_connect('localhost','root','pulkit5-1','dc_database');
$reject =$_GET['app'];
#echo "<script>alert('Do you want to reject application');</script>";
$updateQuery = mysqli_query($con,"UPDATE `leave` SET approve=-1 WHERE id='$reject'") or die(mysqli_error($con));
if($updateQuery){	
		#echo "<script> alert('Application rejected')</script>";
		header("Location: leave.php"); 
	exit();
}

?>