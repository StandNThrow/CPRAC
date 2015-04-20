<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<title></title>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script> 
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> 
<?php $xml = simplexml_load_file('data.xml'); ?>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<link rel="stylesheet" href="css/jquery.ui.datepicker.mobile.css">
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<?php
include ('db_config.php');

$myloggedEmail		= $_SESSION["loginEmail"];
// Retrieving Personal Info
$getuserInfo		=	mysql_query("SELECT * FROM usermaster WHERE email='".$myloggedEmail."'");
$result				=	mysql_fetch_assoc($getuserInfo);
$myuserid			=	$result["userid"];
$myhirename			=	$result["name"];
$myhireno			=	$result["phone_number"];
?>
<div data-role="page" id="account">
  <div data-role="header" data-position="fixed" data-backbtn="false" data-theme="">
    <h1>Account Info</h1>
  </div>
  <div data-role="content" class="ui-content" role="main">
    <h4>Welcome, <?php echo $myhirename ?>.</h4>
    <ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="a">
      <li data-role="list-divider">&nbsp;</li>
      <li><a href="#booking">Book our Cars</a></li>
      <li><a href="#viewCars">View Cars</a></li>
    </ul>
    <ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="a">
      <li data-role="list-divider">Status</li>
      <li><a href="#viewBookings">View Bookings</a></li>
    </ul>
    <ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="a">
      <li data-role="list-divider">Update Profile</li>
      <li><a href="#changePassword">Change Password</a></li>
      <li><a href="#changeEmail">Change Email</a></li>
    </ul>
  </div>
  <form id="logout" name="logout" data-ajax="false" action="logout.php" method="post">
    <br>
    <br>
    <span id="logoutMessageBox" style="display:none;"></span>
    <input name="Submit" type="submit" id="submit" data-theme="a" value="Logout">
  </form>
  <div data-role="footer" data-position="fixed" class="nav-glyphish" data-theme="a">
    <div data-role="navbar" class="nav-glyphish">
      <ul>
        <li><a href="#contact" id="phone" data-icon="custom">Contact</a></li>
      </ul>
    </div>
  </div>
</div>
<div data-role="page" id="contact">
  <div data-role="header" data-position="fixed" data-theme="a">
    <h1>Contact Us</h1>
  </div>
  <div data-role="content" class="ui-content" role="main">
    <ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
      <li>
        <h1>General Support</h1>
        <p> Email: <a href="mailto:enquiry@candp.com">enquiry@candp.com</a> <br>
          <br>
          Name: Joanne CHONG <br>
          Email: <a href="mailto:joanne@candp.com">joanne@candp.com</a> <br>
          Tel: <a href="tel:6349 5284">6349 5284</a> </p>
      </li>
      <li>
        <h1>CEO</h1>
        <p> Name: LOI Win Yen <br>
          Email: <a href="mailto:winyen@candp.com">winyen@candp.com</a> <br>
          Tel: <a href="tel:9666 4666">9666 4666</a> </p>
      </li>
      <li>
        <h1>Secretary</h1>
        <p> Name: Kitty LIM <br>
          Email: <a href="mailto:kittylim@candp.com">kittylim@candp.com</a> <br>
          Tel: <a href="tel:6349 3839">6349 3839</a> </p>
      </li>
      <li>
        <h1>Marketing Manager</h1>
        <p> Name: Jeanne PHUA <br>
          Email: <a href="mailto:jeanne.phua@candp.com">jeanne.phua@candp.com</a> <br>
          Tel: <a href="tel:6349 5283">6349 5283</a> Mobile: <a href="tel:9116 6656">9116 6656</a> </p>
      </li>
    </ul>
  </div>
  <div data-role="footer" data-position="fixed" data-theme="a">
    <h4>&nbsp;</h4>
  </div>
</div>
<div data-role="page" id="viewCars">
  <div data-role="header" data-position="fixed" data-theme="a">
    <h1>View Fleets</h1>
  </div>
  <div data-role="content" class="ui-content" role="main">
    <ul data-role="listview" id="injectElements" data-inset="true" data-theme="c" data-dividertheme="a">
      <li data-role="list-divider">Fleets</li>
    </ul>
  </div>
  <div data-role="footer" data-position="fixed" data-theme="a">
    <h4>&nbsp;</h4>
  </div>
