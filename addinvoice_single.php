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
<!--
.style14 {font-size: 14px}
.style17 {font-size: 14px; font-weight: bold; color: #FFFFFF; }
.style24 {font-size: 16px; font-weight: bold; color: #FFCC66; }
.style25 {color: #FFFFFF; font-size: 14px;}
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

<div class="headerplace">You are here >> Sales Directory >> <a href="addinvoice_single.php">Sales Quatation Entry for Single Product</a></div>
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
				<li><a href="#tabs-1">Sales Quotation for Customer Type: Individual</a></li>
				<li><a href="#tabs-2">Sales Quotation for Customer Type: Company</a></li>
			</ul>
			<div id="tabs-1">
<script type="text/javascript">

	function startCalc()
{
  interval = setInterval("calc()",1);
}
function calc()
{
 unitprice = document.autoSumForm.unitprice.value;
 quantity = document.autoSumForm.quantity.value; 
 document.autoSumForm.grandtot.value = (unitprice * 1) * (quantity * 1)	;
}

function stopCalc()
{
  clearInterval(interval);
}
</script>
			<p>
			<form name="autoSumForm" action="printinvoice_single.php" method="post">
   <table align="center" border="1" width="50%" id="indextable">
   <tr><td align="left"><span class="style24">Parameter</span></td><td><span class="style24">Value</span></td></tr>

<tr>
  <td>Customer</td>
  <td><label>
  <?php
      $query = "SELECT custname FROM custind" ;
      $result = mysql_query($query);
      echo'<select name="custinfo" id="custinfo">';
      while($row = mysql_fetch_array( $result )) {
      echo '<option value="'.$row['custname'].'">' . $row['custname'] . '</option>';
      }
      echo '</select>';
?>
		</label></td></tr>
  <tr>
    <td>Item Description</td>
    <td><label>
      <select name="goods">
        <option selected="selected">Select the Item</option>
        <option>Pest Repeller</option>
        <option>Bug Scare</option>
      </select>
    </label></td>
  </tr>
  
<tr>
  <td>Unit Price (BDT) </td>
  <td><label><input type="text" name="unitprice" onFocus="startCalc();" onBlur="stopCalc();" align="right"/></label></td></tr>

<tr>
  <td>Quantity (pcs)</td>
  <td><label><input type="text" name="quantity" onFocus="startCalc();" onBlur="stopCalc();" align="right"/></label></td></tr>
  
<tr>
  <td>Grand Total (BDT)</td>
  <td><label><input name="grandtot" type="text" align="right"/></label></td></tr>

<tr><td></td><td><label>
<input name="submit" type="submit" value="Save & Print" />
<input name="saveonly" type="submit" value="Save Only" />
</label></td></tr>
</table>
</form>
</div>
		<div id="tabs-2">
<p>			
<script type="text/javascript">

	function startCalc1()
{
  interval1 = setInterval("calc1()",1);
}
function calc1()
{
 unitprice1 = document.autoSumForm1.unitprice1.value;
 quantity1 = document.autoSumForm1.quantity1.value; 
 document.autoSumForm1.grandtot1.value = (unitprice1 * 1) * (quantity1 * 1)	;
}

function stopCalc1()
{
  clearInterval(interval1);
}

</script>
			<form name="autoSumForm1" action="printinvoice_single.php" method="post">
   <table align="center" border="1" width="50%" id="indextable">
   <tr><td align="left"><span class="style24">Parameter</span></td><td><span class="style24">Value</span></td></tr>

<tr>
  <td>Customer</td>
  <td><label>
  <?php
      $query = "SELECT comname FROM custcom" ;
      $result = mysql_query($query);
      echo'<select name="cominfo" id="cominfo">';
      while($row = mysql_fetch_array( $result )) {
      echo '<option value="'.$row['comname'].'">' . $row['comname'] . '</option>';
      }
      echo '</select>';
?>
		</label></td></tr>
  <tr>
    <td>Item Description</td>
    <td><label>
      <select name="goods">
        <option selected="selected">Select the Item</option>
        <option>Pest Repeller</option>
        <option>Bug Scare</option>
      </select>
    </label></td>
  </tr>
  
<tr>
  <td>Unit Price (BDT) </td>
  <td><label><input type="text" name="unitprice1" onFocus="startCalc1();" onBlur="stopCalc1();" align="right"/></label></td></tr>

<tr>
  <td>Quantity (pcs) </td>
  <td><label><input type="text" name="quantity1" onFocus="startCalc1();" onBlur="stopCalc1();" align="right"/></label></td></tr>
  
<tr>
  <td>Grand Total (BDT)</td>
  <td><label><input name="grandtot1" type="text" align="right"/></label></td></tr>

<tr><td></td><td><label>
<input name="submit" type="submit" value="Place Quotation" />
</label></td></tr>
</table>
</form>
</div>
</div>
<p>	
</div>
	
	<div class="clearer"><span></span></div>

<?php include("footer.php");?>
</div>

</body>

</html>