<?php
session_start();
include("dbconnection.php");
$user = trim($_POST['username']);
$pass = trim($_POST['password']);
$usertest = mysql_query("Select * from user where username = '$user' and password = '$pass'");
$row = mysql_fetch_object($usertest);
if(@mysql_num_rows($usertest)>0){
$_SESSION['username'] = $user;
echo "<script>location.replace('wholemenu.php')</script>";
}
else { include_once('index.php');
echo "<script>alert ('Incorrect Username or password');</script>";
}
?>