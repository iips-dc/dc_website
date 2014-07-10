<?php
echo 'ok';

$DBServer = 'localhost';
$DBUser   = 'root';
$DBPass   = 'pulkit5-1';
$DBName   = 'dc_database';
/*
$con = new mysqli($DBServer, $DBUser, $DBPass, $DBName);

/* check connection */
/*if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $con->connect_error);
    die();
}
else{
	echo "Connected<br>";
}
*/
if(mysql_connect($DBServer,$DBUser,$DBPass))
	echo 'Connected with db';
else
	echo 'error in connection with db';

if(mysql_select_db($DBName))
	echo 'db selected';
else
	echo 'error in selecting db';

if(isset($_POST['submit']))
{
	echo 'button clicked';
	$date=$_POST['date'];
	$log=$_POST['log'];
	$link=$_POST['link'];
	$sql= "INSERT INTO `DAILY_LOG` VALUES('$date', '$log','$link','')";
	mysql_query($sql) or die("error in inserting");
}
else
echo "not submitted";


?>