</div>
<div data-role="page" id="viewBookings">
  <div data-role="header" data-position="fixed" data-theme="a"> <a href="#account" data-direction="reverse" data-icon="arrow-l">Back</a>
    <h1>View Bookings</h1>
  </div>
  <div data-role="content" class="ui-content" role="main">
    <h4>Please Call: <a href="tel:6736 6666">6736 6666</a> if you have any enquires regarding your booking records. Please quote your Booking Ref ID during the call.</h4>
    <h4 style="color:red;">* This page is best viewed in Landscape Mode.</h4>
    <h4>Self Drive</h4>
    <table cellspacing="0" cellpadding="0" width="100%" border="1">
      <tr>
        <th>Ref id</th>
        <th>Car Model</th>
        <th>Quantity</th>
        <th>Date</th>
        <th>Pickup Location</th>
        <th>Pickup Time</th>
        <th>Status</th>
      </tr>
      <?php
$getUsername	=	mysql_query("SELECT * FROM usermaster WHERE email='".$myloggedEmail."'");
$usernameResult	=	mysql_fetch_assoc($getUsername);
$myusername		=	$usernameResult["username"];

$SDsql			=	mysql_query("SELECT * FROM bookingselfdrive WHERE username='".$myusername."'");

for ($i=0; $i < mysql_num_rows($SDsql); $i++)
{
	$SDrow = mysql_fetch_array($SDsql);
?>
      <tr>
        <td><?=$SDrow['sbookingid']?></td>
        <td><?=$SDrow['vehModel']?></td>
        <td><?=$SDrow['quantity']?></td>
        <td><?=$SDrow['startdate']?></td>
        <td><?=$SDrow['pickupLoc']?></td>
        <td><?=$SDrow['pickupTime']?></td>
        <td><?=$SDrow['status']?></td>
      </tr>
      <?php
}
?>
    </table>
    <br>
    <h4>Chauffeur Drive</h4>
    <table cellspacing="0" cellpadding="0" width="100%" border="1">
      <tr>
        <th>Ref id</th>
        <th>Car Model</th>
        <th>Quantity</th>
        <th>Pickup Date</th>
        <th>Pickup Point</th>
        <th>Pickup Time</th>
        <th>Status</th>
      </tr>
      <?php
$getUsername	=	mysql_query("SELECT * FROM usermaster WHERE email='".$myloggedEmail."'");
$usernameResult	=	mysql_fetch_assoc($getUsername);
$myusername		=	$usernameResult["username"];

$CDsql			=	mysql_query("SELECT * FROM bookingchaudrive WHERE username='".$myusername."'"); 

for ($j=0; $j < mysql_num_rows($CDsql); $j++)
{
	$CDrow = mysql_fetch_array($CDsql);
?>
      <tr>
        <td><?=$CDrow['cbookingid']?></td>
        <td><?=$CDrow['carmake']?></td>
        <td><?=$CDrow['quantity']?></td>
        <td><?=$CDrow['pickupdate']?></td>
        <td><?=$CDrow['pickupPt']?></td>
        <td><?=$CDrow['pickupTime']?></td>
        <td><?=$CDrow['status']?></td>
      </tr>
      <?php
}
?>
    </table>
  </div>
  <div data-role="footer" data-position="fixed" class="nav-glyphish" data-theme="a">
    <div data-role="navbar" class="nav-glyphish">
      <ul>
        <li><a href="#" id="refresh" onClick="window.location.reload(); return false;" data-icon="custom">Refresh</a></li>
      </ul>
    </div>
  </div>
</div>
<div data-role="page" id="changePassword">
  <div data-role="header" data-position="fixed" data-theme="a">
    <h1>Change Password</h1>
  </div>
  <div data-role="content" class="ui-content" role="main">
    <form id="changePassword_form" name="changePassword" action="" method="post">
      <div data-role="fieldcontain">
        <label for="currentPassword">Current Password</label>
        <input type="password" name="currentPassword" id="currentPassword">
      </div>
      <div data-role="fieldcontain">
        <label for="newPassword">New Password</label>
        <input type="password" name="newPassword" id="newPassword">
      </div>
      <div data-role="fieldcontain">
        <label for="confirmPassword">Confirm Password</label>
        <input type="password" name="confirmPassword" id="confirmPassword">
      </div>
      <br>
      <br>
      <span id="changePasswordMessageBox" style="display:none;"></span> <br>
      <br>
      <input name="Submit" type="submit" id="submit" data-theme="a" value="Submit">
    </form>
  </div>
  <div data-role="footer" data-position="fixed" data-theme="a">
    <h4>&nbsp;</h4>
  </div>
