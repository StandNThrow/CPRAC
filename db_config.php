<?php
session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "candp";

$connect=mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname, $connect) or die (mysql_errno().":<b> ".mysql_error()."</b>");
?>