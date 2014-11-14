<?php
echo "Go";
$con = mysqli_connect('localhost','root','pulkit5-1','dc_database');
$approve =$_GET['app'];

$updateQuery = mysqli_query($con,"UPDATE `leave` SET approve=1 WHERE id='$approve'") or die(mysqli_error($con));
if($updateQuery){	
	header("Location: leave.php"); 
	#echo "<script>window.open('leave.php?approve','_self')</script>";
	exit();
}

?>