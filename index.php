<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<link rel="apple-touch-icon" href="appleIcon.png" />
<title>Homepage</title>
<link rel="stylesheet" href="jquery.mobile-1.0rc1.min.css" type="text/css" />
<link rel="stylesheet" href="style.css" type="text/css" />
<script src="jquery-1.6.2.min.js"></script>
<script src="jquery.mobile-1.0a4.1.min.js"></script>
<script src="changeEmail.js"></script>
<script src="changePassword.js"></script>
<script src="chauffeurDrive.js"></script>
<script src="login.js"></script>
<script src="register.js"></script>
<script src="register_action.js"></script>
<script src="resetPassword.js"></script>
<script src="selfDrive.js"></script>
<script src="viewCars.js"></script>
<script>
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
</head>

<body>
<div data-role="page" id="index">
  <div data-role="header" data-position="fixed" data-backbtn="false" data-theme="e">
    <h1></h1>
  </div>
  <img src="appleIcon.png" width="90px" height="90px" style="margin:10px;">
  <h4 style="text-align:center">Welcome to C&P Rent A Car Booking System</h4>
  <div data-role="content" class="ui-content" role="main">
    <form id="login_form" name="login_form" action="" method="post">
      <div data-role="fieldcontain">
        <label for="loginEmail">Email</label>
        <input type="text" name="loginEmail" id="loginEmail">
      </div>
      <div data-role="fieldcontain">
        <label for="loginPassword">Password</label>
        <input type="password" name="loginPassword" id="loginPassword">
      </div>
      <br />
      <br />
      <a style="text-decoration:none;font-size:18px;" href="#register">Don't have an account?</a> <br />
      <br />
      <span id="loginMessageBox" style="display:none;"></span> <br />
      <br />
      <input name="Submit" type="submit" id="submit" data-theme="a" value="Login">
    </form>
  </div>
  <div data-role="footer" data-position="fixed" class="nav-glyphish" data-theme="e">
    <div data-role="navbar" class="nav-glyphish">
      <ul>
        <li><a href="#about" id="aboutme" data-icon="custom">About</a></li>
        <li><a href="#contact" id="phone" data-icon="custom">Contact</a></li>
        <li><a href="#viewCars" id="pricetag" data-icon="custom">View Cars</a></li>
      </ul>
    </div>
  </div>
</div>
<div data-role="page" id="register">
  <div data-role="header" data-position="fixed" data-theme="e">
    <h1>Registration</h1>
  </div>
  <div data-role="content" class="ui-content" role="main">
    <form id="register_form" name="register" action="" method="post">
      <div data-role="fieldcontain">
        <label for="registerName">Name</label>
        <input type="text" name="registerName" id="registerName">
      </div>
      <div data-role="fieldcontain">
        <label for="registerUsername">Username</label>
        <input type="text" name="registerUsername" id="registerUsername">
      </div>
      <div data-role="fieldcontain">
        <label for="registerPassword">Password</label>
        <input type="password" name="registerPassword" id="registerPassword">
      </div>
      <div data-role="fieldcontain">
        <label for="registerConfirmPassword">Confirm Password</label>
        <input type="password" name="registerConfirmPassword" id="registerConfirmPassword">
      </div>
      <div data-role="fieldcontain">
        <label for="registerEmail">Email</label>
        <input type="text" name="registerEmail" id="registerEmail">
      </div>
      <div data-role="fieldcontain">
        <label for="registerPhonenum">Phone No.</label>
        <input type="tel" name="registerPhonenum" id="registerPhonenum">
      </div>
      <br />
      <br />
      <span id="registerMessageBox" style="display:none;"></span> <br />
      <br />
      <input name="Submit" type="submit" id="submit" data-theme="a" value="Register">
    </form>
  </div>
  <div data-role="footer" data-position="fixed" class="nav-glyphish" data-theme="e">
    <div data-role="navbar" class="nav-glyphish">
      <ul>
        <li> <a href="#index" id="login" data-icon="custom">Login</a> </li>
      </ul>
    </div>
  </div>
</div>
<div data-role="page" id="about">
  <div data-role="header" data-position="inline" data-theme="e">
    <h1>About Us</h1>
  </div>
  <img src="appleIcon.png" width="90px" height="90px" style="margin:10px;" />
  <div data-role="content" class="ui-content" role="main">
    <ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="a">
      <li style="margin-bottom:10px;" data-role="list-divider">BACKGROUND INFORMATION</li>
      <blockquote><b>C & P Rent-A-Car (Pte) Ltd (CPRAC)</b> is incorporated in Singapore in 1979. 
        It is a wholly owned subsidiary of <b>C & P Holdings Pte Ltd (CPH)</b>, a company incorporated in Singapore since 1970.
        CPH core business is in warehousing, logistics and infrastructure. 
        CPH owns 49% of SGX Mainboard listed CWT Ltd, who is an integrated logistics provider. <br />
        <br />
      </blockquote>
    </ul>
  </div>
  <div data-role="footer" data-position="inline" data-theme="e">
    <h4>&nbsp;</h4>
  </div>
</div>
<div data-role="page" id="contact">
  <div data-role="header" data-position="fixed" data-theme="e">
    <h1>Contact Us</h1>
  </div>
  <div data-role="content" class="ui-content" role="main">
    <ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="a">
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
  <div data-role="footer" data-position="fixed" data-theme="e">
    <h4>&nbsp;</h4>
  </div>
</div>
<div data-role="page" id="viewCars">
  <div data-role="header" data-position="fixed" data-theme="e">
    <h1>View Fleets</h1>
  </div>
  <div data-role="content" class="ui-content" role="main">
    <ul data-role="listview" id="injectElements" data-inset="true" data-theme="c" data-dividertheme="a">
      <li data-role="list-divider">Fleets</li>
    </ul>
  </div>
  <div data-role="footer" data-position="fixed" data-theme="e">
    <h4>&nbsp;</h4>
  </div>
</div>
</body>
</html>