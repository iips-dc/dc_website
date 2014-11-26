<?php
		
		$dbserver = "localhost";
		$dbname = "dc_database";
		$username = "root";
<<<<<<< HEAD
		$password = "root";
=======
		$password = "pulkit5-1";
>>>>>>> a2c134ef00595665b3cedf939b93b176d52d8faf
		$error = "Can't connect";

		$dbconnect = mysqli_connect($dbserver, $username, $password, $dbname) or die('Connection error');
?>