<?php
include('db_config.php');

if(isset($_POST['registerUsername']))
{
	$username		=	mysql_real_escape_string($_POST['registerUsername']);
	$checkUsername	=	mysql_query("SELECT userid FROM usermaster WHERE username='$username'");
	
	if ($username == "")
	{
		echo 'empty';
	}
	else
	{
		if (mysql_num_rows($checkUsername) > 0)
		{
			echo 'no';
		}
		else
		{
			echo 'yes';
		}
	}
}

if (isset($_POST['registerEmail']))
{
	$email		=	mysql_real_escape_string($_POST['registerEmail']);
	$checkEmail	=	mysql_query("SELECT userid FROM usermaster WHERE email='$email'");
	
	if ($email == "")
	{
		echo 'empty';
	}
	else
	{
		if (mysql_num_rows($checkEmail) > 0)
		{
			echo 'no';
		}
		else
		{
			echo 'yes';
		}
	}
}
?>
