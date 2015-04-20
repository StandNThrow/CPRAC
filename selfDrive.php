<?php
include ('db_config.php');

$myvmodel			=	htmlspecialchars($_POST['SDvmodel'], ENT_QUOTES);
$myquantity			=	htmlspecialchars($_POST['SDquantity'], ENT_QUOTES);
$mystartdate		=	htmlspecialchars($_POST['SDstartdate'], ENT_QUOTES);
$myenddate			=	htmlspecialchars($_POST['SDenddate'], ENT_QUOTES);
$mypickuplocation	=	htmlspecialchars($_POST['SDpickuplocation'], ENT_QUOTES);
$mypickuptime		=	htmlspecialchars($_POST['SDpickuptime'], ENT_QUOTES);

$myloggedEmail		=	$_SESSION['loginEmail'];

// Retrieving Personal Info
$getuserInfo		=	mysql_query("SELECT * FROM usermaster WHERE email='".$myloggedEmail."'");
$result				=	mysql_fetch_assoc($getuserInfo);
$myusername			=	$result["username"];
$myhirename			=	$result["name"];
$myhireno			=	$result["phone_number"];

if ($myhirename != "" && $myvmodel != "" && $mypickuplocation != "" && ($mystartdate < $myenddate))
{
	$sql			=	mysql_query("INSERT INTO bookingselfdrive SET username='".$myusername."', hirename='".$myhirename."', vehModel='".$myvmodel."', quantity='".$myquantity."', startdate='".$mystartdate."', enddate='".$myenddate."', pickupLoc='".$mypickuplocation."', pickupTime='".$mypickuptime."', passengermobile='".$myhireno."', status='Pending'");
		
	echo 'yes';
}
else
{
	echo 'no';	
}
?>