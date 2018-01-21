<?php
include("dbconnection.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
<?php 
include("header.php");
?>
<style type="text/css">
<!--
.style24 {font-size: 16px; font-weight: bold; color: #FFCC66; }
.style26 {color: #009933; font-weight: bold;}
-->
</style>
<title>Lubna Power Edit Customer Information</title></head>

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


<div class="headerplace">You are here >> Customer Information >> <a href="updatecustcom.php">Edit Customer Information </a></div>
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
				<li><a href="#tabs-1">Update Customer Information Type: Individual</a></li>
				<li><a href="#tabs-2">Update Customer Information Type: Company</a></li>
			</ul>
				
			<div id="tabs-1">

   <table align="center" border="1">
   <thead><tr><!--<th><span class="style24">Serial</span></th>--><th><span class="style24">Ref.<br> No.</span></th><th><span class="style24">Cust.<br> Name</span></th><th><span class="style24">Cust.<br>Mail Add.</span></th><th><span class="style24">Cust.<br> Mob. No.</span></th><th><span class="style24">Cust.<br> T&amp;T No.</span></th><th><span class="style24">Cust. <br>e-mail Add.</span></th><th><div align="center"><span class="style24">Update</span></div></th><th><div align="center"><span class="style24">Delete</span></div></th></tr></thead>
<?php

	$query = mysql_query("SELECT * from custind");

	while($data = mysql_fetch_array($query)) { ?>
	<tbody>
	<tr>
	<!--<td><?php //echo $data['serial'];?></td>    -->
	<td><?php echo $data['refno'];?></td>    
	<td><?php echo $data['custname'];?></td>	    
	<td><?php echo $data['custmail'];?></td>	    
	<td><?php echo $data['custmob'];?></td>	    
	<td><?php echo $data['custland'];?></td>
	<td><?php echo $data['custemail'];?></td>
	<td align="center"><div align="center"><a href="updatecustind.php?id=<?php echo $data['serial'];?>">
	<img src="images/Tool_animated.gif" alt="update" width="26" height="14" /></a></div></td>   
	<td align="center"><div align="center"><a href="deletecustind.php?id=<?php echo $data['serial'];?>" >
	  <img src="images/Vent.gif" alt="Delete" width="26" height="14" /></a></div></td>   
	</tr>
	</tbody>	
<?php } ?>
</table>

</div>
	<div id="tabs-2">
  <table border="1" align="center">
   <thead><tr><!--<th><span class="style24">Serial</span></th>
   refno,comname,commail,comphn,comemail,contactperson,personphn,personemail -->
   <th><span class="style24">Ref.<br> No.</span></th>
   <th><span class="style24">Comp. <br>Name</span></th>
     <th><span class="style24">Comp.<br> Mail Add.</span></th>
	 <th><span class="style24">Comp.<br> Phone No.</span></th>
   <th><span class="style24">Comp.<br> e-mail Add.</span></th>
   <th><span class="style24">Conatct<br>Person</span></th>
   <th><span class="style24">Person<br> Phone No.</span></th>
   <th><span class="style24">Person <br> e-mail Add.</span></th>
   <th><div align="center"><span class="style24">Update</span></div></th>
   <th><div align="center"><span class="style24">Delete</span></div></th></tr></thead>
<?php

	$query = mysql_query("SELECT *  from custcom");

	while($data = mysql_fetch_array($query)) { ?>
	<tbody>
	<tr>
<!--	<td><?php //echo $data['serial'];?></td>	  -->
	<td><?php echo $data['refno'];?></td>	    
	<td><?php echo $data['comname'];?></td>	    
	<td><?php echo $data['commail'];?></td>	    
	<td><?php echo $data['comphn'];?></td>	    
	<td><?php echo $data['comemail'];?></td>
	<td><?php echo $data['contactperson'];?></td>
	<td><?php echo $data['personphn'];?></td>
	<td><?php echo $data['personemail'];?></td>
	<td align="center"><div align="center"><a href="updatecustcom.php?id=<?php echo $data['serial'];?>">
	  <img src="images/Tool_animated.gif" alt="update" width="26" height="14" /></a></div></td>   
	<td align="center"><div align="center"><a href="deletecustcom.php?id=<?php echo $data['serial'];?>" >
	  <img src="images/Vent.gif" alt="Delete" width="26" height="14" /></a></div></td>   
	</tr>
	</tbody>
<?php } ?>
</table>
</div>
</div>
	</div>
	
	<div class="clearer"><span></span></div>

<?php include("footer.php");?>

</div>

</body>

</html>