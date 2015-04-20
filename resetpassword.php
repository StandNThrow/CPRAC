<?php
include ('db_config.php');
 
$email_to		=	$_POST['resetPasswordEmail'];
 
$sql			=	"SELECT * FROM usermaster WHERE email='".$email_to."'";
$result			=	mysql_query($sql);
$count			=	mysql_num_rows($result);

if ($count == 1)
{

$rows			=	mysql_fetch_array($result);

$your_username	=	$rows['username'];
$your_password	=	$rows['password'];

$to				=	$email_to; 

$subject		=	"Account Information for C&P Rent A Car"; 

$header			=	"from: C&P Admin admin@candp.com.sg"; 

$messages		=	"Account details to login to C&P Rent A Car Booking System. \r\n";
$messages.=	"Your username is $your_username \r\n";
$messages.=	"Your password is $your_password \r\n";
$messages.=	"\r\n";

$sentmail		=	mail($to, $subject, $messages, $header);
}
else
{
	
}

if ($sentmail)
{
	echo "yes";
}
else
{
	echo "no";
}

?>