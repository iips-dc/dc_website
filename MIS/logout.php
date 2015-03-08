<?php

session_start();
session_destroy();
//print "You have been logged out. <a href='/'>Go back</a>";
header("Location:http://localhost/dc_site_master/New_version/dc_website/index.php");
?>