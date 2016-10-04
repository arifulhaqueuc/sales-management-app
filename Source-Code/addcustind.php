<?php
include("dbconnection.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Lubna Power:Add New Customer Type-Individual</title>
</head>

<body>


<?php

$refno=$_POST['refno'];
$custname=$_POST['custname'];
$custmail=$_POST['custmail'];
$custmob=$_POST['custmob'];
$custland=$_POST['custland'];
$custemail=$_POST['custemail'];

$data="Insert into custind(refno,custname,custmail,custmob,custland,custemail)			 
values ('$refno','$custname','$custmail','$custmob','$custland','$custemail')";

$insert= mysql_query($data);
if($insert)
{
include_once('addcust.php');
}

?>

</body>
</html>