</div>
<div data-role="page" id="changeEmail">
  <div data-role="header" data-position="fixed" data-theme="a">
    <h1>Change Email</h1>
  </div>
  <div data-role="content" class="ui-content" role="main">
    <h4 style="color:red;">WARNING! Changing your email will change the email you used for login.</h4>
    <form id="changeEmail_form" name="changeEmail" action="" method="post">
      <div data-role="fieldcontain">
        <label for="currentEmail">Current Email</label>
        <input type="text" name="currentEmail" id="currentEmail" value="<?php echo $myloggedEmail; ?>" readonly="readonly">
      </div>
      <div data-role="fieldcontain">
        <label for="newEmail">New Email</label>
        <input type="text" name="newEmail" id="newEmail">
      </div>
      <div data-role="fieldcontain">
        <label for="confirmEmail">Confirm Email</label>
        <input type="text" name="confirmEmail" id="confirmEmail">
      </div>
      <br>
      <br>
      <span id="messageBox" style="display:none;"></span> <br>
      <br>
      <input name="Submit" type="submit" id="submit" data-theme="a" value="Submit">
    </form>
  </div>
  <div data-role="footer" data-position="fixed" data-theme="a">
    <h4>&nbsp;</h4>
  </div>
</div>
<div data-role="page" id="booking">
  <div data-role="header" data-position="inline" data-theme="a">
    <h1>Booking</h1>
  </div>
  <img src="appleIcon.png" width="90px" height="90px" style="margin:10px;">
  <div data-role="content" class="ui-content" role="main">
    <ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="a">
      <li data-role="list-divider">Booking Services</li>
      <li><a href="#selfDrive">Self-Drive</a></li>
      <li><a href="#chauffeurDrive">Chauffeur Drive</a></li>
    </ul>
  </div>
  <div data-role="footer" data-position="inline" data-theme="a">
    <h4>&nbsp;</h4>
  </div>
</div>
<div data-role="page" id="selfDrive">
  <div data-role="header" data-position="fixed" data-theme="a">
    <h1>Self-Drive</h1>
  </div>
  <div data-role="content" class="ui-content" role="main">
    <form id="selfDrive_form" name="selfDrive" action="" method="post">
      <div data-role="fieldcontain">
        <label for="SDhirename">Hire Name</label>
        <input type="text" name="SDhirename" id="SDhirename" value="<?php echo $myhirename; ?>" readonly="readonly">
      </div>
      <div data-role="fieldcontain">
        <label for="SDhireno">Hire Contact</label>
        <input type="text" name="SDhireno" id="SDhireno" value="<?php echo $myhireno; ?>" readonly="readonly">
      </div>
      <div data-role="fieldcontain">
        <label for="SDvmodel">Vehicle Model</label>
        <select name="SDvmodel" id="SDvmodel" data-native-menu="false" />
        
        <?php
					$getVehiclemodel = $xml->xpath('/entry/car/model');
					foreach ($getVehiclemodel as $vehiclemodel)
					{
						?>
        <option value="<?php echo $vehiclemodel; ?>"><?php echo $vehiclemodel; ?></option>
        <?php
					}
					?>
        </select>
      </div>
      <div data-role="fieldcontain">
        <label for="SDquantity">Quantity</label>
        <select name="SDquantity" id="SDquantity" data-native-menu="false" />
        
        <?php for($i=1; $i<=10; $i++) { ?>
        <option value="<?=$i?>">
        <?=$i?>
        </option>
        <?php } ?>
        </select>
      </div>
      <div data-role="fieldcontain">
        <label for="SDstartdate">Start Date</label>
        <input type="date" name="SDstartdate" id="SDstartdate" readonly="readonly">
      </div>
      <div data-role="fieldcontain">
        <label for="SDenddate">End Date</label>
        <input type="date" name="SDenddate" id="SDenddate" readonly="readonly">
      </div>
      <div data-role="fieldcontain">
        <label for="SDpickuplocation">Pickup Location</label>
        <input type="text" name="SDpickuplocation" id="SDpickuplocation" value="No 41 Pandan Road" disabled="disabled">
        <br>
        <span style="color:red;">* Please take note that this is a fixed pickup point for Self-Drive</span> </div>
      <div data-role="fieldcontain">
        <label for="SDpickuptime">Pickup Time</label>
        <select name="SDpickuptime" id="SDpickuptime">
          <option value="8:00 AM">8:00 AM</option>
          <option value="10:00 AM">10:00 AM</option>
          <option value="12:00 PM">12:00 PM</option>
          <option value="2:00 PM">2:00 PM</option>
          <option value="4:00 PM">4:00 PM</option>
          <option value="6:00 PM">6:00 PM</option>
        </select>
      </div>
      <br>
      <br>
      <span id="SDmessageBox" style="display:none;"></span> <br>
      <br>
      <input name="Submit" id="submit" type="submit" data-theme="a" value="Book">
    </form>
  </div>
  <div data-role="footer" data-position="fixed" data-theme="a">
    <h4>&nbsp;</h4>
  </div>
