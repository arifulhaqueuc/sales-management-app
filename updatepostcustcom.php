<?php
include("dbconnection.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$serial=$_POST['serial'];
$refno=$_POST['refno'];
$comname=$_POST['comname'];
$commail=$_POST['commail'];
$comphn=$_POST['comphn'];
$comemail=$_POST['comemail'];
$contactperson=$_POST['contactperson'];
$personphn=$_POST['personphn'];
$personemail=$_POST['personemail'];


$data=mysql_query("UPDATE lubna.custcom 
	  				 SET refno = '$refno',
						 comname = '$comname',
						 commail = '$commail',
						 comphn = '$comphn',
						 comemail = '$comemail',
						 contactperson = '$contactperson',
						 personphn = '$personphn',
						 personemail = '$personemail'
					WHERE custcom.serial =$serial");
						 
						 
//*if($data)echo"<h3>Data Updated</h3>";*//
echo "<script>location.replace('viewcust.php')</script>";

?>
</body>
</html>
