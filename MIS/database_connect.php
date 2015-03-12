

<?php
		
		$dbserver = "localhost";
		$dbname = "dc_database";
		$username = "root";
		$password = "root";
		$error = "Can't connect";

		$dbconnect = mysqli_connect($dbserver, $username, $password, $dbname) or die('Connection error');
?>
