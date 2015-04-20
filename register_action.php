<?php
include ('db_config.php');

$name		=	htmlspecialchars($_POST['registerName'], ENT_QUOTES);
$username	=	htmlspecialchars($_POST['registerUsername'], ENT_QUOTES);
$password	=	md5($_POST['registerPassword']);
$email		=	htmlspecialchars($_POST['registerEmail'], ENT_QUOTES);
$phone_num	=	htmlspecialchars($_POST['registerPhonenum'], ENT_QUOTES);

$usernameCheck	=	mysql_query("SELECT * FROM usermaster WHERE username='".$username."'");
$usernameResults	=	mysql_fetch_assoc($usernameCheck);
$usernameRow		=	$usernameResults['username'];

$emailCheck	=	mysql_query("SELECT * FROM usermaster WHERE email='".$email."'");
$emailResults	=	mysql_fetch_assoc($emailCheck);
$emailRow		=	$emailResults['email'];

echo $usernameRow;

if ((strcmp($_POST['registerPassword'], $_POST['registerConfirmPassword']) == 0) && ($name != "" && $username != "" && $password != "" && $email != "" && $phone_num != ""))
{
	$addUser	=	"INSERT INTO usermaster (userid, name, username, password, email, phone_number) VALUES ('', '".$name."', '".$username."', '".$password."', '".$email."', '".$phone_num."')";

$sql		=	mysql_query($addUser);
	echo 'yes';
}
else
{
	echo 'no';
}
?>