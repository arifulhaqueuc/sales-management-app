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

	<div class="header">
	<div class="title">
	<div class="logo1"><img src="images/imagddhdhdes.jpg" height="50" width="50"/></div>
		<div class="logo1des style2">
			<span class="style5">LUBNA POWER</span>		<br>H # 45, Rd # 9A, Apt-A3, Dhanmondi, Dhaka-1209.
	      <br><u>Contact</u>: 01714-161599. <u>E-mail</u>:tareqkhan02@gmail.com</span>
		</div>
	</div>
<div class="copy" align="center">Customer Copy</div>
	<?php
   $custinfo = $_POST["custinfo"];
   $goods1 = "Pest Repeller";
   $pestunitprice = $_POST["pestunitprice"];
   $pestquantity = $_POST["pestquantity"];
   $pestgrandtot = $_POST["pestgrandtot"];
   
   $goods2 = "Bug Scare";
   $bugunitprice = $_POST["bugunitprice"];
   $bugquantity = $_POST["bugquantity"];
   $buggrandtot = $_POST["buggrandtot"];
   
   
   $connection = mysql_connect ("localhost","root","");
   $select_db = mysql_select_db ("lubna");

   $query = "INSERT INTO `lubna`.`invoice` (`invoice_no`, `custinfo`, `goods`,`unitprice`,`quantity`,`grandtot`) 
   			VALUES (NULL, '".$custinfo."', '".$goods1."','".$pestunitprice."', '".$pestquantity."','".$pestgrandtot."');";
   $insert = mysql_query ($query);
   
   $query2 = "INSERT INTO `lubna`.`invoice` (`invoice_no`, `custinfo`, `goods`,`unitprice`,`quantity`,`grandtot`) 
   			VALUES (NULL, '".$custinfo."', '".$goods2."','".$bugunitprice."', '".$bugquantity."','".$buggrandtot."');";
   $insert2 = mysql_query ($query2);
   
//   if ($insert)
// {
//   echo "DATA SUCCESSFULLY INSERTED";
// }
//   mysql_close ();
	
	
	//$connection = mysql_connect ("localhost","root","");
    //$select_db = mysql_select_db ("test");
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
			<table border="1">
			<thead><th><span class="style26">Customer Name</span></th> 
			<th><span class="style26">
			  <label>
              <label><?php echo $_POST["custinfo"]; ?></label>
		      </label>
			</span></th>
		
			  <span class="style26">
			    </thead>
			  </span>
			<tbody>
			<th><span class="style26">Prod Type</span></th>
			<th><span class="style26">Unit Price</span></th>
			<th><span class="style26">Quantity</span></th>
			<th><span class="style26">Total</span></th>
			  <span class="style26">
			    </tbody>
			  </span>
			<tbody>
    <td><label>Pest Repeller</label></td>
<td><label><?php echo $_POST["pestunitprice"]; ?></label></td>
<td><label><?php echo $_POST["pestquantity"]; ?></label></td>
<td><label><?php echo $_POST["pestgrandtot"]; ?></label></td>
			</tbody>
			<tbody>
   <td><label>Bug Scare</label></td>
<td><label><?php echo $_POST["bugunitprice"]; ?></label></td>
<td><label><?php echo $_POST["bugquantity"]; ?></label></td>
<td><label><?php echo $_POST["buggrandtot"]; ?></label></td>
			</tbody>
			   <td><label>Grand Total</label></td>
<td><label><?php echo $_POST["bugunitprice1"]; ?></label></td>
<td><label><?php echo $_POST["bugquantity1"]; ?></label></td>
<td><label><?php echo $_POST["grandtot"]; ?></label></td>
			</tbody>
			</table>
			
<br>			
<!--  <table align="center" border="1" id="indextable">
   <thead><tr><th>Customer</th><th>Item</th><th>Unit Price(BDT)</th><th>Quantity(pcs)</th><th>Grand Total (BDT)</th></tr></thead>
      <tbody><tr>
<td><label><?php echo $_POST["custinfo"]; ?></label></td>
<td><label><?php echo $_POST["goods"]; ?></label></td>
<td><label><?php echo $_POST["unitprice"]; ?></label></td>
<td><label><?php echo $_POST["quantity"]; ?></label></td>
<td><label></label></td>

</tr></tbody>
   
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
<table width="100%"><tr><td><div align="center">Seller Copy</div></td></tr></table>
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
<table border="1">
			<thead><th><span class="style26">Customer Name</span></th> 
			<th><span class="style26">
			  <label>
              <label><?php echo $_POST["custinfo"]; ?></label>
		      </label>
			</span></th>
		
			  <span class="style26">
			    </thead>
			  </span>
			<tbody>
			<th><span class="style26">Prod Type</span></th>
			<th><span class="style26">Unit Price</span></th>
			<th><span class="style26">Quantity</span></th>
			<th><span class="style26">Total</span></th>
			  <span class="style26">
			    </tbody>
			  </span>
			<tbody>
    <td><label>Pest Repeller</label></td>
<td><label><?php echo $_POST["pestunitprice"]; ?></label></td>
<td><label><?php echo $_POST["pestquantity"]; ?></label></td>
<td><label><?php echo $_POST["pestgrandtot"]; ?></label></td>
			</tbody>
			<tbody>
   <td><label>Bug Scare</label></td>
<td><label><?php echo $_POST["bugunitprice"]; ?></label></td>
<td><label><?php echo $_POST["bugquantity"]; ?></label></td>
<td><label><?php echo $_POST["buggrandtot"]; ?></label></td>
			</tbody>
			   <td><label>Grand Total</label></td>
<td><label><?php echo $_POST["bugunitprice1"]; ?></label></td>
<td><label><?php echo $_POST["bugquantity1"]; ?></label></td>
<td><label><?php echo $_POST["grandtot"]; ?></label></td>
			</tbody>
			</table>

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