</div>
<div data-role="page" id="chauffeurDrive">
  <div data-role="header" data-position="fixed" data-theme="a">
    <h1>Chauffeur Drive</h1>
  </div>
  <div data-role="content" class="ui-content" role="main">
    <form id="chauffeurDrive_form" name="chauffeurDrive" action="" method="post">
      <div data-role="fieldcontain">
        <label for="CDhirename">Passenger Name</label>
        <input type="text" name="CDhirename" id="CDhirename" value="<?php echo $myhirename; ?>" readonly="readonly">
      </div>
      <div data-role="fieldcontain">
        <label for="CDhireno">Passenger Contact</label>
        <input type="tel" name="CDhireno" id="CDhireno" value="<?php echo $myhireno; ?>" readonly="readonly">
      </div>
      <div data-role="fieldcontain">
        <label for="CDcarmodel">Make &amp; Model of Car</label>
        <select name="CDcarmodel" id="CDcarmodel" data-native-menu="false">
          <?php
				$getCarmodel = $xml->xpath('/entry/car/model');
				foreach ($getCarmodel as $carmodel)
				{
					?>
          <option value="<?php echo $carmodel; ?>"><?php echo $carmodel; ?></option>
          <?php
				}
				?>
        </select>
      </div>
      <div data-role="fieldcontain">
        <label for="CDquantity">Quantity</label>
        <select name="CDquantity" id="CDquantity">
          <?php for($i=1; $i<=10; $i++) { ?>
          <option value="<?=$i?>">
          <?=$i?>
          </option>
          <?php } ?>
        </select>
      </div>
      <div data-role="fieldcontain">
        <label for="CDpickuplocation">Pickup Location</label>
        <input type="text" name="CDpickuplocation" id="CDpickuplocation">
      </div>
      <div data-role="fieldcontain">
        <label for="CDdropofflocation">Dropoff Location</label>
        <input type="text" name="CDdropofflocation" id="CDdropofflocation">
      </div>
      <div data-role="fieldcontain">
        <label for="CDpickupdate">Pickup Date</label>
        <input type="date" name="CDpickupdate" id="CDpickupdate" readonly="readonly">
      </div>
      <div data-role="fieldcontain">
        <label for="CDpickuptime">Pickup Time</label>
        <select name="CDpickuptime" id="CDpickuptime">
          <option value="8:00 AM">8:00 AM</option>
          <option value="10:00 AM">10:00 AM</option>
          <option value="12:00 PM">12:00 PM</option>
          <option value="2:00 PM">2:00 PM</option>
          <option value="4:00 PM">4:00 PM</option>
          <option value="6:00 PM">6:00 PM</option>
        </select>
      </div>
      <br>
      <br>
      <span id="CDmessageBox" style="display:none;"></span> <br>
      <br>
      <input name="Submit" type="submit" id="submit" data-theme="a" value="Book">
    </form>
  </div>
  <div data-role="footer" data-position="fixed" data-theme="a">
    <h4>&nbsp;</h4>
  </div>
</div>
<script src="js/changeEmail.js"></script> 
<script src="js/changePassword.js"></script> 
<script src="js/chauffeurDrive.js"></script> 
<script src="js/login.js"></script> 
<script src="js/register.js"></script> 
<script src="js/register_action.js"></script> 
<script src="js/resetPassword.js"></script> 
<script src="js/selfDrive.js"></script> 
<script src="js/viewCars.js"></script> 
<script src="js/jQuery.ui.datepicker.js"></script> 
<script src="js/jquery.ui.datepicker.mobile.js"></script> 
<script>
  $(document).bind( "mobileinit", function(){
    $.mobile.page.prototype.options.degradeInputs.date = true;
  });
  
$("a[data-role=tab]").each(function () {
    var anchor = $(this);
    anchor.bind("click", function () {
        $.mobile.changePage(anchor.attr("href"), {
            transition: "none",
            changeHash: false
        });
        return false;
    });
});

$("div[data-role=page]").bind("pagebeforeshow", function (e, data) {
    $.mobile.silentScroll(0);
});​
</script>
</body>
</html>