<?php
include ('db_config.php');

$mycurrentpassword	=	md5($_POST['currentPassword']);
$mynewpassword		=	md5($_POST['newPassword']);
$myconfirmpassword	=	md5($_POST['confirmPassword']);
$myloggedemail		=	$_SESSION["loginEmail"];

$result				=	mysql_query("SELECT password FROM usermaster WHERE email='".$myloggedemail."'");

if ($mycurrentpassword != mysql_result($result, 0))
{
	echo 'incorrect';
}

if (($mynewpassword == $myconfirmpassword) && ($_POST['currentPassword'] != "" && $_POST['newPassword'] != "" && $_POST['confirmPassword'] != ""))
{
	$sql			=	mysql_query("UPDATE usermaster SET password='".$mynewpassword."' WHERE email='".$myloggedemail."'");
	if ($sql)
	{
		echo 'yes';
	}
	else
	{
		echo 'no';
	}
}
?>