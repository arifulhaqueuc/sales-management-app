<?php
include("dbconnection.php");

if ($_POST['input_reference'])
{
	$ref = $_POST['reference_no'];
	$check_query = "SELECT *  FROM `product_reference` WHERE `ref_no` = '$ref';";
	$check = mysql_query($check_query);
	$exist = mysql_num_rows ($check);
	if ($exist)
	{
		echo "<center><h3>Reference No. already exists</h3></center>";
	}
	else
	{
		$product = $_POST['product'];
		$date = $_POST['date'];
		$query = "INSERT INTO `lubna`.`product_reference` (`id` ,`ref_no` ,`product` ,`date` ,`status`)VALUES (NULL , '$ref', '$product', '$date', 'Not Given');";
		$insert = mysql_query($query);
		if ($insert)
		{
			echo "<center><h3>Successfully Inserted Data</h3></center>";
		}
	}

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="product_reference_update.php" method="post" name="myform">
<table border="1" align="center">
<tr><th>Search Reference No</th><th><input name="reference" type="text" /></th><th><input name="search_reference" type="submit" value="Search" /></th></tr>
</table>
</form>
<?php
if ($_POST['search_reference'])
{
	$ref_no = $_POST['reference'];
	$query = "SELECT *  FROM `product_reference` WHERE `ref_no` = '$ref_no';";
	$search = mysql_query($query);
	$check = mysql_num_rows($search);
	
	if ($check)
	{
		echo "<table border='1' align='center'>";
		while ($data = mysql_fetch_array($search))
		{	
			echo "<tr><th>Reference No</th><th>Product</th><th>Date</th><th>Status</th><th>Mark</th><th>Update</th></tr>";
			echo "<tr><td>".$data['ref_no']."</td><td>".$data['product']."</td><td>".$data['date']."</td><td>".$data['status']."</td>";
			echo "<td><form action='product_reference_update.php' method='post' name='myform'>";
			echo "<label><input type='radio' name='status' value='delivered' id='RadioGroup1_0' />Delivered</label><label><input type='radio' name='status' value='not delivered' id='RadioGroup1_0' />Not Delivered</label></td>";
			echo "<td><input name='id' type='hidden' value='".$data['id']."' /><input name='update_reference' type='submit' value='Update' /></form></td></tr>";
		}
		echo "</table>";
	}
	else
	{
		echo "<center><h3>No Such Entry Found</h3></center>";
	}
	
}
if ($_POST['update_reference'])
{
	$id = $_POST['id'];
	$status = $_POST['status'];
	$query = "UPDATE `lubna`.`product_reference` SET `status` = '$status' WHERE `product_reference`.`id` ='$id';";
	$update = mysql_query($query);
	if ($update)
	{
		echo "<center><h3>Update Successfully</h3></center>";
	}
}
?>
</body>
</html>