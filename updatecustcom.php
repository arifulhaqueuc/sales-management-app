<?php
include("dbconnection.php");
?>
<?php
$serial=$_GET['id'];
?>

<?php
$query=mysql_query("select * from custcom where serial=$serial");
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

<div class="headerplace">You are here >> Customer Information >> <a href="updatecustcom.php">Update Information Customer Type : Company</a></div>
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
				<li><a href="#tabs-2">Customer Type: Company</a></li>
			</ul>
				
			<div id="tabs-2">

 <form action="updatepostcustcom.php" method="post">
   <table align="center" id="indextable" border="1" width="100%" style="border-style: dashed">
     <tr><td align="left" width="35%"><span class="style24">Parameter</span></td>
     <td><span class="style24">Value</span></td></tr>
<tr><td>Customer Ref. No.</td><td><label><input type="text" name="refno" value="<?php echo $data->refno;?>"/></label></td></tr>
<tr><td>Company Name</td><td><label><input name="comname" type="text" value="<?php echo $data->comname;?>"/></label></td></tr>
<tr><td>Company Mail Address</td><td><label><textarea name="commail"><?php echo $data->commail;?></textarea></label></td></tr>
<tr><td>Company Phone No.</td><td><label><input type="text" name="comphn" value="<?php echo $data->comphn;?>"/></label></td></tr>
<tr><td>Company e-mail Address</td><td><label><input type="text" name="comemail" value="<?php echo $data->comemail;?>"/></label></td></tr>
<tr><td>Contact Person</td><td><label><input type="text" name="contactperson" value="<?php echo $data->contactperson;?>"/></label></td></tr>
<tr><td>Person's Phone No.</td><td><label><input type="text" name="personphn" value="<?php echo $data->personphn;?>"/></label></td></tr>
<tr><td>Person's e-mail Address</td><td><label><input type="text" name="personemail" value="<?php echo $data->personemail;?>"/></label></td></tr>

  
<tr>
  <td>&nbsp;</td>
  <td><label>	<input type="hidden" name="serial" value="<?php echo $data->serial;?>"/>
				<input name="submit" type="submit" value="Done" /> 
</label></td>
</tr>

</table>
</form>

</div>
<!--	
	<div id="tabs-2">
   <table align="center" border="1" width="100%" bordercolordark="#000000" bordercolorlight="#000000">
   <thead><tr><th>Ref. No.</th><th>Company Name</th><th>Comapny Mail Add.</th><th>Company Phone No.</th>
   <th>Company e-mail Add.</th><th>Conatct Person</th><th>Person Phone No.</th><th>Person e-mail Add.</th></tr></thead>
