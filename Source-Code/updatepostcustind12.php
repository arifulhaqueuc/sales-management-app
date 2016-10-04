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
$fundsource=$_POST['fundsource'];
$fields=$_POST['fields'];
$disagain=$_POST['disagain'];
$withamount=$_POST['withamount'];
$refundamount=$_POST['refundamount'];
$dueamount=$_POST['dueamount'];
$issuedate=$_POST['issuedate'];
$refunddate=$_POST['refunddate'];
$duerefund=$_POST['duerefund'];


$data=mysql_query("UPDATE repayment.newentry 
	  				 SET refno = '$refno',
						 fundsource = '$fundsource',
						 fields = '$fields',
						 disagain = '$disagain',
						 withamount = '$withamount',
						 refundamount = '$refundamount',
						 dueamount = '$dueamount',
						 issuedate = '$issuedate',
						 refunddate = '$refunddate',
						 duerefund = '$duerefund' 
					WHERE newentry.serial =$serial");
						 
						 
//*if($data)echo"<h3>Data Updated</h3>";*//
echo "<script>location.replace('viewentry.php')</script>";

?>
</body>
</html>
