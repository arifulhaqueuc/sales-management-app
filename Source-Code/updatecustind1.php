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
<?php include("header.php");?>
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

<div class="headerplace">You are here >> Issue Item >> <a href="issueitem.php">Opening Entry</a></div>
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
	<form name="autoSumForm" action="updatepostcustind1.php" method="post">
   <table id="indextable" border="1" width="50%">
     <tr><td align="left"><span class="style24">Parameter</span></td>
     <td><span class="style24">Value</span></td></tr>
<tr><td>Customer Ref. No.</td><td><label><input type="text" name="refno" value="<?php echo $data->refno;?>"/></label></td></tr>
<tr><td>Customer Name</td><td><label><input name="custname" type="text" value="<?php echo $data->custname;?>"/></label></td></tr>
<tr><td>Customer Mail Address</td><td><label><textarea name="custmail"><?php echo $data->custmail;?></textarea></label></td></tr>
  <tr><td>Customer Mobile No.</td><td><label><input type="text" name="custmob" value="<?php echo $data->custmob;?>"/></label></td></tr>
  <tr><td>Customer T&amp;T No.</td><td><label><input type="text" name="custland" value="<?php echo $data->custland;?>"/></label></td></tr>
  <td>Customer e-mail Address</td><td><label><input type="text" name="custemail" value="<?php echo $data->custemail;?>"/></label></td></tr>
  
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