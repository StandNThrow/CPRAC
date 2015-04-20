<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<title>Homepage</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<div data-role="page" id="index">
  <div data-role="header" data-position="fixed" data-backbtn="false" data-theme="a">
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
      <br>
      <br>
      <a style="text-decoration:none;font-size:18px;" href="#register">Don't have an account?</a> <br>
      <br>
      <span id="loginMessageBox" style="display:none;"></span> <br>
      <br>
      <input name="Submit" type="submit" id="submit" data-theme="a" value="Login">
    </form>
  </div>
  <div data-role="footer" data-position="fixed" class="nav-glyphish" data-theme="a">
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
  <div data-role="header" data-position="fixed" data-theme="a">
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
      <br>
      <br>
      <span id="registerMessageBox" style="display:none;"></span> <br>
      <br>
      <input name="Submit" type="submit" id="submit" data-theme="a" value="Register">
    </form>
  </div>
  <div data-role="footer" data-position="fixed" class="nav-glyphish" data-theme="a">
    <div data-role="navbar" class="nav-glyphish">
      <ul>
        <li> <a href="#index" id="login" data-icon="custom">Login</a> </li>
      </ul>
    </div>
  </div>
</div>
<div data-role="page" id="about">
  <div data-role="header" data-position="inline" data-theme="a">
    <h1>About Us</h1>
  </div>
  <img src="appleIcon.png" width="90px" height="90px" style="margin:10px;">
  <div data-role="content" class="ui-content" role="main">
    <ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="a">
      <li style="margin-bottom:10px;" data-role="list-divider">BACKGROUND INFORMATION</li>
      <blockquote><b>C & P Rent-A-Car (Pte) Ltd (CPRAC)</b> is incorporated in Singapore in 1979. 
        It is a wholly owned subsidiary of <b>C & P Holdings Pte Ltd (CPH)</b>, a company incorporated in Singapore since 1970.
        CPH core business is in warehousing, logistics and infrastructure. 
        CPH owns 49% of SGX Mainboard listed CWT Ltd, who is an integrated logistics provider. <br>
        <br>
      </blockquote>
    </ul>
  </div>
  <div data-role="footer" data-position="inline" data-theme="a">
    <h4>&nbsp;</h4>
  </div>
</div>
<div data-role="page" id="contact">
  <div data-role="header" data-position="fixed" data-theme="a">
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
<script src="js/changeEmail.js"></script> 
<script src="js/changePassword.js"></script> 
<script src="js/chauffeurDrive.js"></script> 
<script src="js/login.js"></script> 
<script src="js/register.js"></script> 
<script src="js/register_action.js"></script> 
<script src="js/resetPassword.js"></script> 
<script src="js/selfDrive.js"></script> 
<script src="js/viewCars.js"></script> 
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
</body>
</html>