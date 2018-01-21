<?php
include("dbconnection.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Add New Customer</title>
</head>

<body>


<?php

$prodtype=$_POST['prodtype'];
$pcs=$_POST['pcs'];
$lcno=$_POST['lcno'];
$withamount=$_POST['withamount'];
$bank=$_POST['bank'];
$issuedate=$_POST['issuedate'];
$arivaldate=$_POST['arivaldate'];
$tax=$_POST['tax'];
$vat=$_POST['vat'];
$ait=$_POST['ait'];
$ad=$_POST['ad'];
$printing=$_POST['printing'];
$sundry=$_POST['sundry'];

$data="Insert into stock(prodtype,pcs,lcno,withamount,bank,issuedate,arivaldate,tax,vat,ait,ad,printing,sundry)			 
values ('$prodtype','$pcs','$lcno','$withamount','$bank','$issuedate','$arivaldate','$tax','$vat','$ait','$ad','$printing','$sundry')";

$insert= mysql_query($data);
if($insert)
{
include_once('viewstock.php');
}

?>

</body>
</html>