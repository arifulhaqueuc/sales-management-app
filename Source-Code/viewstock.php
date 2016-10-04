<?php
include("dbconnection.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
<?php 
include("header.php");
?>
<title>Lubna Power View Product List</title>
<style type="text/css">
<!--
.style1 {color: #FFCC66}
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

<div class="headerplace">You are here >> Stock Register >> <a href="viewstock.php">View Product List</a></div>
<div class="headercontent">
	<p>
   <table border="1">
   <tr>
   <th><span class="style1">Prod.<br>
     Type</span></span></th>
   <th><span class="style1">Unit<br>
     Price</span></span></th>
   <th><span class="style1">No.of <br>
     Pcs.</span></span></th>
   <th><span class="style1">L/C No.</span></span></th>
   <th><span class="style1">Withdrawn <br>
     Amount</span></span></th>
   <th><span class="style1">Bank</span></span></th>
   <th><span class="style1">L/C Opening <br>
     Date</span></span></th>
   <th><span class="style1">Shippment <br> 
     Arrival Date</span></span></th>
   <th><span class="style1">Tax</span></span></th>
   <th><span class="style1">VAT</span></span></th>
   <th><span class="style1">AIT</span></span></th>
   <th><span class="style1">Ad.</span></span></th>
   <th><span class="style1">Printing</span></span></th>
   <th><span class="style1">Sundry</span></span></th>
   <th><span class="style1">Total Expense</span></span></th>
   </tr>
<?php

	$query = mysql_query("SELECT * from stock");

	while($data = mysql_fetch_array($query)) { ?>

	<tr>
	<td><?php echo $data['prodtype'];?></td>
	<td><?php echo $data['unitprice'];?></td>	    
	<td><?php echo $data['quantity'];?></td>	    
	<td><?php echo $data['lcno'];?></td>	    
	<td><?php echo $data['withdrawn'];?></td>	    
	<td><?php echo $data['bank'];?></td>	    
	<td><?php echo $data['issuedate'];?></td>	    
	<td><?php echo $data['arivaldate'];?></td>
	<td><?php echo $data['tax'];?></td>	    
	<td><?php echo $data['vat'];?></td>	    
	<td><?php echo $data['ait'];?></td>	    
	<td><?php echo $data['ad'];?></td>	    
	<td><?php echo $data['printing'];?></td>	    
	<td><?php echo $data['sundry'];?></td>	    
	<td><?php echo $data['totexp'];?></td>	    
	</tr>
	
<?php } ?>
	<tr>
    <td colspan="15">Grand Total = <?php echo expense(); ?> </td>
    </tr>
</table>

<p>
  </div>

<div class="clearer"><span></span></div>

<?php include("footer.php");?>
</div>

</body>

</html>

<?php
function expense()
{
$query = "select sum(totexp) from `stock`;";
$result = mysql_query ($query);
$total = mysql_result ($result, 0);

return $total;
}
?>