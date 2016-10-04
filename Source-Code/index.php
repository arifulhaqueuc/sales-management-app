<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
<?php 
include("header.php");
?>
<title>Lubna Power Login Page</title>

<style type="text/css">
<!--
.style7 {color: #FFFFFF}
.style27 {font-size: 16px}
-->
</style>
</head>

<body>
<div class="container">
<?php
include("banner.php");
?>

<div class="headermenu">

<div class="roundcorner" align="center">
<div>
  <b class="spiffytop">
  <b class="spiffytop1"><b></b></b>
  <b class="spiffytop2"><b></b></b>
  <b class="spiffytop3"></b>
  <b class="spiffytop4"></b>
  <b class="spiffytop5"></b></b>

  <div class="spiffyfg">

	<h1></h1>
 
  <div class="menubox" align="center">
<div class="loginform" align="center">
<br>
  <div class="usertitle style27"><strong>User Login</strong></div>
<form name="login" method="post" action="checkuser.php">
<table align="center" border="1" bordercolor="#006699">
<tr><td>Username</td><td><input type="text" name="username" size="25"></td></tr>
<tr><td>Password</td><td><input type="password" name="password" size="25"></td></tr>
<tr><td></td>
  <td align="center"><input type="submit" name="submit" value="Login" /></td>
</tr>
</table>
</form>
</div>
</div>
<br>
<br>
<h1></h1>

<table border="1" bgcolor="#123456" width="50%">
<tr>
  <td>
    <span class="style7">
      <marquee>
    <strong>Repayment Tracking System is an auto remainder &amp; record book that keeps the records of money transaction that are taken place at the company.</strong>
          </marquee>
    </span> </td>
</tr>
</table>

<br>
 <div class="clear"></div>
 </div>

  <b class="spiffybottom">
  <b class="spiffybottom5"></b>
  <b class="spiffybottom4"></b>
  <b class="spiffybottom3"></b>
  <b class="spiffybottom2"><b></b></b>
  <b class="spiffybottom1"><b></b></b></b>
</div>
</div>

</div>
	<div class="headercontent">
<h1></h1>
<br>
<br>
	
	<div class="clearer"><span></span></div>

<?php include("footer.php");?>
</div>

</body>

</html>