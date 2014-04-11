<?php
$DBServer = 'localhost';
$DBUser   = 'root';
$DBPass   = 'pulkit5-1';
$DBName   = 'DC_DATABASE';
$mysqli = new mysqli($DBServer, $DBUser, $DBPass, $DBName);

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
else{
	echo "Connected<br>";
}


/* close connection */
$mysqli->close();
?>
