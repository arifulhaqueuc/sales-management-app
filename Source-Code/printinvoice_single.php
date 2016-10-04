<?php
   $custinfo = $_POST["custinfo"];
   $goods = $_POST["goods"];
   $unitprice = $_POST["unitprice"];
   $quantity = $_POST["quantity"];
   $grandtot = $_POST["grandtot"];
   
   
   $connection = mysql_connect ("localhost","root","");
   $select_db = mysql_select_db ("lubna");
   
   if ($_POST['saveonly'])
   {
   $query = "INSERT INTO `lubna`.`invoice` (`invoice_no`, `custinfo`, `goods`,`unitprice`,`quantity`,`grandtot`) 
   			VALUES (NULL, '".$custinfo."', '".$goods."','".$unitprice."', '".$quantity."','".$grandtot."');";
   $insert = mysql_query ($query);
   die("DATA SAVED ONLY");
   }
	
	// Save and print will start from here
	$query = "INSERT INTO `lubna`.`invoice` (`invoice_no`, `custinfo`, `goods`,`unitprice`,`quantity`,`grandtot`) 
   			VALUES (NULL, '".$custinfo."', '".$goods."','".$unitprice."', '".$quantity."','".$grandtot."');";
    $insert = mysql_query ($query);
   
	$query1 = mysql_query ("SELECT * FROM `invoice` order by `invoice_no` desc");
	$fetch = mysql_fetch_object ( $query1 );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
<meta name="description" content="description"/>
<meta name="keywords" content="keywords"/> 
<meta name="author" content="author"/> 
<title>Lubna Power Invoice</title>
<link rel="stylesheet" type="text/css" href="csshorizontalmenu_print.css" />
<script language="Javascript1.2">
<!--

function printpage() 
{
window.print();
}

//-->
</script>
<style type="text/css">
<!--
.style2 {font-size: 9px}
.style3 {font-size: 9px}
.style4 {font-size: 10px}
.style5 {font-size: 12px}
-->
</style>
</head>

<body onLoad="printpage()">
<div class="container">
<?php 
//include("header.php");
?>
<style type="text/css">
<!--
.style2 {
	color: #000000;
	font-size: 7px;
}
.style3 {font-size: 15px}
.style4 {
	color: #000000;
}
-->
</style>
<h1></h1>
<h1></h1>
<h1></h1>
	<div class="header">
	<div class="title">
	<div class="logo1"><img src="images/imagddhdhdes.jpg" height="50" width="50"/></div>
		<div class="logo1des style2">
			<span class="style5">LUBNA POWER</span>		<br>H # 45, Rd # 9A, Apt-A3, Dhanmondi, Dhaka-1209.
	      <br><u>Contact</u>: 01714-161599. <u>E-mail</u>:tareqkhan02@gmail.com</span>
		</div>
	</div>
<div class="copy" align="center">Customer Copy</div>

	<table>
	  <tr><th>S/N: LP <?php echo $fetch->invoice_no; ?></th>
	<th>Date:
	<SCRIPT LANGUAGE="Javascript">

// Array of day names
var dayNames = new Array("Sunday","Monday","Tuesday","Wednesday", "Thursday","Friday","Saturday");

// Array of month Names
var monthNames = new Array ("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");

var now = new Date();
document.write(dayNames[now.getDay()] + ", " + monthNames[now.getMonth()] + " " + now.getDate() + ", " + now.getFullYear());
</SCRIPT>

</th></tr></table>
	</div>

	<div class="headercontent">
	<div id="tabs">
			<div id="tabs-1">
			<p>
			<br>

   <table align="center" border="1" id="indextable">
   <thead><tr><th>Customer</th><th>Item</th><th>Unit Price(BDT)</th><th>Quantity(pcs)</th><th>Grand Total (BDT)</th></tr></thead>
      <tbody><tr>
<td><label><?php echo $_POST["custinfo"]; ?></label></td>
<td><label><?php echo $_POST["goods"]; ?></label></td>
<td><label><?php echo $_POST["unitprice"]; ?></label></td>
<td><label><?php echo $_POST["quantity"]; ?></label></td>
<td><label><?php echo $_POST["grandtot"]; ?></label></td>

