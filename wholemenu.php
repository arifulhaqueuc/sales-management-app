
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
<style type="text/css">
<!--
.style27 {
	font-size: 16px;
	color: #00FF99;
}
.style28 {color: #00FF99}

-->
</style>
</head>

<body>
<div class="container">
<?php
include("banner.php");
?>

<div class="headermenu">
<?php
include("username.php");
?>


<div class="roundcorner" align="center">
<div>
  <b class="spiffytop">
  <b class="spiffytop1"><b></b></b>
  <b class="spiffytop2"><b></b></b>
  <b class="spiffytop3"></b>
  <b class="spiffytop4"></b>
  <b class="spiffytop5"></b></b>

  <div class="spiffyfg">

	<h1></h1>
 
  <div class="menubox" align="center">
<div class="loginform" align="center">
<br>
  <div class="usertitle style27"><strong>Main Menu</strong></div>
<br>
<table width="90%">
<tr><th><span class="style28">Customer Information</span></th>
<th><span class="style28">Stock Register</span></th>
<th><span class="style28">Sales Directory</span></th>
<th><span class="style28">Accounts</span></th>
<!--<th>Reports &amp; Analysis</th>-->
<tr>
<tr><td>
<a href="addcust.php">Add New Customer</a></td>
<td><a href="addstock.php">Add New Stock</a></td>
<td><a href="addinvoice_single.php">Sales Quatation Entry Single</a></td>
<td><a href=".php">Income/Sales Revenue</a></td>
<!--<td><a href=".php">Generate Customer DB Report</a></td>-->
</tr>
<tr>
<td><a href="viewcust.php">View Customer List</a></td>
<td><a href="viewstock.php">View Product List</a></td>
<td><a href="addinvoice_double.php">Sales Quatation Entry Double</a></td>
<td><a href=".php">Expenditure/Purchase</a></td>
<!--<td><a href=".php">Generate Inventory Report</a></td>-->
</tr>
<tr>
<td><a href="updatecust.php">Edit Entry</a></td>
<!--<td><a href="updatestock.php">Edit Product Info.</a></td>-->
<td></td><td></td>
<!--<td><a href=".php">Generate Balance Sheet </a></td>-->
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<!--<td><a href=".php">Generate P&amp;L Statement </a></td>-->
</tr>
</table>
</div>
</div>
<br>
<br>
<h1></h1>
<br>
 <div class="clear"></div>
 </div>

  <b class="spiffybottom">
  <b class="spiffybottom5"></b>
  <b class="spiffybottom4"></b>
  <b class="spiffybottom3"></b>
  <b class="spiffybottom2"><b></b></b>
  <b class="spiffybottom1"><b></b></b></b>
</div>
</div>

</div>
	<div class="headercontent">
<h1></h1>
<br>
<br>
	<!--<div id="tabs">
			<script type="text/javascript">
			$(function()
			{
				// Tabs
				$('#tabs').tabs();
			});
		</script>
		<style type="text/css">
			/*demo page css*/
			ul#icons {margin: 0; padding: 0;}
			ul#icons li {margin: 2px; position: relative; padding: 2px 0; cursor: pointer; float: left;  list-style: none;}
			ul#icons span.ui-icon {float: left; margin: 0 4px;}
		</style>
			<ul>
				<li><a href="#tabs-1">Customer Type: Individual</a></li>
				<li><a href="#tabs-2">Customer Type: Company</a></li>
			</ul>
			<div id="tabs-1"> 
			<p>
			<form name="autoSumForm" action="addcustind.php" method="post">
   <table id="indextable" border="1" width="100%">
     <tr><td align="left" width="35%"><span class="style24">Parameter</span></td>
     <td><span class="style24">Value</span></td></tr>
<tr><td>Customer Ref. No.</td><td><label><input type="text" name="refno"/></label></td></tr>
<tr><td>Customer Name</td><td><label><input name="custname" type="text"/></label></td></tr>
<tr><td>Customer Mail Address</td><td><label><textarea name="custmail"></textarea></label></td></tr>
  <tr><td>Customer Mobile No.</td><td><label><input type="text" name="custmob"/></label></td></tr>
  <tr><td>Customer T&amp;T No.</td><td><label><input type="text" name="custland"/></label></td></tr>
  <td>Customer e-mail Address</td><td><label><input type="text" name="custemail"/></label></td></tr>
  
<tr>
  <td>&nbsp;</td>
  <td><label><input type="submit" name="Submit" value="Submit"/><input name="reset" type="reset" value="Erase"/></label></td>
</tr>

</table>
</form>
</div>			
<div id="tabs-2">
			<p>
			<form name="newcust" action="addcustcom.php" method="post">
   <table align="center" id="indextable" border="1" width="100%">
     <tr><td align="left" width="35%"><span class="style24">Parameter</span></td>
     <td><span class="style24">Value</span></td></tr>
<tr><td>Customer Ref. No.</td><td><label><input type="text" name="refno"/></label></td></tr>
<tr><td>Company Name</td><td><label><input name="comname" type="text"/></label></td></tr>
<tr><td>Mail Address</td><td><label><textarea name="commail"></textarea></label></td></tr>
  <tr><td>Phone No.</td><td><label><input type="text" name="comphn"/></label></td></tr>
  <tr><td>e-mail Address</td><td><label><input type="text" name="comemail"/></label></td></tr>
  <tr><td>Contact Person</td><td><label><input type="text" name="contactperson"/></label></td></tr>
  <tr><td>Person's Phone No.</td><td><label><input type="text" name="personphn"/></label></td></tr>
  <tr><td>Person's e-mail Address</td><td><label><input type="text" name="personemail"/></label></td></tr>
<tr>
  <td>&nbsp;</td>
  <td><label><input type="submit" name="Submit" value="Submit"/><input name="reset" type="reset" value="Erase"/></label></td>
</tr>

</table>
</form>
</div>
</div>
	</div>-->
	
	<!--<div class="main_right">

		<div class="padded">
							
		</div>

	</div>-->
	
	<div class="clearer"><span></span></div>

<?php include("footer.php");?>
</div>

</body>

</html>