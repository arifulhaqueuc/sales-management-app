<?php
include("dbconnection.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Generate Invoice</title>
</head>

<body>


<?php

$cominfo=$_POST['cominfo'];
$goods=$_POST['goods'];
$unitprice=$_POST['unitprice'];
$quantity=$_POST['quantity'];
$grandtot=$_POST['grandtot'];

$data="Insert into invoice(cominfo,goods,unitprice,quantity,grandtot)			 
values ('$cominfo','$goods','$unitprice','$quantity','$grandtot')";

$insert= mysql_query($data);
if($insert)
{
include_once('index.php');
}

?>

</body>
</html>