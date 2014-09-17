<?php
			$DBServer = 'localhost';
			$DBUser   = 'root';
			$DBPass   = '';
			$DBName   = 'dc_database';
			$conn = mysqli_connect($DBServer, $DBUser, $DBPass, $DBName);
			 
			// check connection
			if (mysqli_connect_errno()) {
			  trigger_error('Database connection failed: '  . mysqli_connect_error(), E_USER_ERROR);
			}
?>
