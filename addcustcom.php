<?php
include("dbconnection.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Add New Customer Type: Company</title>
</head>

<body>


<?php

$refno=$_POST['refno'];
$comname=$_POST['comname'];
$commail=$_POST['commail'];
$comphn=$_POST['comphn'];
$comemail=$_POST['comemail'];
$contactperson=$_POST['contactperson'];
$contactperson=$_POST['contactperson'];
$personphn=$_POST['personphn'];
$personemail=$_POST['personemail'];

$data="Insert into custcom(refno,comname,commail,comphn,comemail,contactperson,personphn,personemail)			 
values ('$refno','$comname','$commail','$comphn','$comemail','$contactperson','$personphn','$personemail')";

$insert= mysql_query($data);
if($insert)
{
include_once('viewcust.php');
}

?>

</body>
</html>



