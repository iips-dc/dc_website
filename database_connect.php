<?php 
        $host = 'localhost';
        $user = 'root';
        $pass = 'root';
        $db = 'dc_database';
        $dbconnect = mysqli_connect($host,$user,$pass,$db);
        if(mysqli_connect_errno($dbconnect)){
                echo 'Failed to connect to the database : '.mysqli_connect_erro$
                die();
        }
?>
