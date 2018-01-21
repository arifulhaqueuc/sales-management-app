<?php
include("dbconnection.php");
?>
<?php
$serial=$_GET['id'];
?>

<?php
$query=mysql_query("select * from custind where serial=$serial");
$data=mysql_fetch_object($query)
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
<?php 
include("header.php");
?>
<style type="text/css">
<!--
.style14 {font-size: 14px}
.style17 {font-size: 14px; font-weight: bold; color: #FFFFFF; }
.style24 {font-size: 16px; font-weight: bold; color: #FFCC66; }
.style25 {color: #FFFFFF; font-size: 14px;}
.style26 {color: #009933; font-weight: bold;}
-->
</style>
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

<div class="headerplace">You are here >> Customer Information >> <a href="updatecustind.php">Update Information Customer Type : Individual</a></div>
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
				<!--<li><a href="#tabs-1">Customer Type: Individual</a></li>-->
				<li><a href="#tabs-2">Customer Type: Individual</a></li>
			</ul>
			
			<div id="tabs-2">

<form action="updatepostcustind.php" method="post">
<table align="center" id="indextable" border="1" width="50%" style="border-style: dashed">
<tr><td align="left"><span class="style24">Parameter</span></td>
<td><span class="style24">Value</span></td></tr>
<tr><td>Customer Ref. No.</td><td><label><input type="text" name="refno" value="<?php echo $data->refno;?>"/></label></td></tr>
<tr><td>Customer Name</td><td><label><input name="custname" type="text" value="<?php echo $data->custname;?>"/></label></td></tr>
<tr><td>Customer Mail Address</td><td><label><textarea name="custmail"><?php echo $data->custmail;?></textarea></label></td></tr>
<tr><td>Customer Mobile No.</td><td><label><input type="text" name="custmob" value="<?php echo $data->custmob;?>"/></label></td></tr>
<tr><td>Customer T&amp;T No.</td><td><label><input type="text" name="custland" value="<?php echo $data->custland;?>"/></label></td></tr>
<tr><td>Customer e-mail Address</td><td><label><input type="text" name="custemail" value="<?php echo $data->custemail;?>"/></label></td></tr>
  
<tr>
  <td>&nbsp;</td>
  <td><label>	<input type="hidden" name="serial" value="<?php echo $data->serial;?>"/>
				<input name="submit" type="submit" value="Done" /> 
</label></td>
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