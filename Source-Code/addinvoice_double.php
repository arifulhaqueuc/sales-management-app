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
.style26 {color: #FFCC66}
-->
</style>
<title>Lubna Power Invoice</title></head>

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

<div class="headerplace">You are here >> Sales Directory >> <a href="addinvoice_double.php">Sales Quatation Entry for Double Product</a></div>
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
pestunitprice = document.autoSumForm.pestunitprice.value;
pestquantity = document.autoSumForm.pestquantity.value; 
 document.autoSumForm.pestgrandtot.value = (pestunitprice * 1) * (pestquantity * 1)	;
 
bugunitprice = document.autoSumForm.bugunitprice.value;
bugquantity = document.autoSumForm.bugquantity.value; 
 document.autoSumForm.buggrandtot.value = (bugunitprice * 1) * (bugquantity * 1)	;
 
 document.autoSumForm.grandtot.value = ((pestunitprice * 1) * (pestquantity * 1))+((bugunitprice * 1) * (bugquantity * 1));
}

function stopCalc()
{
  clearInterval(interval);
}
</script>
			
			<p>
<form name="autoSumForm" action="printinvoice_double.php" method="post">
			<table border="1">
			<thead><th><span class="style26">Customer Name</span></th> 
			<th><span class="style26">
			  <label>
              <?php
      $query = "SELECT custname FROM custind" ;
      $result = mysql_query($query);
      echo'<select name="custinfo" id="custinfo">';
      while($row = mysql_fetch_array( $result )) {
      echo '<option value="'.$row['custname'].'">' . $row['custname'] . '</option>';
      }
      echo '</select>';
?>
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
<td><label><input type="text" name="pestunitprice" onFocus="startCalc();" onBlur="stopCalc();" align="right"/></label></td>
<td><label><label><input type="text" name="pestquantity" onFocus="startCalc();" onBlur="stopCalc();" align="right"/></label></td>
			<td><label><input name="pestgrandtot" type="text" align="right"/></label></td>
			</tbody>
			<tbody>
   <td><label>Bug Scare</label></td>
<td><label><input type="text" name="bugunitprice" onFocus="startCalc();" onBlur="stopCalc();" align="right"/></label></td>
<td><label><label><input type="text" name="bugquantity" onFocus="startCalc();" onBlur="stopCalc();" align="right"/></label></td>
			<td><label><input name="buggrandtot" type="text" align="right"/></label></td>
			</tbody>
			<tbody>
			<td></td>
			<td></td>
			<td></td>
			<td><label><input name="grandtot" type="text" align="right"/></label></td>
			</tbody>
			<tbody><tr><td></td><td></td><td></td><td><input name="submit" type="submit" value="Place Quotation" /></td></tr></tbody>			
			</table>
			</form>
			<p>
		</div>
		<div id="tabs-2">

<script type="text/javascript">

	function startCalc1()
{
  interval1 = setInterval("calc1()",1);
}
function calc1()
{
pestunitprice1 = document.autoSumForm1.pestunitprice1.value;
pestquantity1 = document.autoSumForm1.pestquantity1.value; 
 document.autoSumForm1.pestgrandtot1.value = (pestunitprice1 * 1) * (pestquantity1 * 1)	;
 
bugunitprice1 = document.autoSumForm1.bugunitprice1.value;
bugquantity1 = document.autoSumForm1.bugquantity1.value; 
 document.autoSumForm1.buggrandtot1.value = (bugunitprice1 * 1) * (bugquantity1 * 1)	;
 
 document.autoSumForm1.grandtot1.value = ((pestunitprice1 * 1) * (pestquantity1 * 1))+((bugunitprice1 * 1) * (bugquantity1 * 1));
}

function stopCalc1()
{
  clearInterval(interval1);
}
</script>
			
			<p>
<form name="autoSumForm1" action="printinvoice_double.php" method="post">
			<table border="1">
			<thead><th><span class="style26">Customer Name</span></th> 
			<th><span class="style26">
			  <label>
              <?php
      $query = "SELECT custname FROM custind" ;
      $result = mysql_query($query);
      echo'<select name="custinfo" id="custinfo">';
      while($row = mysql_fetch_array( $result )) {
      echo '<option value="'.$row['custname'].'">' . $row['custname'] . '</option>';
      }
      echo '</select>';
?>
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
			</tbody>
			<tbody>
    <td><label>Pest Repeller</label></td>
<td><label><input type="text" name="pestunitprice1" onFocus="startCalc1();" onBlur="stopCalc1();" align="right"/></label></td>
<td><label><label><input type="text" name="pestquantity1" onFocus="startCalc1();" onBlur="stopCalc1();" align="right"/></label></td>
			<td><label><input name="pestgrandtot1" type="text" align="right"/></label></td>
			</tbody>
			<tbody>
   <td><label>Bug Scare</label></td>
<td><label><input type="text" name="bugunitprice1" onFocus="startCalc1();" onBlur="stopCalc1();" align="right"/></label></td>
<td><label><label><input type="text" name="bugquantity1" onFocus="startCalc1();" onBlur="stopCalc1();" align="right"/></label></td>
			<td><label><input name="buggrandtot1" type="text" align="right"/></label></td>
			</tbody>
			<tbody>
			<td></td>
			<td></td>
			<td></td>
			<td><label><input name="grandtot1" type="text" align="right"/></label></td>
			</tbody>
			<tbody><tr><td></td><td></td><td></td><td><input name="submit" type="submit" value="Place Quotation" /></td></tr></tbody>
			</table>
		  </form>
			<p>
			

















			
</div>
</div>
<p>	
</div>
	
	<div class="clearer"><span></span></div>

<?php include("footer.php");?>
</div>

</body>

</html>