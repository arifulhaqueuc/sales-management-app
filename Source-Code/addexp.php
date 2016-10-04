<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
<?php 
include("header.php");
?>
<title>Lubna Power Add New Expenditure</title>
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
<div class="headerplace">You are here >> Accounts >> <a href="addexp.php">Add New Expenses</a></div>

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
		<!--	<ul>
				<li><a href="#tabs-1">Customer Type: Individual</a></li>
				<li><a href="#tabs-2">Customer Type: Company</a></li>
			</ul>-->
			<div id="tabs-1">
			<p>
			<form name="addstock" action="addstockdata.php" method="post">
   <table align="center" border="1" width="70%" id="indextable">
   <tr><td align="left" width="45%"><strong>Parameter</strong></td><td><strong>Value</strong></td></tr>

<tr>
  <td>Salary</td>
  <td><label><input type="text" name="lcno"/></label></td></tr>

<tr>
  <td>Convince</td>
  <td><label><input type="text" name="withamount"/></label></td></tr>

<tr>
  <td>Stationary</td>
  <td><label><input type="text" name="bank"/></label></td></tr>

<tr><td></td><td><label><input name="submit" type="submit" value="Submit" /> 
						<input name="reset" type="reset" value="Erase"/></label></td></tr>
</table>
</form>
</div>
			<!--<div id="tabs-2">
			
			<form name="newparty" action="funddataentry.php" method="post">
   <table align="center" border="1" width="450">
   <tr><td align="left" width="45%"><strong>Parameter</strong></td>
   <th>Value</th>
   </tr>
<tr>
  <td>Company Name</td>
  <td><input type="text" name="" value="" maxlength="" size=""/></td></tr>
<tr>
  <td>Mail Address</td>
  <td><textarea name="" value="" maxlength="" size=""></textarea></td></tr>
  <tr>
    <td>Phone No. </td>
    <td><input type="text" name="" value="" maxlength="" size=""/></td></tr>
  <tr>
  <td>e-mail Address</td>
  <td><input type="text" name="" value="" maxlength="" size=""/></td></tr>
<tr>
  <td>Contact Person</td>
  <td><input type="text" name="" value="" maxlength="" size=""/></td></tr>
<tr>
  <td>Contact Person's Phnone No.</td>
  <td><input type="text" name="" value="" maxlength="" size=""/></td></tr>
<tr>
  <td>Contact Person's e-mail Address</td>
  <td><input type="text" name="" value="" maxlength="" size=""/></td></tr>

<tr><td align="left"></td><td align="center"><input name="submit" type="submit" value="Submit" /> 
											<input name="reset" type="reset" value="Erase"/></td></tr>
</table>
</form>
</div>-->
</div>
<p>	
</div>
	
	<div class="clearer"><span></span></div>

<?php include("footer.php");?>

</div>

</body>

</html>