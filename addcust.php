<?php
include("dbconnection.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
<?php include("header.php");?>
<style type="text/css">
.style24 {font-size: 16px; font-weight: bold; color: #FFCC66; }
.style26 {color: #009933; font-weight: bold;}
</style>
<title>Lubna Power Add New Customer</title>
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
<div class="headerplace">You are here >> Customer Information >> <a href="addcust.php">Add New Customer </a></div>
	<div class="headercontent">
	<div id="tabs">
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
   <table id="indextable" border="1" width="50%">
     <tr><td align="left"><span class="style24">Parameter</span></td>
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
   <table align="center" id="indextable" border="1" width="50%">
     <tr><td align="left"><span class="style24">Parameter</span></td>
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
	</div>
	
	<div class="clearer"><span></span></div>

<?php include("footer.php");?>
</div>

</body>

</html>