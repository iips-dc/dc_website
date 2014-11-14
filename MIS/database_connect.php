<?php
		
		$dbserver = "localhost";
		$dbname = "dc_database";
		$username = "root";
<<<<<<< HEAD
		$password = "root";
=======
		$password = "pulkit5-1";
>>>>>>> 6d7d4f361fa8b9369e61a5df20478995a8112787
		$error = "Can't connect";

		$dbconnect = mysqli_connect($dbserver, $username, $password, $dbname) or die('Connection error');
?>