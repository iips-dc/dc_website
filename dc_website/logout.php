<?php

session_start();
session_destroy();
//print "You have been logged out. <a href='/'>Go back</a>";
header("Location:signin.php");
?>