</tr></tbody>
<!--   
<tr><td width="25%"><strong>Customer</strong></td>
<td width="25%"><label><?php echo $_POST["custinfo"]; ?></label></td></tr>
<tr><td><strong>Item Description</strong></td>
<td><label><?php echo $_POST["goods"]; ?></label></td></tr>
<tr><td><strong>Unit Price (BDT) </strong></td>
<td><label><?php echo $_POST["unitprice"]; ?></label></td></tr>
<tr><td><strong>Quantity (pcs) </strong></td>
<td><label><?php echo $_POST["quantity"]; ?></label></td></tr>
<tr><td><strong>Grand Total (BDT)</strong></td>
<td><label><?php echo $_POST["grandtot"]; ?></label></td></tr>
-->

</table>

</div>
</div>
<p>	
</div>

<div class="clearer"><span></span></div>

	<div class="footer">
		
		<span class="left">All Products are 1 Year Warranty.<br>
		Lubna Power &copy; 2010 English U.K. </span>
		
		<span class="right">This is a Computer Generated Invoice.<br> No Signature Required. </a></span>
		
		<div class="clearer"><span></span></div>

	</div>

</div>
<p align="center">
<br>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
<div class="container">
<?php 
//include("header.php");
?>
<style type="text/css">
<!--
.style2 {
	color: #000000;
	font-size: 14px;
}
.style3 {font-size: 30px}
.style4 {
	color: #000000;
	font-weight: bold;
}
-->
</style>

	<div class="header">
	<div class="title">
	<div class="logo1"><img src="images/imagddhdhdes.jpg" height="50" width="50"/></div>
		<div class="logo1des style2">
			<span class="style5">LUBNA POWER</span>		<br>H # 45, Rd # 9A, Apt-A3, Dhanmondi, Dhaka-1209.
	      <br><u>Contact</u>: 01714-161599. <u>E-mail</u>:tareqkhan02@gmail.com</span>
	  </div>
	</div>
<div align="center" class="copy">Seller Copy</div>
	<?php
   
   	$query = mysql_query ("SELECT * FROM `invoice` order by `invoice_no` desc");
	$fetch = mysql_fetch_object ( $query );
	?>
	<table>
	  <tr><th>S/N: LP <?php echo $fetch->invoice_no; ?></th>
	<th>Date:
	<SCRIPT LANGUAGE="Javascript">

// Array of day names
var dayNames = new Array("Sunday","Monday","Tuesday","Wednesday", "Thursday","Friday","Saturday");

// Array of month Names
var monthNames = new Array ("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");

var now = new Date();
document.write(dayNames[now.getDay()] + ", " + monthNames[now.getMonth()] + " " + now.getDate() + ", " + now.getFullYear());
</SCRIPT>

</th></tr></table>
	</div>

	<div class="headercontent">
	<div id="tabs">
			<div id="tabs-1">
			<p>
			<br>

   <table border="1" align="center" id="indextable">
   <thead><tr><th>Customer</th>
   <th>Item</th>
   <th>Unit Price(BDT)</th>
   <th>Quantity(pcs)</th>
   <th>Grand Total (BDT)</th>
   </tr></thead>
      <tbody><tr>
<td><label><?php echo $_POST["custinfo"]; ?></label></td>
<td><label><?php echo $_POST["goods"]; ?></label></td>
<td><label><?php echo $_POST["unitprice"]; ?></label></td>
<td><label><?php echo $_POST["quantity"]; ?></label></td>
<td><label><?php echo $_POST["grandtot"]; ?></label></td>
</tr></tbody></table>

</div>
</div>
<p>	
</div>

<div class="clearer"><span></span></div>

	<div class="footer">
		<br>
		<br>
		<span class="left">......................................<br>Received By</span>
		
		<div class="clearer"><span></span></div>

	</div>
<p>
	<div class="footer">
		
		<span class="left">All Products are 1 Year Warranty.<br>Lubna Power &copy; 2010 English U.K. </span>
		
		<span class="right">This is a Computer Generated Invoice.<br> No Signature Required. </a></span>
		
		<div class="clearer"><span></span></div>

	</div>

</div>
</body>

</html>