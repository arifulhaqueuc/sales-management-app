<?php
include("dbconnection.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
<?php 
include("header.php");
?>
<style type="text/css">
.style24 {font-size: 16px; font-weight: bold; color: #FFCC66; }
.style26 {color: #009933; font-weight: bold;}
</style>
<title>Lubna Power Add New Product</title>
<script type="text/javascript">

function startCalc()
{
  interval = setInterval("calc()",1);
}
function calc()
{
 unitprice = document.autoSumForm.unitprice.value;
 quantity = document.autoSumForm.quantity.value; 
  withdrawn = document.autoSumForm.withdrawn.value; 
   tax = document.autoSumForm.tax.value; 
    vat = document.autoSumForm.vat.value; 
	 ait = document.autoSumForm.ait.value; 
	  ad = document.autoSumForm.ad.value; 
	   printing = document.autoSumForm.printing.value; 
	    sundry = document.autoSumForm.sundry.value; 
		
document.autoSumForm.totexp.value = (unitprice * 1) * (quantity * 1)+	(withdrawn * 1)+(tax * 1)+(vat * 1)+(ait * 1)+(ad * 1)+
(printing * 1)+(sundry * 1);
}

function stopCalc()
{
  clearInterval(interval);
}
</script>
</head>

<body>
<div class="container">
<?php
include("banner.php");
?>
<?php
include("username.php");
?>
<?php
include("menu.php");
?>

<div class="headerplace">You are here >> Stock Register >> <a href="addstock.php">Add New Product</a></div>

	<div class="headercontent">
	<div id="tabs">
		
		<div id="tabs-1">
			<p>    <form name="autoSumForm" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
<!--			<form name="autoSumForm" action="addstockdata.php" method="post">-->
   <table align="center" border="1" id="indextable">
   <tr><td align="left"><strong><span class="style24">Parameter</span></strong></td>
   <td><strong><span class="style24">Value</span></strong></td></tr>

<tr>
  <td>Product Type</td>
  <td><label>
  <select name="prodtype">
    <option selected="selected">Select the Item</option>
    <option>Pest Repeller</option>
    <option>Bug Scare</option>
  </select>
  </label></td></tr>

<tr>
  <td>Unit Price (BDT) </td>
  <td><label><input type="text" name="unitprice" onFocus="startCalc();" onBlur="stopCalc();" align="right"/></label></td></tr>

<tr>
  <td>No. of Pcs.</td>
  <td><label><input type="text" name="quantity" onFocus="startCalc();" onBlur="stopCalc();" align="right"/></label></td></tr>

<tr>
  <td>L/C No.</td>
  <td><label><input type="text" name="lcno" onFocus="startCalc();" onBlur="stopCalc();" align="right"/></label></td></tr>

<tr>
  <td>Withdrawn Amount </td>
  <td><label><input type="text" name="withdrawn" onFocus="startCalc();" onBlur="stopCalc();" align="right"/></label></td></tr>

<tr>
  <td>Bank </td>
  <td><label><input type="text" name="bank" onFocus="startCalc();" onBlur="stopCalc();" align="right"/></label></td></tr>

<tr>
  <td>Opening Date</td>
  <td><label><input name="issuedate" type="text" id="demo1" maxlength="25" size="25"/>
			<a href="javascript:NewCal('demo1','ddmmmyyyy')">
			<img src="images/Seven_segment_display-animated.gif" width="20" height="16"></a></label></td></tr>
<tr>
  <td>Shippment Arrival Date</td>
  <td><label><input name="arivaldate" type="text" id="demo2" maxlength="25" size="25"/>
			<a href="javascript:NewCal('demo2','ddmmmyyyy')">
			<img src="images/Seven_segment_display-animated.gif" width="20" height="16"></a></label></td></tr>
			
<tr>
  <td>Tax </td>
  <td><label><input type="text" name="tax" onFocus="startCalc();" onBlur="stopCalc();" align="right"/></label></td></tr>

<tr>
  <td>VAT</td>
  <td><label><input type="text" name="vat" onFocus="startCalc();" onBlur="stopCalc();" align="right"/></label></td></tr>

<tr>
  <td>AIT </td>
  <td><label><input type="text" name="ait" onFocus="startCalc();" onBlur="stopCalc();" align="right"/></label></td></tr>

<tr>
  <td>Advertisement</td>
  <td><label><input type="text" name="ad" onFocus="startCalc();" onBlur="stopCalc();" align="right"/></label></td></tr>

<tr>
  <td>Printing / Stationary</td>
  <td><label><input type="text" name="printing" onFocus="startCalc();" onBlur="stopCalc();" align="right"/></label></td></tr>


<tr>
  <td>Sundry Expenses </td>
  <td><label><input type="text" name="sundry" onFocus="startCalc();" onBlur="stopCalc();" align="right"/></label></td></tr>

  
<tr>
  <td>Total Expenses </td>
  <td><label><input name="totexp" type="text" align="right"/></label></td></tr>

<tr><td></td><td><label><input name="submit" type="submit" value="Submit" /></tr>
</table>
</form>



<?php

$prodtype=$_POST['prodtype'];
$unitprice=$_POST['unitprice'];
$quantity=$_POST['quantity'];
$lcno=$_POST['lcno'];
$withdrawn=$_POST['withdrawn'];
$bank=$_POST['bank'];
$issuedate=$_POST['issuedate'];
$arivaldate=$_POST['arivaldate'];
$tax=$_POST['tax'];
$vat=$_POST['vat'];
$ait=$_POST['ait'];
$ad=$_POST['ad'];
$printing=$_POST['printing'];
$sundry=$_POST['sundry'];
$totexp=$_POST['totexp'];

$data="Insert into stock(prodtype,unitprice,quantity,lcno,withdrawn,bank,issuedate,arivaldate,tax,vat,ait,ad,printing,sundry,totexp)			
values ('$prodtype','$unitprice','$quantity','$lcno','$withdrawn','$bank','$issuedate','$arivaldate','$tax','$vat','$ait','$ad','$printing','$sundry','$totexp')";

$insert= mysql_query($data);
if($insert)
{
//include_once('wholemenu.php');
}

?>

</div>
	
</div>
<p>	</div>
	
	<div class="clearer"><span></span></div>

<?php include("footer.php");?>

</div>

</body>

</html>