<?php

	$query = mysql_query("SELECT * from custcom");

	while($data = mysql_fetch_array($query)) { ?>
	<tbody>
	<tr>
 
	<td><?php echo $data['refno'];?></td>	    
	<td><?php echo $data['comname'];?></td>	    
	<td><?php echo $data['commail'];?></td>	    
	<td><?php echo $data['comphn'];?></td>	    
	<td><?php echo $data['comemail'];?></td>
	<td><?php echo $data['contactperson'];?></td>
	<td><?php echo $data['personphn'];?></td>
	<td><?php echo $data['personemail'];?></td>
	</tr>
	</tbody>
	
<?php } ?>
</table>
</div>-->
</div>
	</div>
	
	<!--<div class="main_right">

		<div class="padded">
			
			<h1>Etiam placerat</h1>
			<p>Fusce porta pede nec eros. Maecenas ipsum sem, interdum non, aliquam vitae, interdum nec, metus. Maecenas ornare lobortis risus. Donec mattis <a href="index.html">quam aliquam</a> risus. Nulla non felis sollicitudin urna blandit egestas. Integer et libero varius pede tristique ultricies. Cras nisl. Proin quis massa semper felis euismod ultricies.</p>

			<h1>Maecenas</h1>
			<p>Fusce porta pede nec eros. Maecenas ipsum sem, interdum non, aliquam vitae, interdum nec, metus. Maecenas ornare lobortis risus.</p>
			
			<h1>Lobortis</h1>
			<p>Interdum nec, metus. Maecenas ornare lobortis risus. Donec mattis quam aliquam risus. Nulla non felis sollicitudin urna blandit egestas. Integer et libero <a href="index.html">varius pede</a> tristique ultricies. Cras nisl. Proin quis massa semper felis euismod ultricies.</p>

		</div>

	</div>-->

	<!--<div class="subnav">

		<h1>Something</h1>
		<ul>
			<li><a href="index.html">pellentesque</a></li>
			<li><a href="index.html">sociis natoque</a></li>
			<li><a href="index.html">semper</a></li>
			<li><a href="index.html">convallis</a></li>
		</ul>

		<h1>Another thing</h1>
		<ul>
			<li><a href="index.html">consequat molestie</a></li>
			<li><a href="index.html">sem justo</a></li>
			<li><a href="index.html">semper</a></li>
			<li><a href="index.html">sociis natoque</a></li>
		</ul>

		<h1>Third and last</h1>
		<ul>
			<li><a href="index.html">sociis natoque</a></li>
			<li><a href="index.html">magna sed purus</a></li>
			<li><a href="index.html">tincidunt</a></li>
			<li><a href="index.html">consequat molestie</a></li>
		</ul>

	</div>-->
		
	<!--<div class="main">

		<div class="padded">

			<h1>Porttitor posuere</h1>
			<p class="meta">October 24th, 2006 by Duis porttitor</p>

			<p>In hac habitasse platea dictumst. Duis porttitor. Sed vulputate elementum nisl. Vivamus et mi at arcu mattis iaculis. Nullam posuere tristique tortor. In bibendum. Aenean ornare, <a href="index.html">nunc eget pretium</a> porttitor, sem est pretium leo, non euismod nulla dui non diam. Pellentesque dictum faucibus leo. Vestibulum ac ante. Sed in est.</p>

			<blockquote><p>Sed sodales nisl sit amet augue. Donec ultrices, augue ullamcorper posuere laoreet, turpis massa tristique justo, sed egestas metus magna sed purus.</p></blockquote>
			
			<p>Aliquam risus justo, mollis in, laoreet a, consectetuer nec, risus. Nunc blandit sodales lacus. Nam luctus semper mi. In eu diam.</p>

			<p>Fusce porta pede nec eros. Maecenas ipsum sem, interdum non, aliquam vitae, interdum nec, metus. Maecenas ornare lobortis risus. Etiam placerat varius mauris. Maecenas viverra. Sed feugiat. Donec mattis <a href="index.html">quam aliquam</a> risus. Nulla non felis sollicitudin urna blandit egestas. Integer et libero varius pede tristique ultricies. Cras nisl. Proin quis massa semper felis euismod ultricies.
			</p>


			<h1>Adipiscing</h1>
			<p class="meta">September 31st, 2006 by Mauris</p>

			<p>Aliquam risus justo, mollis in, laoreet a, consectetuer nec, risus. Nunc blandit sodales lacus. Nam luctus semper mi. In eu diam. Phasellus rutrum elit vel nisi. Cras mauris nulla, egestas quis, cursus at, venenatis ac, ante. Fusce accumsan enim et arcu. Duis sagittis libero at lacus. Suspendisse lacinia nulla eget urna.</p>

			<ul>
				<li>Tristique</li>
				<li>Aenean</li>
				<li>Pretium</li>
			</ul>

			<p>In hac habitasse platea dictumst. Duis porttitor. Sed vulputate elementum nisl. Vivamus et mi at arcu mattis iaculis. Nullam posuere tristique tortor. In bibendum. Aenean ornare, nunc eget pretium porttitor, sem est pretium leo, non euismod nulla dui non diam. Pellentesque dictum faucibus leo. Vestibulum ac ante. Sed in est. Sed sodales nisl sit amet augue. Donec ultrices, augue ullamcorper posuere laoreet, turpis massa tristique justo, sed egestas metus magna sed purus. Fusce eleifend, dui ut posuere auctor, justo elit posuere sapien, at blandit enim quam fringilla mi.</p>
				
		</div>

	</div>-->
	
	<div class="clearer"><span></span></div>

<?php include("footer.php");?>

</div>

</body>

</html>