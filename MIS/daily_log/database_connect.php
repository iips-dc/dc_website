<?php
$mysql_host = 'localhost';
$user_name = 'root';
$mysql_pass= '';
$mysql_db = 'dailylog';

if (!@mysql_connect($mysql_host,$user_name,$mysql_pass) || !@mysql_select_db($mysql_db))
{
echo "error occur!!!!";
}
?>