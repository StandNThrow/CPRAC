<?php
include ('db_config.php');

$mycarmodel			=	htmlspecialchars($_POST['CDcarmodel'], ENT_QUOTES);
$myquantity			=	htmlspecialchars($_POST['CDquantity'], ENT_QUOTES);
$mypickuplocation	=	htmlspecialchars($_POST['CDpickuplocation'], ENT_QUOTES);
$mydropofflocation	=	htmlspecialchars($_POST['CDdropofflocation'], ENT_QUOTES);
$mypickupdate		=	htmlspecialchars($_POST['CDpickupdate'], ENT_QUOTES);
$mypickuptime		=	htmlspecialchars($_POST['CDpickuptime'], ENT_QUOTES);

$myloggedEmail		=	$_SESSION['loginEmail'];

// Retrieving Personal Info
$getuserInfo		=	mysql_query("SELECT * FROM usermaster WHERE email='".$myloggedEmail."'");
$result				=	mysql_fetch_assoc($getuserInfo);
$myusername			=	$result["username"];
$myhirename			=	$result["name"];
$myhireno			=	$result["phone_number"];

if ($mypickuplocation != "" && $mydropofflocation != "")
{
	$sql			=	mysql_query("INSERT INTO bookingchaudrive SET username='".$myusername."', carmake='".$mycarmodel."', quantity='".$myquantity."', pickupPt='".$mypickuplocation."', dropoffPt='".$mydropofflocation."', pickupdate='".$mypickupdate."', pickupTime='".$mypickuptime."', passengername='".$myhirename."', passengermobile='".$myhireno."', status='Pending'");
		
	echo 'yes';
}
else
{
	echo 'no';
}
?>