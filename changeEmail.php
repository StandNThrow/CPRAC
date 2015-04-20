<?php
include ('db_config.php');

$mycurrentemail	=	htmlspecialchars($_POST['currentEmail'], ENT_QUOTES);
$mynewemail		=	htmlspecialchars($_POST['newEmail'], ENT_QUOTES);
$myconfirmemail	=	htmlspecialchars($_POST['confirmEmail'], ENT_QUOTES);

$sql			=	"SELECT * FROM usermaster WHERE email='".$mycurrentemail."'";
$result			=	mysql_query($sql);
$row			=	mysql_fetch_array($result);

if (mysql_num_rows($result) > 0)
{
	if($mynewemail != "" && ($mynewemail == $myconfirmemail))
	{
		echo "yes";
		$modify		=	mysql_query("UPDATE usermaster SET email='".$mynewemail."' WHERE email='".$mycurrentemail."'");
	}
	else
	{
		
	}
}
else
{
	echo "no";
}
?>