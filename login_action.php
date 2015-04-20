<?php
include ('db_config.php');

$myemail	=	htmlspecialchars($_POST['loginEmail'], ENT_QUOTES);
$password	=	md5($_POST['loginPassword']);

$sql		=	"SELECT * FROM usermaster WHERE email='".$myemail."'";
$result		=	mysql_query($sql);
$row		=	mysql_fetch_array($result);

if (mysql_num_rows($result) > 0) 
{
	if ($myemail == "" && $password == "")
	{
		echo 'empty';
	}
	else if(strcmp($row['password'], $password) == 0) 
	{
		echo "yes";
		$_SESSION['loginEmail']	=	$myemail;
	}
	else
	{
		echo 'incorrect';
	}
}
else
{
	echo "no";
}
?>