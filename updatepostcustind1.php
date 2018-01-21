<?php
include("dbconnection.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Lubna Power: Add Customer</title>
</head>

<body>
<?php
$serial=$_POST['serial'];
$refno=$_POST['refno'];
$custname=$_POST['custname'];
$custmail=$_POST['custmail'];
$custmob=$_POST['custmob'];
$custland=$_POST['custland'];
$custemail=$_POST['custemail'];


$data=mysql_query("UPDATE lubna.custind 
	  				 SET refno = '$refno',
						 custname = '$custname',
						 custmail = '$custmail',
						 custmob = '$custmob',
						 custland = '$custland',
						 custemail = '$custemail'
					WHERE custind.serial =$serial");
						 
						 
//*if($data)echo"<h3>Data Updated</h3>";*//
echo "<script>location.replace('viewcust.php')</script>";

?>
</body>

<body>
<?php
$stid=$_POST['id'];
$name=$_POST['name'];
$address=$_POST['address'];
$ph=$_POST['ph'];
$gender=$_POST['gender'];
$country=$_POST['country'];

$data=mysql_query("UPDATE studentproject.info 
	  				 SET name = '$name',
						 address = '$address',
						 phone = '$ph',
						 gender = '$gender',
						 country = '$country' WHERE info.id =$stid");

//*if($data)echo"<h3>Data Updated</h3>";*//
echo "<script>location.replace('studentlist.php')</script>";

?>
</body>




</html>
